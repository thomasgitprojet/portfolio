import '../scss/style.scss';


function moveZombie () {
    const img = document.querySelector(".mouv-zombie1");
    
    const maxX = window.innerWidth - img.clientWidth;
    const maxY = window.innerHeight - img.clientHeight;

    const randomX = Math.floor(Math.random() * maxX);
    const randomY = Math.floor(Math.random() * maxY);

    img.style.left = `${randomX}px`;
    img.style.top = `${randomY}px`;

    setTimeout(moveZombie, 2000);
}

moveZombie();

