<?php
  /**
  * Template Name: Google, luego existo
  */

  require_once "textosGLE.php";
  require_once "assets/funciones.php";

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="author" content="Andreu y Marta">
  <meta name="google" content="notranslate" />
  <meta name="msapplication-tap-highlight" content="no">

  <!-- la funcion de WordPress para inprimir los favicons -->
  <?php wp_site_icon() ?>

  <meta name="description" content="<?= $descripcion ?>">
  <title><?= $nombre_plano ?></title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,600|Nothing+You+Could+Do">

  <link href="<?= myurl('css/loader.php') ?>" rel="stylesheet">
</head>

<body>
  <?php include "sections/barra.php" ?>

  <!-- Portada -->
  <!-- data-vide-bg es la url del video (sin la extensión (.mp4))  -->
  <div id="vid" data-vide-bg="<?= get_vide_url() ?>" data-vide-options="posterType: jpg" class="hero-full-container background-image-container white-text-container">
    <?php include "sections/portada.php" ?>
  </div>

  <!-- Qué hacemos -->
  <div class="section-container">
    <div class="container">
      <?php include "sections/quehacemos.php" ?>
    </div>
  </div>

  <!-- Collapsible full width -->
  <div class="section-container">
    <?php include "sections/fullancho.php" ?>
  </div>


  <!-- Slides -->
  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php include "sections/slides.php" ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Quienes somos -->
  <div class="section-container">
    <div class="container text-center">
      <?php include "sections/quienessomos.php" ?>
    </div>
  </div>

  <!-- Testimonios -->
  <!-- <div class="section-container" id="testimonios">
    <div class="row section-container-spacer text-center">
      <?php // include "sections/testimonios.php" ?>
    </div>
  </div> -->

  <!-- Contacto -->
  <div id="contacto" class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <?php include "sections/contacto.php" ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarFixedTopAnimation();
      navActivePage();
      scrollRevelation('.reveal');
    });
  </script>

  <?php include "sections/footer.php" ?>

  <script src="<?= myurl('main.0cf8b554.js') ?>"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js" integrity="sha256-vjlQ2rQnkbtQ1goJyAhpuoyG99q3Tv8juRo2XQxxCDE=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typeit@5.10.1/dist/typeit.min.js" integrity="sha256-wV/fTluTFUM+Lv1nAc3DgjOOZlo12Dlf8Rsn2x/LU08=" crossorigin="anonymous"></script>

  <script>

    // Documentacion: https://typeitjs.com
    var instance = new TypeIt('#t_portada', {
      speed: 50,
      //   cursor: false,
      autoStart: false,
      afterComplete: function (instance) {
        // Destruir cursor al segundo de terminar
        setTimeout(() => {
          instance.destroy();
        }, 1000);
      }
      })
      .type('<span class="g-gr">Goog</span>')
      .pause(500)
      .delete(3)
      .pause(200)
      .delete(1)
      .pause(150)
      .type('<span class="g-az">G</span><span class="g-ro">o</span><span class="g-am">o</span><span class="g-az">g</span><span class="g-ve">l</span><span class="g-ro">e</span>, ')
      .pause(1000)
      .type('<span class="logo_second">luego existo</span>');


      // Lazy load images
      window.addEventListener('load', function() {
        var allimages= document.getElementsByTagName('img');
        for (var i=0; i<allimages.length; i++) {
          if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
          }
        }
      }, false)

  </script>

</body>
</html>
