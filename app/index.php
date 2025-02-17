<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/js/script.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>
    <div>
        <img class="mouv-zombie" src="img/zombie.png" alt="petit zombie">
        <img class="mouv-zombie" src="img/zombie.png" alt="petit zombie">
        <img class="mouv-zombie" src="img/zombie.png" alt="petit zombie">
    </div>
    <header class="header">
        <h1 class="title"><a href="">Evil Dev</a></h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#realisation">Réalisation</a></li>
                <li><a href="#contact">Contact</a></li>
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
        <section id="apropos" class="about">
            <h2 class="about__title">À propos</h2>
            <div class="about__container">
            <card class="card" data-aos="fade-right">
                <div class="card__title">
                    <div class="card__title-element"></div>
                    <div class="card__title-element--2"></div>
                    <div class="card__title-element--3"></div>
                    <h3>Compétences</h3>
                </div>
                <ul class="card__list">
                    <li class="card__list-itm"><img class="itm-img" src="img/html.png" alt="">HTML</li>
                    <li class="card__list-itm"><img class="itm-img" src="img/css.png" alt="">CSS</li>
                    <li class="card__list-itm"><img class="itm-img" src="img/js.png" alt="">JavaScript</li>
                    <li class="card__list-itm"><img class="itm-img" src="img/php.png" alt="">PHP</li>
                    <li class="card__list-itm"><img class="itm-img" src="img/mysql.png" alt="">MySQL</li>
                    <li class="card__list-itm"><img class="itm-img" src="img/react.png" alt="">React</li>
                    <li class="card__list-itm"><img class="itm-img" src="img/github.png" alt="">GitHub</li>
                    <li class="card__list-itm"><img class="itm-img" src="img/docker.png" alt="">Docker</li>
                </ul>
            </card>
            <card data-aos="fade-up" class="card card--min-width">
                <div class="card__title">
                    <div class="card__title-element"></div>
                    <div class="card__title-element--2"></div>
                    <div class="card__title-element--3"></div>
                    <h3>Parcours</h3>
                </div>
                <ul class="card__list">
                    <li>
                        Stage Ketbi & Co / Août - Novembre 2024
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Réalisation de site internet</li>
                            <li class="itm-secondary">Boss2boss.club</li>
                        </ul>
                    </li>
                    <li>
                        MGM  Septembre 2019 - Mars 2021
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Ouvrier qualifié</li>
                            <li class="itm-secondary">Réalisation et entretien de réseaux gaz médicaux</li>
                        </ul>
                    </li>
                    <li>
                        Leclerc et Chery / Janvier 2017 - Mai 2019
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Ouvrier qualifié</li>
                            <li class="itm-secondary"> Réalisation réseaux thermiques et sanitaires</li>
                        </ul>
                    </li>
                </ul>
            </card>

            <card data-aos="fade-left" class="card card--max-width">
                <div class="card__title">
                    <div class="card__title-element"></div>
                    <div class="card__title-element--2"></div>
                    <div class="card__title-element--3"></div>
                    <h3>Formations</h3>
                </div>
                <ul class="card__list">
                    <li>
                    Créative-Formation / Février 2024 - Novembre 2024
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Développeur web et  Web mobil
                                <ul class="card__list list-style">
                                    <li class="itm-secondary">Figma (maquettage)</li>
                                    <li class="itm-secondary">Html / CSS </li>
                                    <li class="itm-secondary">JavaScript</li>
                                    <li class="itm-secondary">PHP</li>
                                    <li class="itm-secondary">MySQL</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                    Formation école O'Clock / Juin 2021 - Novembre 2021
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Développeur web et  Web mobil
                                <ul class="card__list list-style">
                                <li class="itm-secondary">Html / CSS </li>
                                    <li class="itm-secondary">JavaScript</li>
                                    <li class="itm-secondary">PHP</li>
                                    <li class="itm-secondary">MySQL</li>
                                    <li class="itm-secondary">React</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                    Arep Fresc Roubaix    Septembre 2007 
                    Février 2008
                        <ul class="card__list list-style">
                            <li class="itm-secondary">CAP installateur
                            Thermique et Sanitaire
                            </li>
                        </ul>
                    </li>
                </ul>
            </card>
            </div>
        </section>
        <section id="realisation" class="realizations">
            <h2 class="realizations__title">Realisations</h2>
            <div class="realizations__container">
            <card data-aos="fade-left" class="card card--realization">
                <div class="card__title">
                        <div class="card__title-element"></div>
                        <div class="card__title-element--2"></div>
                        <div class="card__title-element--3"></div>
                        <h3>Boss2boss</h3>
                </div>
                <div class="card__content">
                    <p>Site réaliseé lors d'un stage effectué au sein de l'entreprise Ketbi & Co. </p>
                    <div class="card__content-img">
                        <img class="card__img--b2b" src="img/b2bhome.png" alt="">
                    </div>
                    <div class="card__content-infos">
                        <h3>Technologies utilisées :</h3>
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Html</li>
                            <li class="itm-secondary">Css</li>
                            <li class="itm-secondary">Php</li>
                            <li class="itm-secondary">Js</li>
                            <li class="itm-secondary">MySQL</li>
                            <li class="itm-secondary">Docker</li>
                            <li class="itm-secondary">GitHub</li>
                        </ul>
                    </div>
                </div>
            </card>
            </div>
        </section>
    </main>
    <footer id="contact" class="footer">
        <h2 class="footer__title">Contact</h2>
        <div class="footer__container">
            <a class="footer__link" href="https://github.com/thomasgitprojet">
                <img class="footer__img img--github" src="img/github.png" alt="logo github">
            </a>
    
            <a class="footer__link" href="https://www.linkedin.com/in/thomas-desse-dev/">
                <img class="footer__img img--lk" src="img/lk.png" alt="logo linkedin">
            </a>
    
            <div class="contact__mail">
                <img class="footer__img img--mail" src="img/mail.png" alt="logo-mail">
                <p>thomasdesse.pro@gmail.com</p>
            </div>
        </div>
        
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>src="js/script.js"</script>
</body>
</html>