import '../scss/style.scss';

const zombies = []; // Tableau pour stocker chaque image et ses propriétés

function initZombies() {
    const imgs = document.querySelectorAll(".mouv-zombie"); // Sélectionne toutes les images

    imgs.forEach(img => {
        let dx = (Math.random()) + 1; // Vitesse aléatoire entre 2 et 3 pixels
        let dy = (Math.random()) + 1;

        // Définir une direction aléatoire (positive ou négative)
        dx *= Math.random() > 0.5 ? 1 : -1;
        dy *= Math.random() > 0.5 ? 1 : -1;

        // Ajouter l'image et ses propriétés au tableau
        zombies.push({
            img,
            dx,
            dy,
            x: Math.random() * (window.innerWidth - img.clientWidth),  // Position X aléatoire
            y: Math.random() * (window.innerHeight - img.clientHeight) // Position Y aléatoire
        });
    });

    moveZombies(); // Démarrer l'animation
}

function moveZombies() {
    zombies.forEach(zombie => {
        const maxX = window.innerWidth - zombie.img.clientWidth;
        const maxY = window.innerHeight - zombie.img.clientHeight;

        // Ajouter le déplacement
        zombie.x += zombie.dx;
        zombie.y += zombie.dy;

        // Vérifier les collisions avec les bords et inverser la direction si nécessaire
        if (zombie.x <= 0 || zombie.x >= maxX) zombie.dx *= -1;
        if (zombie.y <= 0 || zombie.y >= maxY) zombie.dy *= -1;

        // Appliquer les nouvelles positions
        zombie.img.style.left = `${zombie.x}px`;
        zombie.img.style.top = `${zombie.y}px`;
    });

    requestAnimationFrame(moveZombies); // Appeler en continu
}

function effectZombie (zombNumber) {   
    zombNumber.classList.add("shoot-effect");
    setTimeout(() => {
        removeZombie(zombNumber);
    } , 500);
}

function removeZombie (zombNumber) {
    zombNumber.classList.add("hidden");
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

    initZombies,
    effectZombie,
    initCarousel,
};