import Tools from './fonction.js';

const zombie1Down = document.querySelector ('[data-zomb="zomb1"]');
const zombie2Down = document.querySelector ('[data-zomb="zomb2"]');
const zombie3Down = document.querySelector ('[data-zomb="zomb3"]');

// Tools.initZombies();
document.addEventListener("DOMContentLoaded", () => {
    Tools.initZombies(); // Démarrer le mouvement des 3 images
    Tools.initCarousel();
});

zombie1Down.addEventListener("click", () => {Tools.effectZombie(zombie1Down)});
zombie2Down.addEventListener("click", () => {Tools.effectZombie(zombie2Down)});
zombie3Down.addEventListener("click", () => {Tools.effectZombie(zombie3Down)});
