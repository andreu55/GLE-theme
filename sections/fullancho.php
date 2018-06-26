<style>
  .full-ancho-foto {
    height: 600px;
    background-image: url(<?= myurl('assets/images/fullback.jpg') ?>);
    background-size: cover;
    background-position: left center;
  }
  .full-ancho-texto {
    margin-top: 3em;
    padding: 1em 3em;
    background-color: rgba(255, 255, 255, 0.8);
    border-top-left-radius: 70px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 70px;
    font-size: 20px
  }
</style>

<!-- background-image-container -->
<div class="full-ancho-container">
  <div class="full-ancho-foto">
    <div class="container">
      <div class="row">
        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-6 col-sm-5 full-ancho-texto">
          <h2><?= $fullancho ?></h2>
          <p style="color:#000">
            <?= $fullancho_text ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
