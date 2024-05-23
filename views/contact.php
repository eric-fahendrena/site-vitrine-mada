<?php
   $configs = include('configs.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
      <meta name="viewport" content="max-width=device-width, initial-scale=1.0" />
      <title>Contactez-moi - <?=$configs['COMPANY_NAME']?></title>
      <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
         rel ="stylesheet" integrity ="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
         crossorigin = "anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" type="text/css" />
      <link rel="stylesheet" href="public/css/styles.css" type="text/css" />
      <style type="text/css" media="all">
         @font-face {
            font-family: "Font Awesome 6 free";
            src: url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-solid-900.ttf"), url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-solid-900.woff2");
         }
         @font-face {
            font-family: "Font Awesome 6 brands";
            src: url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-brands-400.ttf"), url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/webfonts/fa-brands-400.woff2");
         }
      </style>
      <!--<script type="text/javascript">
         (function (f, b) { if (!b.__SV) { var e, g, i, h; window.mixpanel = b; b._i = []; b.init = function (e, f, c) { function g(a, d) { var b = d.split("."); 2 == b.length && ((a = a[b[0]]), (d = b[1])); a[d] = function () { a.push([d].concat(Array.prototype.slice.call(arguments, 0))); }; } var a = b; "undefined" !== typeof c ? (a = b[c] = []) : (c = "mixpanel"); a.people = a.people || []; a.toString = function (a) { var d = "mixpanel"; "mixpanel" !== c && (d += "." + c); a || (d += " (stub)"); return d; }; a.people.toString = function () { return a.toString(1) + ".people (stub)"; }; i = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split( " "); for (h = 0; h < i.length; h++) g(a, i[h]); var j = "set set_once union unset remove delete".split(" "); a.get_group = function () { function b(c) { d[c] = function () { call2_args = arguments; call2 = [c].concat(Array.prototype.slice.call(call2_args, 0)); a.push([e, call2]); }; } for ( var d = {}, e = ["get_group"].concat( Array.prototype.slice.call(arguments, 0)), c = 0; c < j.length; c++) b(j[c]); return d; }; b._i.push([e, f, c]); }; b.__SV = 1.2; e = f.createElement("script"); e.type = "text/javascript"; e.async = !0; e.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === f.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js"; g = f.getElementsByTagName("script")[0]; g.parentNode.insertBefore(e, g); } })(document, window.mixpanel || []);
      </script>-->
   </head>
   <body>
      <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top shadow">
            <div class="container">
               <a class="navbar-brand" href="#"><?=$configs['COMPANY_NAME']?></a>
               <button class="navbar-toggler" id="nbToggler">
                  <span id="line1"></span>
                  <span id="line2"></span>
                  <span id="line3"></span>
               </button>
               <div class="offcanvas-collapse" id="nbCollapse">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">A propos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="tariffs">Les tarifs</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="contact">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      
      <main id="contact">
         <div class="banner mb-5 position-relative bg-dark">
            <img class="img-fluid" src="public/img/coffee.jpg" alt="Plan du design" />
            <div class="position-absolute d-flex align-items-center justify-content-center">
               <div class="container text-center">
                  <h1>Contactez-moi</h1>
               </div>
            </div>
         </div>
         
         <div class="container">
            <div class="row mb-5">
               <section class="col-md-8 mb-3">
                  <form id="contactForm" class="mb-3" action="https://formspree.io/f/moqgadvk" method="post" accept-charset="utf-8">
                     <div class="mb-4">
                        <h2 class="h2">Envoyez-moi un message</h2>
                        <p class="lead">Je vous repondrai dans le plus bref delai</p>
                     </div>
                     
                     <div class="row">
                        <div id="nameForm" class="item mb-3">
                           <label class="form-label" for="name">Nom</label>
                           <input class="form-control" type="text" name="Depuis" id="name" placeholder="Votre nom" required/>
                           <div class="invalid-feedback">
                              Veuillez entrer votre nom!
                           </div>
                        </div>
                        <div id="emailForm" class="item mb-3">
                           <label class="form-label" for="email">Adresse e-mail</label>
                           <input class="form-control" type="email" name="Adresse E-mail" id="email" placeholder="Votre adresse e-mail" aria-describedby="emailHelp" required/>
                           <div class="invalid-feedback">
                              Veuillez entrer une adresse e-mail valid!
                           </div>
                           <div id="emailHelp" class="form-text">
                              Je ne partagerai jamais votre adresse e-mail avec quelqu'un d'autre.
                           </div>
                        </div>
                     </div>
                     <div id="messageForm" class="item mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" name="Message" id="message" rows="8" placeholder="Votre message" required></textarea>
                        <div class="invalid-feedback">
                           Quel est votre message?
                        </div>
                     </div>
                     <div class="text-end">
                        <button class="submit-form btn btn-primary" type="submit">Envoyer</button>
                     </div>
                  </form>
               </section>
               
               <section class="col-md-4 position-relative">
                  <div class="info py-4 position-sticky">
                     <h2>Informations de contact</h2>
                     <ul class="list-unstyled">
                        <li><a href="tel:0322406077"><i class="fas fa-phone mx-2"></i> +261 32 24 060 77</a></li>
                        <li><a href="mailto:ericfahendrena29@gmail.com"><i class="fas fa-envelope mx-2"></i> ericfahendrena29@gmail.com</a></li>
                        <li>Ampitakely, Fianarantsoa Madagascar</li>
                     </ul>
                  </div>
               </section>
            </div>
         </div>
      </main>
      
      <?php
         include('views/footer.php');
      ?>
      
      <script type="text/javascript">
         (function (f, b) { if (!b.__SV) { var e, g, i, h; window.mixpanel = b; b._i = []; b.init = function (e, f, c) { function g(a, d) { var b = d.split("."); 2 == b.length && ((a = a[b[0]]), (d = b[1])); a[d] = function () { a.push([d].concat(Array.prototype.slice.call(arguments, 0))); }; } var a = b; "undefined" !== typeof c ? (a = b[c] = []) : (c = "mixpanel"); a.people = a.people || []; a.toString = function (a) { var d = "mixpanel"; "mixpanel" !== c && (d += "." + c); a || (d += " (stub)"); return d; }; a.people.toString = function () { return a.toString(1) + ".people (stub)"; }; i = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split( " "); for (h = 0; h < i.length; h++) g(a, i[h]); var j = "set set_once union unset remove delete".split(" "); a.get_group = function () { function b(c) { d[c] = function () { call2_args = arguments; call2 = [c].concat(Array.prototype.slice.call(call2_args, 0)); a.push([e, call2]); }; } for ( var d = {}, e = ["get_group"].concat( Array.prototype.slice.call(arguments, 0)), c = 0; c < j.length; c++) b(j[c]); return d; }; b._i.push([e, f, c]); }; b.__SV = 1.2; e = f.createElement("script"); e.type = "text/javascript"; e.async = !0; e.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === f.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js"; g = f.getElementsByTagName("script")[0]; g.parentNode.insertBefore(e, g); } })(document, window.mixpanel || []);
      </script>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" type="text/javascript" charset="utf-8"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
      
      <script src="public/js/navbar.js" type="text/javascript" charset="utf-8"></script>
      <script src="public/js/contact.js" type="text/javascript" charset="utf-8"></script>
      
      <script src="public/js/mixpanel-integration.js" type="text/javascript" charset="utf-8"></script>
   </body>
</html>