
  <div class="container">
    <div class="row">

      <!-- col-sm-offset-1 reveal -->
      <div class="col-sm-7 hidden-xs">
        <!-- <div class="texto_portada text-left reveal-content"> -->
        <!-- class="text-left" -->
          <h1>
            <span id="t_portada"></span>
            <!-- <span id="t_portada"></span><span class="logo_second">luego existo</span> -->
          </h1>
          <?php /* while (have_posts()): the_post();
            echo the_content();
          endwhile; */ ?>
        <!-- </div> -->
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
      </div>
    </div>
  </div>
