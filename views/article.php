<?php
   $configs = include('configs.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
      <meta name="viewport" content="max-width=device-width, initial-scale=1.0" />
      <title><?=$artData['title']?></title>
      <meta property="og:type" content="website" />
      <meta property="og:title" content="<?=$artData['title']?>" />
      <meta property="og:description" content="<?=$artData['og_description']?>" />
      <meta property="og:image" content="<?=$artData['og_img']?>" />
      <meta property="og:url" content="<?=$_SERVER['HTTP_HOST'] .'?a_id=' .$artData['ID']?>" />
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
                        <a class="nav-link" href="contact">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="blog">Blog</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      
      <main id="article">
         
         <div class="container py-3">
            <div class="row">
               <section class="col-md-8">
                  
                  <article class="mb-5">
                     <div class="mx-2 mb-3">
                        <a class="p-1 text-uppercase fw-semibold" href="blog">Blog ></a>
                        <a class="p-1 text-uppercase fw-semibold" href=""><?=$artData['category']?> ></a>
                     </div>
                     
                     <h1 class="fw-bold"><?=$artData['title']?></h1>
                     
                     <div class="mx-2 py-3">
                        <span class="small"><i class="fas fa-calendar mx-2"></i> <?=$artData['date']?></span>
                     </div>
                     
                     <div class="mb-3">
                        <img class="img-fluid rounded shadow" src="<?=$artData['og_img']?>" alt="Plan du design" />
                     </div>
                     <p>
                        <?=$artData['og_description']?>
                     </p>
                     <div class="info">
                        <p><i class="fas fa-info-circle h2"></i> Vous cherchez un développeur pour votre site vitrine? <a href="contact">N'hésitez pas à me contacter</a></p>
                     </div>
                     <?=$artData['html_content']?>
                  </article>
                  
               </section>
               
               <aside class="col-md-4">
                  <div class="position-sticky">
                     <section class="ad mb-4">
                        <p class="h3">Besoin d'un site vitrine?</p>
                        <p>Permettez-moi de donner vie à votre présence en ligne</p>
                        <div>
                           <a class="cta btn btn-primary w-100" href="contact">Contactez-moi</a>
                        </div>
                     </section>
                     
                     <section class="pb-4">
                        <div class="sharer py-3">
                           <?php
                              $artEncodedURL = urlencode('https://site-vitrine-mada.is-best.net/blog?a_id=' .$artData['ID']);
                              $encodedText = urlencode($artData['title'] ."\n\n");
                           ?>
                           <div class="h4 mb-3">
                              Partagez ce contenu
                           </div>
                           <ul class="list-unstyled">
                              <li class="d-inline mx-1"><a class="" href="https://www.facebook.com/sharer.php?u=<?=$artEncodedURL?>" target="_blank"><i class="fab fa-facebook fs-3"></i></a></li>
                              <li class="d-inline mx-1"><a class="" href="https://api.whatsapp.com/send?text=<?=$encodedText?>%20<?=$artEncodedURL?>"><i class="fab fa-whatsapp fs-3"></i></a></li>
                              <li class="d-inline mx-1"><a class="" href="https://twitter.com/intent/tweet?url=<?=$artEncodedURL?>&amp;text=<?=$encodedText?>"><i class="fab fa-twitter fs-3"></i></a></li>
                              <li class="d-inline mx-1"><a class="" href="https://www.linkedin.com/sharing/share-offsite/?url=<?=$artEncodedURL?>"><i class="fab fa-linkedin fs-3"></i></a></li>
                              <li class="d-inline mx-1"><a class="" href="https://t.me/share/url?url=<?=$artEncodedURL?>&amp;text=<?=$encodedText?>"><i class="fab fa-telegram fs-3"></i></a></li>
                           </ul>
                        </div>
                     </section>
                     
                     <section class="position-relative">
                        <div class="info py-4 position-sticky">
                           <h2>Informations de contact</h2>
                           <ul class="list-unstyled">
                              <li><a href="tel:+261322406077"><i class="fas fa-phone mx-2"></i> +261 32 24 060 77</a></li>
                              <li><a href="mailto:ericfahendrena29@gmail.com"><i class="fas fa-envelope mx-2"></i> ericfahendrena29@gmail.com</a></li>
                              <li>Ampitakely, Fianaratsoa Madagascar</li>
                           </ul>
                        </div>
                     </section>
                     
                  </div>
               </aside>
            </div>
            
            <section class="container py-5">
               <div class="row">
                  <div class="col-md-6">
                     <img class="img-fluid" src="public/img/web_development_.png" alt="Développement web" />
                  </div>
                  <div class="col-md-6 d-flex align-items-center justify-content-center flex-column">
                     <div class="hidden cta mb-5">
                        <p class="fs-1">
                           Permettez-moi de donner vie à votre site vitrine.
                        </p>
                        <a class="cta btn btn-primary fs-4" href="contact">Contactez-moi</a>
                     </div>
                  </div>
               </div>
            </section>
            
            <section class="container py-5">
               <!--Random articles-->
               <div class="random-articles mb-5 row">
                  <h2 class="h1">Autres articles</h2>
                  <?php
                     foreach ($artsList as $article):
                  ?>
                  <!--Article opengraph-->
                  <div class="col-md-6 col-lg-4">
                     <div class="og my-2 py-0 position-relative">
                        <div class="row">
                           <div class="col-6">
                              <img class="img-fluid" src="<?=$article['og_img']?>" alt="Plan du design" />
                           </div>
                           <div class="col-6">
                              <div class="category">
                                 <span><?=$article['category']?></span>
                              </div>
                              <p class="fs-6">
                                 <?=$article['title']?>
                              </p>
                           </div>
                        </div>
                        <a class="big-link" href="blog?a_id=<?=$article['ID']?>" title="Ouvrir l'article"></a>
                     </div>
                  </div>
                  <?php
                     endforeach;
                  ?>
               </div>
               
            </section>
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
      <script src="public/js/main.js" type="text/javascript" charset="utf-8"></script>
      
      <script src="public/js/mixpanel-integration.js" type="text/javascript" charset="utf-8"></script>
   </body>
</html>