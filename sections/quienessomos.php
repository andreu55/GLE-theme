<div class="row section-container-spacer">
  <div class="col-xs-12 col-md-12">
    <h2><?= $quienes_somos ?></h2>
    <p><?= $quienes_somos_text ?></p>
  </div>
</div>
<div class="row">
  <?php foreach ($nosotros as $u): ?>
    <div class="col-xs-12 col-sm-6">
      <img src="<?= myurl('assets/images/loading.gif') ?>" data-src="<?= myurl('assets/images/') ?><?= $u['img'] ?>" alt="<?= $u['alt'] ?>" class="hidden-xs reveal img-responsive reveal-content image-center">
      <img src="<?= myurl('assets/images/loading.gif') ?>" data-src="<?= myurl('assets/images/') ?><?= $u['img-mobile'] ?>" alt="<?= $u['alt'] ?>" class="visible-xs img-responsive image-center">
      <h3><?= $u['nombre'] ?></h3>
      <h4><b><?= $u['funcion'] ?></b></h4>
      <p class="quienessomos_text">
        <?= $u['descr'] ?>
      </p>
      <p>
        <?php foreach ($u['botonacos'] as $btn): ?>
          <a href="<?= $btn['url'] ?>" target="_blank" rel="nofollow" class="btn btn-primary mb-2">
            <?= $btn['texto'] ?>
          </a>
        <?php endforeach; ?>
      </p>
      <p>
        <?php foreach ($u['social'] as $url): ?>
          <a href="<?= $url['url'] ?>" target="_blank" rel="nofollow" class="social-round-icon fa-icon" title="">
            <i class="<?= $url['icon'] ?>"></i>
          </a>
        <?php endforeach; ?>
      </p>
    </div>
  <?php endforeach; ?>
</div>
