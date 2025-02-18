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

export default { 

    initZombies,
    effectZombie 
};