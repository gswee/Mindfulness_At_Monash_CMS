<header class="masthead" id="banner">
  <div class="overlay">
    <?= $this->Html->image($homePageSettings['Welcome Section Masthead'], ['class' => 'img-responsive'], ['alt' => 'A silhouette at peace in the mountains.']); ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?= $homePageSettings['Welcome Section Title'] ?></h1>
              <span class="subheading"><?= $homePageSettings['Welcome Section Subtitle'] ?></span>
        </div>
      </div>
    </div>
  </div>
</header>