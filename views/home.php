<?php
   $configs = include('configs.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="max-width=device-width, initial-scale=1.0" />
      <title>Création de site vitrine à Madagascar</title>
      <meta name="description" content="Créer un site vitrine est une bonne idée pour attirer de nouveaux clients et prospects. Le site vitrine peut booster la réputation d'une entreprise. Je suis disponible pour créer le vôtre." />
      <!--<link href = "public/css/bootstrap.min.css"
         rel ="stylesheet" type="text/css">
      <link rel="stylesheet" href="public/css/fontawesome.min.css" type="text/css" />
      <link rel="stylesheet" href="public/css/brands.min.css" type="text/css" />
      -->
      <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
         rel ="stylesheet" integrity ="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
         crossorigin = "anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" type="text/css" />
      <link rel="stylesheet" href="public/css/styles.css" type="text/css" />
      <style type="text/css" media="all">
         /*@font-face {
            font-family: "Font Awesome 6 free";
            src: url("public/fonts/fa-solid-900.ttf"), url("public/fonts/fa-solid-900.woff2");
         }
         @font-face {
            font-family: "Font Awesome 6 brands";
            src: url("public/fonts/fa-brands-400.ttf"), url("public/fonts/fa-brands-400.woff2");
         }*/
         @font-face {
            font-family: "Font Awesome 6 free";
            src: url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-solid-900.ttf"), url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-solid-900.woff2");
         }
         @font-face {
            font-family: "Font Awesome 6 brands";
            src: url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-brands-400.ttf"), url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-brands-400.woff2");
         }
      </style>
      
   </head>
   <body>
      <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top shadow">
            <div class="container">
               <a class="navbar-brand" href="/"><?=$configs['COMPANY_NAME']?></a>
               <button class="navbar-toggler" id="nbToggler">
                  <span id="line1"></span>
                  <span id="line2"></span>
                  <span id="line3"></span>
               </button>
               <div class="offcanvas-collapse" id="nbCollapse">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link active" href="//">Accueil</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">A propos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="tariffs">Les tarifs</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      
      <main id="home">
         <section class="banner mb-5">
            <div class="mb-5 py-5 py-md-3">
               <div class="container text-light">
                  <div class="row py-md-5">
                     <div class="col-md-12">
                        <div class="text-center text-md-start">
                           <p class="lead">Création</p>
                           <h1 class="mb-3 fw-semibold text-uppercase">Site vitrine à Madagascar</h1>
                           <p class="lead fs-2">Attirer de nouveaux clients et fideliser les plus anciens</p>
                           <a class="cta btn btn-outline-warning fs-4" href="contact">En savoir +</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <section class="services container mb-5">
            <h2 class="visually-hidden">Services offerts</h2>
            <div class="row">
               <div id="service1" class="hidden col-md-4 mb-2 text-center d-flex flex-column align-items-center justify-content-center">
                  <div class="d-flex justify-content-center mb-3">
                     <i class="fas fa-cogs fs-1 text-dark"></i>
                  </div>
                  <p class="h4">Conception et développement</p>
               </div>
               <div id="service2" class="hidden col-md-4 mb-2 text-center d-flex flex-column align-items-center justify-content-center">
                  <div class="d-flex justify-content-center mb-3">
                     <i class="fas fa-rocket fs-1 text-warning"></i>
                  </div>
                  <p class="h4">Optimisation de la performence</p>
               </div>
               <div id="service3" class="hidden col-md-4 mb-2 text-center d-flex flex-column align-items-center justify-content-center">
                  <div class="d-flex justify-content-center mb-3">
                     <i class="fas fa-tools fs-1 text-success"></i>
                  </div>
                  <p class="h4">Maintenance et Support technique</p>
               </div>
            </div>
         </section>
         
         <section id="iAmHere" class="container py-5">
            <div class="row">
               <div class="col-md-6">
                  <img class="hidden img-fluid" src="public/img/web_development_.png" alt="Développement web" />
               </div>
               <div class="col-md-6 d-flex align-items-center justify-content-center flex-column">
                  <div class="hidden cta mb-5">
                     <p class="fs-1">
                        Permettez-moi de donner vie à votre site vitrine.
                     </p>
                     <a class="cta btn btn-primary text-light fs-4" href="contact">Contactez-moi</a>
                  </div>
               </div>
            </div>
         </section>
         
         <section class="why container py-5 text-center">
            <header class="mb-5">
               <h2 class="h1 mb-3">Pourquoi un site vitrine ?</h2>
               <p class="lead mx-md-5">
                  Les avantages d'avoir un site vitrine sont nombreux et variés
               </p>
            </header>
            <div class="row">
               <div class="col-md-6 mb-3 px-4">
                  <div class="d-flex justify-content-center mb-3">
                     <i class="fas fa-eye"></i>
                  </div>
                  <h3>Visibilité et crédibilité</h3>
                  <p>
                     Un site vitrine peut vous aider à attirer de nouveaux clients, partenaires potentiels et opportunités d'affaires. Il  vous offre la possibilité d'être visible en ligne de manière professionnelle.
                  </p>
               </div>
               
               <div class="col-md-6 mb-3 px-4">
                  <div class="d-flex justify-content-center mb-3">
                     <i class="fas fa-calendar-days"></i>
                  </div>
                  <h3>Accessibilité 24/7 </h3>
                  <p>
                     Contrairement à un magasin physique, un site vitrine est accessible en tout temps. Cela permet aux utilisateur de découvrir l'enteprise et ces offre en tout moment.
                  </p>
               </div>
               
               <div class="col-md-6 mb-3 px-4">
                  <div class="d-flex justify-content-center mb-3">
                     <i class="fas fa-map-location-dot"></i>
                  </div>
                  <h3>Ciblage geographique</h3>
                  <p>
                     Un site vitrine peut être conçu pour cibler specifiquement une region geographique. C'est particulièrement utile pour les entreprises locales ou régionales.
                  </p>
               </div>
               
               <div class="col-md-6 mb-3 px-4">
                  <div class="d-flex justify-content-center mb-3">
                     <i class="fas fa-message"></i>
                  </div>
                  <h3>Communication proactive</h3>
                  <p>
                     En répondant des questions via un formulaire de contact, vous pouvez communiquer activement avec vos clients et prospects.
                  </p>
               </div>
            </div>
         </section>
         
         <section class="who container py-5">
            
            <div class="row flex-column-reverse flex-md-row">
               <div class="hidden cta col-md-5 text-center text-md-start">
                  <h2 class="h1 visually-hidden">Pour qui ?</h2>
                  <p class="fs-4">
                     Le site vitrine est destiné à toute entreprise, organisation ou professionnel qui souhaite présenter ses produits, services et informations de manière attrayante et profesionnelle sur internet.
                  </p>
                  <p class="fs-2">
                     En faites-vous partie?
                  </p>
                  <a class="cta btn btn-primary fs-4" href="contact">Contactez-moi</a>
               </div>
               <div class="col-md-7 mb-5">
                  <img class="hidden show-when-in-vp img-fluid" src="public/img/site_vitrine_pour_tous.webp" alt="Plan du design" />
               </div>
            </div>
            
         </section>
         
         <section class="efficiencies container py-5">
            <header class="text-center mb-5">
               <h2 class="h1">La conception de votre site vitrine</h2>
               <p class="lead">
                  Dans un site vitrine, l'interface et experience utilisateur sont importants
               </p>
            </header>
            <div class="row">
               <div class="col-md-6">
                  <div class="item mb-5">
                     <div class="text-center">
                        <div class="d-flex justify-content-center">
                           <i class="fas fa-wand-magic-sparkles bg-warning"></i>
                        </div>
                        <h5 class="h3">Design attrayant et intuitif</h5>
                        <p class="">
                           Pour offrir aux internautes une expérience agréable et engageante.
                        </p>
                     </div>
                  </div>
               </div>
               
               <div class="col-md-6">
                  <div class="item mb-5">
                     <div class="text-center">
                        <div class="d-flex justify-content-center">
                           <i class="fas fa-file-alt bg-primary"></i>
                        </div>
                        <h5 class="h3">Contenu clair et impactant</h5>
                        <p class="">
                           Pour fournir aux visiteurs les informations essentielles de la manière la plus percutante possible.
                        </p>
                     </div>
                  </div>
               </div>
               
               <div class="col-md-6">
                  <div class="item mb-5">
                     <div class="text-center">
                        <div class="d-flex justify-content-center">
                           <i class="fas fa-mobile-screen-button bg-secondary"></i>
                        </div>
                        <h5 class="h3">Adaptation mobile</h5>
                        <p class="">
                           Pour garantir un accès fluide et agréable, quelque soit le type d'appareil que les visiteurs utilisent.
                        </p>
                     </div>
                  </div>
               </div>
               
               <div class="col-md-6">
                  <div class="item mb-5">
                     <div class="text-center">
                        <div class="d-flex justify-content-center">
                           <i class="fas fa-phone bg-success"></i>
                        </div>
                        <h5 class="h3">Accessibilité, plus accessible</h5>
                        <p class="">
                           Pour que les visiteurs puissent vous contacter en toute simplicité. Vous serez facilement joignables.
                        </p>
                     </div>
                  </div>
               </div>
               
            </div>
         </section>
         
         <section id="examples" class="py-5">
            <div class="container">
               <header class="text-center mb-5">
                  <h2>Quelques exemples de réalisations</h2>
                  <p class="lead">Cliquez sur les exemple pour voir les possibilités que je vous offre</p>
               </header>
               <div class="row justify-content-around">
                  <div class="col-md-4 mb-3">
                     <div class="card overflow-hidden">
                        <img class="img-fluid" src="public/img/site_vitrine_restaurant.jpg" alt="Exemple site vitrine d'un restaurant" />
                        <div class="card-body">
                           <p class="card-text">
                              Restaurant
                           </p>
                           <a class="btn btn-outline-primary w-100" href="examples?name=Restaurant">Voir</a>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-md-4 mb-3">
                     <div class="card overflow-hidden">
                        <img class="img-fluid" src="public/img/site_vitrine_poisson_aquarium.jpg" alt="Exemple site vitrine d'un restaurant" />
                        <div class="card-body">
                           <p class="card-text">
                              Poissons aquariums
                           </p>
                           <a class="btn btn-outline-primary w-100" href="examples?name=AquaFish">Voir</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <section id="dataAnalysis" class="container py-5">
            <div class="row flex-column-reverse flex-md-row">
               <div class="hidden cta col-md-6">
                  <h2 class="h1 text-uppercase">Analyse de données</h2>
                  <p class="fs-4">Vous pouvez suivre le taux de conversions en utilisant un outil d'analyse de données. Ainsi, il vous sera facile de connaitre le comportement de vos visiteurs.</p>
                  <p class="fs-2">Je vous offre cette possibilité gratuitement. Celà vous intéresse?</p>
                  <a class="cta btn btn-primary fs-5" href="contact">Contactez-moi</a>
               </div>
               <div class="col-md-6 mb-5">
                  <img class="hidden img-fluid" src="public/img/data_analysis.jpg" alt="Analyse de données" />
               </div>
            </div>
         </section>
         
         <section class="articles container py-5">
            <header class="text-center mb-5">
               <h2 class="h1">Mes dérniers articles</h2>
               <p class="lead"></p>
            </header>
            <div class="row mt-2">
               <?php
                  foreach ($artsList as $article):
               ?>
               <!--Article og-->
               <div class="col-md-6 col-lg-4 mb-3">
                  <div class="item position-relative">
                     <img class="img-fluid" src="<?=$article['og_img']?>" alt="" />
                     <div class="position-absolute">
                        <p class="fs-3">
                           <?=$article['title']?>
                        </p>
                        <a class="big-link" href="blog?a_id=<?=$article['ID']?>"></a>
                     </div>
                  </div>
               </div>
               <?php
                  endforeach;
               ?>
               
            </div>
         </section>
      </main>
      
      <?php
         include('views/footer.php');
      ?>
      
      <!--<script src="public/js/bootstrap.min.js"></script>
      <script src="public/js/anime.min.js" type="text/javascript" charset="utf-8"></script>
      <script src="public/js/jquery-3.7.1.min.js" type="text/javascript" charset="utf-8"></script>
      -->
      
      <script type="text/javascript">
         (function (f, b) { if (!b.__SV) { var e, g, i, h; window.mixpanel = b; b._i = []; b.init = function (e, f, c) { function g(a, d) { var b = d.split("."); 2 == b.length && ((a = a[b[0]]), (d = b[1])); a[d] = function () { a.push([d].concat(Array.prototype.slice.call(arguments, 0))); }; } var a = b; "undefined" !== typeof c ? (a = b[c] = []) : (c = "mixpanel"); a.people = a.people || []; a.toString = function (a) { var d = "mixpanel"; "mixpanel" !== c && (d += "." + c); a || (d += " (stub)"); return d; }; a.people.toString = function () { return a.toString(1) + ".people (stub)"; }; i = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split( " "); for (h = 0; h < i.length; h++) g(a, i[h]); var j = "set set_once union unset remove delete".split(" "); a.get_group = function () { function b(c) { d[c] = function () { call2_args = arguments; call2 = [c].concat(Array.prototype.slice.call(call2_args, 0)); a.push([e, call2]); }; } for ( var d = {}, e = ["get_group"].concat( Array.prototype.slice.call(arguments, 0)), c = 0; c < j.length; c++) b(j[c]); return d; }; b._i.push([e, f, c]); }; b.__SV = 1.2; e = f.createElement("script"); e.type = "text/javascript"; e.async = !0; e.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === f.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js"; g = f.getElementsByTagName("script")[0]; g.parentNode.insertBefore(e, g); } })(document, window.mixpanel || []);
      </script>
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" type="text/javascript" charset="utf-8"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      
      <script src="public/js/navbar.js" type="text/javascript" charset="utf-8"></script>
      <script src="public/js/main.js" type="text/javascript" charset="utf-8"></script>
      
      <script src="public/js/home.js" type="text/javascript" charset="utf-8"></script>
      
      <script src="public/js/mixpanel-integration.js" type="text/javascript" charset="utf-8"></script>
      
   </body>
</html>