
<div class="card-container">

  <div class="card card-shadow col-md-8 col-md-offset-2" style="padding:1rem 5rem 5rem">
    <div class="section-container-spacer">
      <h2 class="text-center">
        <?= $subscribe ?>
      </h2>
      <p class="text-center">
        <?= $subscribe_text ?>
      </p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?>
    </div>
  </div>
  <div class="card-image col-xs-12 card-shadow hidden-xs" id="contact-img"></div>
</div>
