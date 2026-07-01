import Tools from './fonction.js';

// const zombie1Down = document.querySelector ('[data-zomb="zomb1"]');
// const zombie2Down = document.querySelector ('[data-zomb="zomb2"]');
// const zombie3Down = document.querySelector ('[data-zomb="zomb3"]');

// Tools.initZombies();
document.addEventListener("DOMContentLoaded", () => {
    // Tools.initZombies(); // Démarrer le mouvement des 3 images
    Tools.initCarousel();
    Tools.initShootingRange();
    Tools.initTabs();
    Tools.initCopyMail();
    Tools.initRealizationCards();
});

