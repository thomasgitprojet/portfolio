import '../scss/style.scss';
import zombieImg  from '../img/zombie.png';
import htmlImg    from '../img/html.png';
import cssImg     from '../img/css.png';
import jsImg      from '../img/js.png';
import phpImg     from '../img/php.png';
import mysqlImg   from '../img/mysql.png';
import reactImg   from '../img/react.png';
import symfonyImg from '../img/symfony.png';
import githubImg  from '../img/github.png';
import dockerImg  from '../img/docker.png';

 
const SKILLS = [
    { name: 'HTML',    src: htmlImg },
    { name: 'CSS',     src: cssImg },
    { name: 'JS',      src: jsImg },
    { name: 'PHP',     src: phpImg },
    { name: 'MySQL',   src: mysqlImg },
    { name: 'React',   src: reactImg },
    { name: 'Symfony', src: symfonyImg },
    { name: 'GitHub',  src: githubImg },
    { name: 'Docker',  src: dockerImg },
];

const ZOMBIE_SRC = zombieImg;
const BOTTOM_MIN  = 32;
const BOTTOM_MAX  = 215;
const SKILL_RATIO = 0.30; // 30% de chance qu'une cible soit une compétence
 
// ─── Utilitaires ──────────────────────────────
 
function rand(a, b) {
    return Math.random() * (b - a) + a;
}
 
function rand_int(a, b) {
    return Math.floor(rand(a, b));
}
 
// ─── Construction du décor du stand ───────────
 
function buildStageDecor(stage) {
    // Lignes de perspective
    const lines = [
        { left: '10%', rotate: '-8deg' },
        { left: '25%', rotate: '-4deg' },
        { left: '50%', rotate:   '0deg' },
        { left: '75%', rotate:  '4deg' },
        { left: '90%', rotate:  '8deg' },
    ];
    lines.forEach(({ left, rotate }) => {
        const el = document.createElement('div');
        el.className = 'persp-line';
        el.style.left   = left;
        el.style.height = '100%';
        el.style.transform = `rotate(${rotate})`;
        stage.appendChild(el);
    });
 
    // Ligne d'horizon
    const horizon = document.createElement('div');
    horizon.className = 'horizon';
    stage.appendChild(horizon);
 
    // Ligne de sol
    const ground = document.createElement('div');
    ground.className = 'ground-line';
    stage.appendChild(ground);
}
 
// ─── Création d'une entité (zombie ou compétence) ─
 
function createEntity(stage, stageW) {
    // Profondeur : 0 = loin, 1 = proche — biaisé vers le proche via sqrt
    const depth   = Math.sqrt(Math.random());
    const bottom  = BOTTOM_MIN + (1 - depth) * (BOTTOM_MAX - BOTTOM_MIN);
    const size    = Math.round(14 + depth * 50);
    const speed   = rand(80, 180) * (0.3 + depth * 0.9);
    const opacity = 0.25 + depth * 0.75;
    const goRight = Math.random() < 0.5;
    const startX  = goRight ? -size - 10 : stageW + 10;
    const isSkill = Math.random() < SKILL_RATIO;
 
    const el = document.createElement('div');
    el.className = 'entity';
    el.style.bottom  = `${bottom}px`;
    el.style.left    = `${startX}px`;
    el.style.width   = `${size}px`;
    el.style.height  = `${size}px`;
    el.style.opacity = opacity.toFixed(2);
 
    const img = document.createElement('img');
    img.style.width  = `${size}px`;
    img.style.height = `${size}px`;
 
    let type, name;
 
    if (isSkill) {
        const sk = SKILLS[rand_int(0, SKILLS.length)];
        img.src  = sk.src;
        img.alt  = sk.name;
        el.classList.add('entity--skill');
        type = 'skill';
        name = sk.name;
    } else {
        img.src = ZOMBIE_SRC;
        img.alt = 'zombie';
        if (!goRight) el.style.transform = 'scaleX(-1)';
        type = 'zombie';
        name = null;
    }
 
    el.appendChild(img);
    stage.appendChild(el);
 
    return { el, x: startX, speed, goRight, size, dead: false, type, name };
}
 
// ─── Flash visuel au point de tir ─────────────
 
function spawnFlash(stage, cx, cy, color = 'rgba(255,255,100,.6)') {
    const f = document.createElement('div');
    f.className = 'shot-flash';
    f.style.left       = `${cx}px`;
    f.style.top        = `${cy}px`;
    f.style.background = color;
    stage.appendChild(f);
    setTimeout(() => f.remove(), 350);
}
 
// ─── Rechargement ─────────────────────────────
 
function doReload(reloadBar, onDone) {
    reloadBar.style.transition = 'none';
    reloadBar.style.width = '0%';
    // double rAF pour laisser le navigateur appliquer la transition:none
    requestAnimationFrame(() => requestAnimationFrame(() => {
        reloadBar.style.transition = 'width 0.4s linear';
        reloadBar.style.width = '100%';
        setTimeout(onDone, 420);
    }));
}
 
// ─── Message HUD ──────────────────────────────
 
function showMsg(msgEl, text, modifier, duration = 1400) {
    msgEl.textContent = text;
    msgEl.className   = `range__msg range__msg--${modifier}`;
    clearTimeout(msgEl._timer);
    msgEl._timer = setTimeout(() => {
        msgEl.textContent = '';
        msgEl.className   = 'range__msg';
    }, duration);
}
 
// ─── Tir sur une entité ───────────────────────
 
function shoot(entity, e, stage, scoreEl, msgEl, reloadBar, state) {
    const rect = stage.getBoundingClientRect();
    spawnFlash(stage, e.clientX - rect.left, e.clientY - rect.top);
 
    state.canShoot = false;
    doReload(reloadBar, () => { state.canShoot = true; });
 
    if (entity.type === 'zombie') {
        entity.dead = true;
        entity.el.classList.add('spinning');
        state.score++;
        scoreEl.textContent = state.score;
        showMsg(msgEl, '💀 +1 — Zombie éliminé !', 'hit');
 
        entity.el.addEventListener('animationend', () => {
            entity.el.classList.add('dying');
            entity.el.addEventListener('animationend', () => {
                entity.el.remove();
            }, { once: true });
        }, { once: true });
 
    } else {
        entity.el.classList.add('wrongtarget');
        showMsg(msgEl, `⚠ Mauvaise cible — ${entity.name} est une compétence !`, 'miss', 2200);
        entity.el.addEventListener('animationend', () => {
            entity.el.classList.remove('wrongtarget');
        }, { once: true });
    }
}
 
// ─── Initialisation du stand ──────────────────
 
function initShootingRange() {
    const stage     = document.getElementById('range-stage');
    const scoreEl   = document.getElementById('range-score');
    const msgEl     = document.getElementById('range-msg');
    const reloadBar = document.getElementById('range-reload');
 
    // Éléments absents = section non présente dans la page
    if (!stage) return;
 
    buildStageDecor(stage);
 
    const entities = [];
    const state    = { canShoot: true, score: 0 };
 
    // ── Clic dans le vide ──
    stage.addEventListener('click', (e) => {
        if (!state.canShoot) return;
        if (e.target.classList.contains('entity') || e.target.tagName === 'IMG') return;
 
        const rect = stage.getBoundingClientRect();
        spawnFlash(stage, e.clientX - rect.left, e.clientY - rect.top, 'rgba(255,200,50,.35)');
        showMsg(msgEl, '— Dans le vide —', 'miss', 900);
 
        state.canShoot = false;
        doReload(reloadBar, () => { state.canShoot = true; });
    });
 
    // ── Spawn d'une entité ──
    function spawn() {
        const stageW  = stage.offsetWidth || 680;
        const entity  = createEntity(stage, stageW);
 
        entity.el.addEventListener('click', (e) => {
            e.stopPropagation();
            if (entity.dead || !state.canShoot) return;
            shoot(entity, e, stage, scoreEl, msgEl, reloadBar, state);
        });
 
        entities.push(entity);
    }
 
    // ── Boucle d'animation ──
    let last = null;
    function loop(ts) {
        if (!last) last = ts;
        const dt      = Math.min((ts - last) / 1000, 0.05);
        last = ts;
        const stageW  = stage.offsetWidth || 680;
 
        for (let i = entities.length - 1; i >= 0; i--) {
            const en = entities[i];
            if (en.dead) continue;
            en.x += en.goRight ? en.speed * dt : -en.speed * dt;
            en.el.style.left = `${en.x}px`;
 
            if (en.x > stageW + 100 || en.x < -100) {
                en.el.remove();
                entities.splice(i, 1);
            }
        }
        requestAnimationFrame(loop);
    }
    requestAnimationFrame(loop);
 
    // ── Spawns initiaux + spawn régulier ──
    for (let i = 0; i < 4; i++) {
        setTimeout(spawn, i * 500);
    }
 
    function scheduleSpawn() {
        spawn();
        setTimeout(scheduleSpawn, rand(900, 2400));
    }
    setTimeout(scheduleSpawn, 2200);
}
 
// ─── Gestion des onglets ──────────────────────
 
function initTabs() {
    const tabs = document.querySelectorAll('.tab');
    if (!tabs.length) return;
 
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('aria-controls');
 
            // Désactive tous les onglets et panels
            document.querySelectorAll('.tab').forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            document.querySelectorAll('.tab-panel').forEach(p => {
                p.classList.remove('active');
            });
 
            // Active l'onglet cliqué et son panel
            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');
            document.getElementById(target).classList.add('active');
        });
    });
}


const b2bImages = [
    'img/b2b/b2b-01.png',
    'img/b2b/b2b-02.png',
    'img/b2b/b2b-03.png',
    'img/b2b/b2b-04.png',
    'img/b2b/b2b-05.png',
    'img/b2b/b2b-06.png',
    'img/b2b/b2b-07.png',
    'img/b2b/b2b-08.png',
    'img/b2b/b2b-09.png'
];

let currentIndex = 0;
let modal, carouselImage, currentCounter, totalCounter, thumbnailsContainer;

function initCarousel() {
    // Récupérer les éléments DOM
    modal = document.getElementById('carousel-modal');
    carouselImage = document.getElementById('carousel-image');
    currentCounter = document.getElementById('carousel-current');
    totalCounter = document.getElementById('carousel-total');
    thumbnailsContainer = document.getElementById('carousel-thumbnails');
    const closeBtn = document.querySelector('.carousel-modal__close');
    const prevBtn = document.querySelector('.carousel__btn--prev');
    const nextBtn = document.querySelector('.carousel__btn--next');
    const overlay = document.querySelector('.carousel-modal__overlay');

    // Vérifier que les éléments existent
    if (!modal || !carouselImage) {
        console.warn('Éléments du carrousel non trouvés');
        return;
    }

    // Initialiser le compteur total
    totalCounter.textContent = b2bImages.length;

    // Créer les miniatures
    b2bImages.forEach((img, index) => {
        const thumb = document.createElement('div');
        thumb.className = 'carousel__thumbnail';
        thumb.innerHTML = `<img src="${img}" alt="Miniature ${index + 1}">`;
        thumb.addEventListener('click', () => showImage(index));
        thumbnailsContainer.appendChild(thumb);
    });

    // Ouvrir le carrousel au clic sur les miniatures de la grille
    document.querySelectorAll('.gallery-grid__item').forEach(item => {
        item.addEventListener('click', function() {
            const index = parseInt(this.getAttribute('data-index'));
            openCarousel(index);
        });
    });

    // Event listeners
    closeBtn.addEventListener('click', closeCarousel);
    overlay.addEventListener('click', closeCarousel);
    prevBtn.addEventListener('click', prevImage);
    nextBtn.addEventListener('click', nextImage);

    // Navigation clavier
    document.addEventListener('keydown', (e) => {
        if (modal.style.display === 'flex') {
            if (e.key === 'Escape') closeCarousel();
            if (e.key === 'ArrowLeft') prevImage();
            if (e.key === 'ArrowRight') nextImage();
        }
    });
}

function openCarousel(index) {
    currentIndex = index;
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
    showImage(currentIndex);
}

function closeCarousel() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

function showImage(index) {
    currentIndex = index;
    carouselImage.src = b2bImages[index];
    currentCounter.textContent = index + 1;
    
    // Mise à jour des miniatures actives
    document.querySelectorAll('.carousel__thumbnail').forEach((thumb, i) => {
        thumb.classList.toggle('active', i === index);
    });
}

function nextImage() {
    currentIndex = (currentIndex + 1) % b2bImages.length;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex = (currentIndex - 1 + b2bImages.length) % b2bImages.length;
    showImage(currentIndex);
}




export default { 

    // initZombies,
    // effectZombie,
    initCarousel,
    initShootingRange,
    initTabs
};