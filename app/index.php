<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- dev -->
    <!-- <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/js/script.js"></script> -->
    <!-- prod à modifier à chaque build-->
    <link rel="stylesheet" href="/build/assets/script-fJgAbm7D.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>
    <header class="header">
        <h1 class="title"><a href="">Evil Dev</a></h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#realisation">Réalisation</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="header__container-img">
            <img class="img-test" src="img/dev&zombie.png" alt="">
        </div>
        <div class="banner">
            <img class="img-hello" src="img/hello.png" alt="">
            <h2>hello</h2>
            <p class="description">Je m'appelle Thomas Desse, né en 1987 à Laon, dans l'Aisne. Après une dizaine d'années passées à Lille, où j'ai travaillé dans le secteur du bâtiment, j'ai découvert une nouvelle passion pour le développement web. Cette envie de changement m'a conduit à une reconversion professionnelle lorsque je suis arrivé en Normandie en 2020.<br>

            Déterminé à faire de cette passion mon métier, j'ai suivi une formation et obtenu mon titre professionnel de Développeur Web et Web Mobile. Aujourd'hui, fort de mes compétences et de ma motivation, je suis disponible pour un emploi dans toute la France.<br>

            N'hésitez pas à me contacter pour échanger sur d'éventuelles opportunités professionnelles !</p>
        </div>
    </header>
    
    <main class="main-container">
        <section id="apropos" class="about">
            <h2 class="about__title">À propos</h2>
            <div class="about__container">
        
                <!-- ── ONGLETS ────────────────────────────────────── -->
                <div class="tabs" role="tablist" aria-label="À propos">
                    <button
                        class="tab active"
                        role="tab"
                        aria-selected="true"
                        aria-controls="panel-skills"
                        id="tab-skills"
                        onclick="switchTab('skills', this)"
                    >Compétences</button>
                    <button
                        class="tab"
                        role="tab"
                        aria-selected="false"
                        aria-controls="panel-parcours"
                        id="tab-parcours"
                        onclick="switchTab('parcours', this)"
                    >Parcours</button>
                    <button
                        class="tab"
                        role="tab"
                        aria-selected="false"
                        aria-controls="panel-formations"
                        id="tab-formations"
                        onclick="switchTab('formations', this)"
                    >Formations</button>
                </div>
        
                <!-- ── PANEL COMPÉTENCES ──────────────────────────── -->
                <div
                    class="tab-panel active"
                    id="panel-skills"
                    role="tabpanel"
                    aria-labelledby="tab-skills"
                >
                    <ul class="skills-grid" aria-label="Liste des compétences">
                        <li class="skill-badge"><img src="img/html.png" alt="">HTML</li>
                        <li class="skill-badge"><img src="img/css.png" alt="">CSS</li>
                        <li class="skill-badge"><img src="img/js.png" alt="">JavaScript</li>
                        <li class="skill-badge"><img src="img/php.png" alt="">PHP</li>
                        <li class="skill-badge"><img src="img/mysql.png" alt="">MySQL</li>
                        <li class="skill-badge"><img src="img/react.png" alt="">React</li>
                        <li class="skill-badge"><img src="img/symfony.png" alt="">Symfony</li>
                        <li class="skill-badge"><img src="img/github.png" alt="">GitHub</li>
                        <li class="skill-badge"><img src="img/docker.png" alt="">Docker</li>
                    </ul>
                </div>
        
                <!-- ── PANEL PARCOURS ─────────────────────────────── -->
                <div
                    class="tab-panel"
                    id="panel-parcours"
                    role="tabpanel"
                    aria-labelledby="tab-parcours"
                >
                    <ol class="timeline" aria-label="Parcours professionnel">
        
                        <li class="timeline-item">
                            <p class="timeline-date">Août 2024 — Novembre 2024</p>
                            <p class="timeline-company">Ketbi &amp; Co — Stage</p>
                            <ul class="timeline-tags">
                                <li class="tag tag--highlight">Réalisation de site internet</li>
                                <li class="tag">boss2boss.club</li>
                            </ul>
                        </li>
        
                        <li class="timeline-item">
                            <p class="timeline-date">Septembre 2019 — Mars 2021</p>
                            <p class="timeline-company">MGM — Ouvrier qualifié</p>
                            <ul class="timeline-tags">
                                <li class="tag">Réalisation et entretien de réseaux gaz médicaux</li>
                            </ul>
                        </li>
        
                        <li class="timeline-item">
                            <p class="timeline-date">Janvier 2017 — Mai 2019</p>
                            <p class="timeline-company">Leclerc et Chery — Ouvrier qualifié</p>
                            <ul class="timeline-tags">
                                <li class="tag">Réalisation réseaux thermiques et sanitaires</li>
                            </ul>
                        </li>
        
                    </ol>
                </div>
        
                <!-- ── PANEL FORMATIONS ───────────────────────────── -->
                <div
                    class="tab-panel"
                    id="panel-formations"
                    role="tabpanel"
                    aria-labelledby="tab-formations"
                >
                    <ol class="timeline" aria-label="Formations">
        
                        <li class="timeline-item">
                            <p class="timeline-date">Février 2024 — Novembre 2024</p>
                            <p class="timeline-company">Créative-Formation — Développeur Web &amp; Mobile</p>
                            <ul class="timeline-tags">
                                <li class="tag tag--highlight">Figma</li>
                                <li class="tag tag--highlight">HTML / CSS</li>
                                <li class="tag tag--highlight">JavaScript</li>
                                <li class="tag tag--highlight">PHP</li>
                                <li class="tag tag--highlight">MySQL</li>
                            </ul>
                        </li>
        
                        <li class="timeline-item">
                            <p class="timeline-date">Juin 2021 — Novembre 2021</p>
                            <p class="timeline-company">École O'Clock — Développeur Web &amp; Mobile</p>
                            <ul class="timeline-tags">
                                <li class="tag tag--highlight">HTML / CSS</li>
                                <li class="tag tag--highlight">JavaScript</li>
                                <li class="tag tag--highlight">PHP</li>
                                <li class="tag tag--highlight">MySQL</li>
                                <li class="tag tag--highlight">React</li>
                            </ul>
                        </li>
        
                        <li class="timeline-item">
                            <p class="timeline-date">Septembre 2007 — Février 2008</p>
                            <p class="timeline-company">Arep Fresc Roubaix</p>
                            <ul class="timeline-tags">
                                <li class="tag">CAP Installateur Thermique &amp; Sanitaire</li>
                            </ul>
                        </li>
        
                    </ol>
                </div>
        
                <!-- ── STAND DE TIR ───────────────────────────────── -->
                <div class="range">
        
                    <p class="range__label">// stand de tir — cliquez pour tirer</p>
        
                    <div class="range__hud">
                        <span class="range__score">SCORE : <b id="range-score">0</b></span>
                        <span class="range__msg" id="range-msg" aria-live="polite"></span>
                        <span aria-hidden="true">🎯</span>
                    </div>
        
                    <div class="range__stage" id="range-stage" aria-label="Stand de tir interactif">
                        <!-- Lignes de perspective (injectées en JS) -->
                        <!-- Entités mobiles (injectées en JS) -->
                    </div>
        
                    <div class="range__reload-wrap" aria-hidden="true">
                        <div class="range__reload-bar" id="range-reload"></div>
                    </div>
        
                </div>
                <!-- ── FIN STAND DE TIR ───────────────────────────── -->
        
            </div><!-- /.about__container -->
        
        </section>
        <!-- <section id="apropos" class="about">
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
                        <li class="card__list-itm"><img class="itm-img" src="img/symfony.png" alt="">Symfony</li>
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
        </section> -->
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
                    <p>Projet réalisé dans le cadre d’un stage au sein de l’entreprise Ketbi & Co.
                    Le site web a été conçu et mis en ligne durant mon stage. Depuis, le site a connu plusieurs modifications avant d’être définitivement supprimé suite à la fermeture de l’entreprise. Il ne subsiste aujourd’hui que quelques captures d’écran, présentées ici à titre d’illustration du travail réalisé.</p>

                    <!-- Grille de 4 miniatures -->
                    <div class="card__content-img">
                        <div class="gallery-grid">
                            <div class="gallery-grid__item" data-index="0">
                                <img src="img/b2b/b2b-01.png" alt="Boss2boss screenshot 1">
                                <div class="gallery-grid__overlay">
                                    <span>Voir la galerie</span>
                                </div>
                            </div>
                            <div class="gallery-grid__item" data-index="1">
                                <img src="img/b2b/b2b-02.png" alt="Boss2boss screenshot 2">
                            </div>
                            <div class="gallery-grid__item" data-index="2">
                                <img src="img/b2b/b2b-03.png" alt="Boss2boss screenshot 3">
                            </div>
                            <div class="gallery-grid__item" data-index="3">
                                <img src="img/b2b/b2b-04.png" alt="Boss2boss screenshot 4">
                                <div class="gallery-grid__more">+5</div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Carrousel -->
                    <div id="carousel-modal" class="carousel-modal">
                        <div class="carousel-modal__overlay"></div>
                        <div class="carousel-modal__content">
                            <button class="carousel-modal__close">&times;</button>
                            
                            <div class="carousel">
                                <button class="carousel__btn carousel__btn--prev">&#10094;</button>
                                
                                <div class="carousel__main">
                                    <img id="carousel-image" src="" alt="Screenshot Boss2boss">
                                    <div class="carousel__counter">
                                        <span id="carousel-current">1</span> / <span id="carousel-total">9</span>
                                    </div>
                                </div>
                                
                                <button class="carousel__btn carousel__btn--next">&#10095;</button>
                            </div>

                            <!-- Miniatures de navigation -->
                            <div class="carousel__thumbnails" id="carousel-thumbnails"></div>
                        </div>
                    </div>

                    <div class="card__content-infos">
                        <h3>Technologies utilisées :</h3>
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Html</li>
                            <li class="itm-secondary">Css</li>
                            <li class="itm-secondary">JavaScript : scripts et fonctionnalités dynamiques côté client</li>
                            <li class="itm-secondary">PHP 8.2 : développement backend</li>
                            <li class="itm-secondary">MySQL 8 : base de données relationnelle</li>
                            <li class="itm-secondary">PDO MySQL : accès sécurisé à la base de données</li>
                            <li class="itm-secondary">Dotenv (vlucas/phpdotenv) : gestion des variables d'environnement</li>
                            <li class="itm-secondary">Docker & Docker Compose : containerisation et orchestration des services</li>
                            <li class="itm-secondary">Xdebug : débogage PHP</li>
                            <li class="itm-secondary">MailDev : test et visualisation des e-mails en environnement local</li>
                            <li class="itm-secondary">phpMyAdmin : administration de bases de données MySQL</li>
                            <li class="itm-secondary">Composer : gestion des dépendances PHP</li>
                            <li class="itm-secondary">Git / GitHub : gestion de versions</li>
                        </ul>
                    </div>
                </div>
            </card>

            <card data-aos="fade-left" class="card card--realization">
                <div class="card__title">
                        <div class="card__title-element"></div>
                        <div class="card__title-element--2"></div>
                        <div class="card__title-element--3"></div>
                        <h3><a href="https://backtothevhs.com">BackToTheVHS</a></h3>
                </div>
                <div class="card__content">
                    <p>BackToTheVHS est une marketplace fictive dédiée aux passionnés de VHS, proposant un espace sécurisé pour acheter et vendre des cassettes entre collectionneurs inscrits.</p>
                    <div class="card__content-img">
                        <a class="card__lnk--b2b" href="https://backtothevhs.com">
                            <img class="card__img--b2b" src="img/bttvhshome.PNG" alt="aperçu de boss2boss">
                        </a>
                    </div>
                    <div class="card__content-infos">
                        <h3>Technologies utilisées :</h3>
                        <ul class="card__list list-style">
                            <li class="itm-secondary">Symfony 7 / PHP 8.3 : développement backend MVC, sécurité applicative (authentification, protections CSRF), formulaires</li>
                            <li class="itm-secondary">JavaScript : scripts et fonctionnalités dynamiques côté client</li>
                            <li class="itm-secondary">MySQL / Doctrine ORM : modélisation, migrations, fixtures, requêtes préparées (protection contre l’injection SQL)</li>
                            <li class="itm-secondary">Twig / TailwindCSS / Webpack Encore : intégration et gestion des assets</li>
                            <li class="itm-secondary">Sécurité applicative : protections contre SQL Injection, XSS, CSRF, intégration reCAPTCHA v2</li>
                            <li class="itm-secondary">Docker Compose : environnement de développement et production</li>
                            <li class="itm-secondary">FrankenPHP / Caddy : déploiement et performance</li>
                            <li class="itm-secondary">Outils : Xdebug, Mailpit, phpMyAdmin</li>
                            <li class="itm-secondary">Git / GitHub : gestion de versions</li>
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
    <!-- dev -->
    <!-- <script src="js/script.js"></script> -->
    <!-- prod à modifier à chaque build -->
    <script type="module" src="/build/assets/script-BBDCQSAV.js"></script>

        <div class="mouv-zombie" data-zomb="zomb1">
            <img class="content-img-zombie" src="img/zombie.png" alt="petit zombie">
        </div>
        <div class="mouv-zombie" data-zomb="zomb2">
            <img class="content-img-zombie" src="img/zombie.png" alt="petit zombie">
        </div>
        <div class="mouv-zombie" data-zomb="zomb3">
            <img class="content-img-zombie" src="img/zombie.png" alt="petit zombie">
        </div>
    
</body>
</html>