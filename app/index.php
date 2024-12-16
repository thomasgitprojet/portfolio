<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/js/script.js"></script>
    <title>Portfolio</title>
</head>
<body>
    <header class="header">
        <h1 class="title">Evil Dev</h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="">À propos</a></li>
                <li><a href="">Réalisation</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <img class="img-test" src="img/zombie.png" alt="">
        <div class="banner">
            <img class="img-hello" src="img/hello.png" alt="">
            <h2>hello</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur massa in libero molestie pretium. Mauris viverra dictum ante, id suscipit ante fringilla vitae. Sed.</p>
        </div>
    </header>
    <main class="main-container">
        <section class="about">
            <card class="card">
                <div class="card__title">
                    <div class="card__title-element"></div>
                    <div class="card__title-element--2"></div>
                    <div class="card__title-element--3"></div>
                    <h3>Compétences</h3>
                </div>
                <ul class="card__list">
                    <li>HTML/CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>React</li>
                </ul>
            </card>
            <card class="card">
                <div class="card__title">
                    <div class="card__title-element"></div>
                    <div class="card__title-element--2"></div>
                    <div class="card__title-element--3"></div>
                    <h3>Compétences</h3>
                </div>
                <ul class="card__list">
                    <li>HTML/CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>React</li>
                </ul>
            </card>
    
        </section>
    </main>
</body>
</html>