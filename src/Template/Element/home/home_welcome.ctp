<header class="masthead" id="banner">
  <div class="overlay">
    <?= $this->Html->image($homePageSettings['welcomeBg'], ['class' => 'img-responsive'], ['alt' => 'A silhouette at peace in the mountains.']); ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?= $homePageSettings['welcomeTitle'] ?></h1>
              <span class="subheading"><?= $homePageSettings['welcomeSubtitle'] ?></span>
        </div>
      </div>
    </div>
  </div>
</header>