<div class="container">
  <div class="row">

    <!-- col-sm-offset-1  -->
    <div class="col-sm-7 hidden-xs reveal">
      <div class="texto_portada reveal-content text-left">
        <h4>¿<?= $nombre ?>?!</h4>
        <?php while (have_posts()): the_post();
          echo the_content();
        endwhile; ?>
      </div>
    </div>

    <!-- col-sm-offset-8  -->
    <div class="col-sm-5 pull-right ult-noticias">
      <div class="text-right">
        <h4 class="template-title-example">
          <a href="<?= $baseUrl ?>/blog">
            <?= $ult_entradas ?>
          </a>
        </h4>
        <?php
          $posts_query = new WP_Query('posts_per_page=4');
          while ($posts_query->have_posts()) : $posts_query->the_post();
        ?>
          <p class="portada_post_line">
            <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <i class="fas fa-angle-left fa-fw"></i></span>
          </p>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      <br>
      <div class="pull-right">
        <?php include("socialbuttons.php") ?>
      </div>
    </div>
  </div>
</div>
