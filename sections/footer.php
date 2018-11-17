<footer class="footer-container white-text-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <h3><?= $nombre ?></h3>
            <p class="text-dark-blanco"><?= $descripcion ?></p>
            <?php // include "socialbuttons.php" ?>

            <p class="thanks hidden-xs">
              <small>
                Thanks to <a href="http://www.mashup-template.com/" target="_blank" rel="nofollow" title="Create website with free html template">Mashup Template</a> for this template! <i class="far fa-heart fa-fw"></i>
              </small>
            </p>
          </div>
          <div class="col-xs-12 col-sm-3">
            <h3 class="template-title-example">
              Enlaces de interés
            </h3>
            <div class="text-dark-blanco">
              <a href="<?= $baseUrl ?>/contacto">Contacto</a><br>
              <a href="<?= $baseUrl ?>/aviso-legal">Aviso Legal</a><br>
              <a href="<?= $baseUrl ?>/politica-de-privacidad">Política de privacidad</a><br>
              <a href="<?= $baseUrl ?>/politica-de-cookies">Política de cookies</a><br>
            </div>
          </div>
          <div class="col-xs-12 col-sm-5">
            <!-- <div class="pull-right"> -->
              <h3 class="template-title-example">
                <a href="<?= $baseUrl ?>/blog">
                  <?= $ult_entradas ?>
                </a>
              </h3>
              <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                <p class="portada_post_line">
                  <i class="fas fa-angle-right fa-fw"></i>
                  <a class="text-dark-blanco" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </p>
              <?php endwhile; wp_reset_query(); ?>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
