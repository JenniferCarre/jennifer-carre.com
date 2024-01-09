<?php
  include('sendmessage.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Open graph -->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Jennifer-Carre">
        <meta property="og:title" content="Jennifer Carré | Intégratrice Web">
        <meta property="og:url" content="https://www.jennifer-carre.com/">
        <meta property="og:description" content="Découvrez le portfolio de Jennifer Carré, intégratrice web">
        <meta property="og:image" content="https://www.jennifer-carre.com/img/jennifer-carre-og.jpg">

        <title>Jennifer Carré | Intégratrice Web</title>
        <meta name="description" content="Découvrez le portfolio de Jennifer Carré, intégratrice web">
        
        <!-- My favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

        <!-- CDN Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        
        <!-- My CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Link to the Google font style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
        
    </head>

    <body>
        <!-- Header -->
        <?php
          include('template/header.php');
        ?>
        
        <!-- Main section-->
        <main>

            <!-- Section one -->
            <section class="container-fluid g-0" id="section-one">
                <div class="container">
                    <div class="row">
                        <article class="col-lg-6">
                            <h1>Intégratrice Web<br>Spécialiste WordPress</h1>
                            <p class="py-5">Spécialisée en intégration web et ayant une expertise solide dans l'utilisation de WordPress, je suis une créatrice passionnée qui transforme des concepts en réalité numérique. Mon objectif est de donner vie à des projets digitaux avec une combinaison de créativité et de précision.</p>
                            <a href="#contact" title="Vers le formulaire de contact" class="my-button">Me contacter</a>
                        </article>
                        <figure class="col-lg-6 align-self-end">
                            <img src="img/Jennifer-carre-integratrice-web.jpg" alt="Photo de profil de Jennifer Carré">
                        </figure>
                    </div>
                </div>
                <!-- Shape Divider -->
                <div class="custom-shape-divider-bottom-1697465557">
                  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                      <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                  </svg>
                </div>

            </section>

            <!-- About me -->
            <section class="container-fluid marge-menu" id="about-me">
              <div class="container">
                <p class="subtitle text-center">Je me présente</p>
                <h2 class="pb-4 text-center">Qui est Jennifer Carré&nbsp;?</h2>
                <div class="row">
                    <p class="col-lg-6 pe-5">Bonjour, je suis Jennifer, une franco-allemande passionnée par le monde digital. En tant que <strong>webdesigner freelance</strong>, j'ai acquis une vision complète des projets clients, du brief jusqu'à la livraison finale, en n'oubliant jamais le service après-vente pour renforcer la satisfaction de mes clients. Mon engagement envers <strong>la qualité et la précision</strong> a toujours été mon moteur. Aujourd'hui, je suis à la recherche d'une <strong>spécialisation en tant qu'intégratrice web</strong>, un métier qui m'inspire profondément.</p>
                    <p class="col-lg-6 ps-5">Pour moi, l'intégration web représente <strong>le mariage parfait entre les langages visuels du design et les langages de programmation</strong>. Je suis une professionnelle proactive, autonome, et créative, dotée d'une rigueur exceptionnelle. Mon expérience m'a également appris à collaborer efficacement en équipe. Je suis convaincue que ma passion pour l'intégration web, associée à mes compétences et à mon engagement, me permettra de créer des expériences digitales exceptionnelles pour mes futurs projets.</p>
                </div>
              </div>
            </section>

            <!-- Skills -->
            <section class="container marge-menu" id="skills">
                <div class="row">
                    <article class="col-lg-4 pb-5 pt-3">
                        <p class="subtitle">Domaines d'expertise</p>
                        <h2 class="pb-4">Mes compétences en intégration web</h2>
                        <p>J'aime apprendre de nouvelles technologies, suivre des cours ou des tutoriels pour agrandir mes compétences et me tenir au courant des dernières tendances du monde digital. Mon prochain objectif est d'apprendre un framework JavaScript. Angular, React ou Vue, quel est votre avis ?</p>
                    </article>
                    <div class="col-lg-4">
                        <h3 class="pb-1 pt-3">WordPress / WooCommerce</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 85%">85%</div>
                        </div>

                        <h3 class="pb-1 pt-3">Elementor / Gutenberg</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 85%">85%</div>
                        </div>

                        <h3 class="pb-1 pt-3">HTML / CSS</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>

                        <h3 class="pb-1 pt-3">Bootstrap</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="pb-1 pt-3">JavaScript</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 60%">60%</div>
                        </div>

                        <h3 class="pb-1 pt-3">jQuery</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 60%">60%</div>
                        </div>

                        <h3 class="pb-1 pt-3">Git / GitHub</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 50%">50%</div>
                        </div>

                        <h3 class="pb-1 pt-3">Suite Adobe (Xd, Ps, Ai, Id)</h3>
                        <!-- Bootstrap progress component -->
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 85%">85%</div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Experiences -->
            <section class="container-fluid marge-menu" id="experiences">
              <div class="container">
                <p class="subtitle text-center">Mes expériences</p>
                <h2 class="text-center pb-3">Découvrez mon parcours professionnel</h2>
                <div class="row">

                    <!-- Left column-->
                    <div class="col-lg-6">

                        <!-- Bootstrap accordion component -->
                        <div class="accordion" id="accordionExperiencesLeft">
                            <!-- Intégratrice web -->
                            <div class="accordion-item my-4 p-2">
                              <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Intégratrice web & Webdesigner (depuis 2023)
                                </button>
                              </h3>
                              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExperiencesLeft">
                                <div class="accordion-body">
                                  <p class="pb-1">Insercall, Avignon (agence de communication)</p>
                                  <p>Mes missions : la réalisation de maquettes avec AdobeXD, l'installation manuelle de WordPress, la création d’un thème enfant, l’intégration avec WordPress et Elementor Pro, mise en ligne sur le serveur du client.</p>
                                </div>
                              </div>
                            </div>
                            <!-- Webdesigner freelance -->
                            <div class="accordion-item my-4 p-2">
                              <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Webdesigner freelance (depuis 2019)
                                </button>
                              </h3>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExperiencesLeft">
                                <div class="accordion-body">
                                  <p class="pb-1">creatif-click.com, Bédarrides (auto-entreprise)</p>
                                  <p>Après le brief avec mon client, je crée la maquette avec Photoshop que j’intègre ensuite avec WordPress et Elementor. Ma priorité est de garantir la satisfaction de chaque client.</p>
                                </div>
                              </div>
                            </div>
                            <!-- Responsable digital marketing -->
                            <div class="accordion-item my-4 p-2">
                              <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Responsable digital marketing (2018 - 2019)
                                </button>
                              </h3>
                              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExperiencesLeft">
                                <div class="accordion-body">
                                  <p class="pb-1">Le Papillon Magique, Barbentane (vente en ligne)</p>
                                  <p>J'ai participé à la refonte de la boutique en ligne sur Prestashop. J'ai également développé la présence sur les réseaux sociaux.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                    <!-- Right column -->
                    <div class="col-lg-6">

                        <!-- Bootstrap accordion component -->
                        <div class="accordion" id="accordionExperiencesRight">
                          <!-- Stage webdesigner -->  
                          <div class="accordion-item my-4 p-2">
                            <h3 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
                                Stage Webdesigner (2018)
                              </button>
                            </h3>
                            <div id="collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionExperiencesRight">
                              <div class="accordion-body">
                                <p class="pb-1">GFCOM, Sainte-Cécile-les-Vignes (agence de communication)</p>
                                <p>Durant mon stage, j’ai contribué à la création de sites internet sous Joomla ainsi qu’à la création de cartes de visite.</p>
                              </div>
                            </div>
                          </div>
                          <!-- Conseillère de vente -->
                          <div class="accordion-item my-4 p-2">
                            <h3 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Conseillère de vente (2014 - 2018)
                              </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExperiencesRight">
                              <div class="accordion-body">
                                <p class="pb-1">Leroy Merlin, Avignon (magasin de bricolage)</p>
                                <p>Conseil clientèle pour le rayon quincaillerie, gestion flux client.</p>
                              </div>
                            </div>
                          </div>
                          <!-- Responsable service client -->
                          <div class="accordion-item my-4 p-2">
                            <h3 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Responsable Service Client (2008 - 2014)
                              </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExperiencesRight">
                              <div class="accordion-body">
                                <p class="pb-1">Homeaway, Paris & Marseille (site de location de vacances)</p>
                                <p>Service client, recrutement et formation des stagiaires, traduction, management, performances opérationnelles - qualité et productivité.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
              </div>
            </section>

            <!-- Training -->
            <section class="container-fluid marge-menu" id="training">
              <div class="container">
                <p class="subtitle text-center">Mes formations</p>
                <h2 class="text-center pb-3">Découvrez mes formations clées</h2>

                <div class="row">

                    <!-- Left column-->
                    <div class="col-lg-6">

                        <!-- Bootstrap accordion component -->
                        <div class="accordion" id="accordionTrainingLeft">
                          <!-- Infographiste metteur en page -->  
                          <div class="accordion-item my-4 p-2">
                              <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Infographiste metteur en page (2021 - 2023)
                                </button>
                              </h3>
                              <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionTrainingLeft">
                                <div class="accordion-body">
                                  <p class="pb-1">Studi, formation en ligne (titre professionnel)</p>
                                  <p>Logiciels PAO · Culture digitale · La conception de propositions graphiques · La réalisation de supports de communication · Le développement de la stratégie de communication.</p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right column -->
                    <div class="col-lg-6">

                        <!-- Bootstrap accordion component -->
                        <div class="accordion" id="accordionTrainingRight">
                          <!-- Webdesigner développeuse front-end -->
                          <div class="accordion-item my-4 p-2">
                            <h3 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Webdesigner développeuse front-end (2018)
                              </button>
                            </h3>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionTrainingRight">
                              <div class="accordion-body">
                                <p class="pb-1">Images, Nîmes (certification RNCP)</p>
                                <p>HTML5 · CSS3 · Webdesign · Ergonomie Web · Responsive Webdesign · Référencement · CMS · JavaScript · PHP5.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
              </div>
            </section>

            <!-- Portfolio -->
            <section class="container-fluid marge-menu" id="portfolio">
              <div class="container">
                <div class="row">
                    
                    <article class="col-lg-4 pb-5">
                        <p class="subtitle">Quelques projets</p>
                        <h2 class="pb-3">Un aperçu de mes réalisations</h2>
                        <p>Je vous invite à explorer mes projets phares pour découvrir ma maîtrise des compétences. Vous trouverez des projets WordPress supplémentaires sur mon portfolio <a href="https://www.creatif-click.com/portfolio" title="Portfolio de Créatif Click" target="_blank">www.creatif-click.com</a> et des projets JavaScript sur mon profil <a href="https://codepen.io/JenniferRaphaela/pens/public" title="Mon profil sur CodePen" target="_blank">codepen</a>. N'hésitez pas à me demander plus de références.</p>
                    </article>

                    <div class="col-lg-4">
                        <!-- Project Etudac-->
                        <article class="my_projects p-5 mb-5">
                            <h2>Etudac</h2>
                            <p class="py-3">Un projet client que j'ai réalisé en tant que webdesigner freelance : création de la maquette, intégration avec <strong>WordPress</strong> et <strong>Elementor</strong>.</p>
                            <a href="https://www.etudac.com" title="Etudac, bureau d'études acoustiques" target="_blank"><i class="bi bi-arrow-right px-2"></i>Visiter le site web</a>
                        </article>

                        <!-- Project Seedlife-->
                        <article class="my_projects p-5 mb-5">
                            <h2>Seedlife</h2>
                            <p class="py-3">Découvrez mon projet de fin d'études : création de la maquette, intégration des pages accueil et contact avec <strong>html, css, bootstrap, javascript et php</strong>.</p>
                            <a href="https://jennifer-carre.com/seedlife/index.php" title="Association de protection de nature et biodiversité - SEEDLIFE" target="_blank"><i class="bi bi-arrow-right px-2"></i>Voir le projet</a>
                        </article>

                    </div>

                    <div class="col-lg-4">
                        <!-- Project Amélie-->
                        <article class="my_projects p-5 mb-5">
                            <h2>Amélie Épicerie</h2>
                            <p class="py-3">Il s'agit d'un projet client que j'ai réalisé en tant que salariée pour insercall : création de la maquette, intégration avec <strong>WordPress</strong> et <strong>Woocommerce</strong>.</p>
                            <a href="https://amelie-epicerie.fr" title="Amélie Épicerie – Boutique éco responsable et zéro déchet" target="_blank"><i class="bi bi-arrow-right px-2"></i>Visiter le site web</a>
                        </article>

                        <!-- Project JavaScript-->
                        <article class="my_projects p-5 mb-5">
                            <h2>Application web météo</h2>
                            <p class="py-3">Je vous présente un projet que j'ai réalisé durant mes cours de perfectionnement de <strong>JavaScript</strong>.</p>
                            <a href="https://codepen.io/JenniferRaphaela/pen/abQzZrz" title="Application web de météo avec JavaScript" target="_blank"><i class="bi bi-arrow-right px-2"></i>Voir le projet</a>
                        </article>

                    </div>

                </div>
              </div>
            </section>

            <!-- Contact section -->
            <section id="contact" class="container-fluid mt-5">

              <!-- Shape divider -->
              <div class="custom-shape-divider-top-1697465632">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
              </div>


              <div class="container">
                <div class="row">
                
                  <!-- Contact form -->
                  <form method="post" class="col-lg-6 p-5" id="myForm">
                    <!-- Message for the user after submitting the contact form-->
                    <div id="return_message" class="subtitle" style="color: #31CBB1;">
                      <?php    
                        echo $verifyjavascript;
                        echo $usermessage;
                      ?>
                    </div>
                      <!-- Field name -->
                      <span id="error_name" class="red-text"></span>
                      <br>
                      <input type="text" name="name" placeholder="Votre nom*" required class="col-12 p-3 my-3" id="name">
                      <!-- Field phone -->
                      <span id="error_phone" class="red-text"></span>
                      <br>
                      <input type="tel" name="phone" placeholder="Téléphone*" required class="col-12 p-3 my-3" id="phone">
                      <!-- Field email -->
                      <span id="error_email" class="red-text"></span>
                      <br>
                      <input type="email" name="mail" placeholder="E-mail*" required class="col-12 p-3 my-3" id="email">
                      <!-- Field message -->
                      <span id="error_message" class="red-text"></span>
                      <br>
                      <textarea name="message" placeholder="Votre message*" required class="col-12 p-3 my-3" rows="5" id="message"></textarea>
                      <input type="checkbox" name="rgpd" id="rgpd" required class="my-2"> <label for="rgpd">J’accepte la <a href="cgu.php" target="_blank" title="Politique de confidentialité">politique de confidentialité</a></label>
                      <button type="submit" class="my-button my-3" id="send-button">Envoyer</button>
                  </form>

                  <div class="col-lg-4 white-text my-auto py-5 offset-lg-2">
                    <p class="subtitle">Et si on faisait connaissance</p>
                    <h2 class="white-text pb-3">Vous cherchez une intégratrice web&nbsp;?<br>Contactez-moi&nbsp;!</h2>
                    <p>Je suis ouverte aux opportunités en tant que salariée ou en tant que freelance.</p>
                    <a href="mailto:contact@jennifer-carre.com" target="_blank" title="Envoyer un mail à contact@jennifer-carre.com" class="white-text d-block pt-5">contact@jennifer-carre.com</a>
                    <div class="my-2">
                      <a href="https://www.linkedin.com/in/jennifer-carre" title="Mon profil sur LinkedIn" target="_blank"><i class="bi bi-linkedin white-text me-2"></i></a>
                      <a href="https://github.com/Jennifer-dot-ct" title="Mon profil sur GitHub" target="_blank"><i class="bi bi-github white-text"></i></a>
                    </div>
                  </div>

                </div>
              </div>
            </section>

        </main>

        <!-- Back to top button -->
        <a href="#" title="To top" id="btn-back-to-top"><i class="bi bi-arrow-up-circle-fill"></i></a>

        <!-- Footer -->
        <?php
          include('template/footer.php');
        ?>

        <!-- My JavaScript -->
        <script src="javaScript.js"></script>

        <!-- Script Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>