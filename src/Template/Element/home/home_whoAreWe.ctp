<header class="masthead" id="banner">
    <div class="overlay">
        <?= $this->Html->image($homePageSettings['Who Are We Section Masthead'], ['alt' => 'A serene water droplet ripple, captured in mid splash']); ?>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?= $homePageSettings['Who Are We Section Title'] ?></h1>
                <span class="subheading">
                    <?= $homePageSettings['Who Are We Section Subtitle'] ?>
                </span>
                <br>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-auto">
                            <div class="image-cropper">
                              <?= $this->Html->image($homePageSettings['Who Are We Section Staff(1) Photo'], ['alt' => 'Dr Richard Chambers', 'id'=>'whoAreWe']) ?>
                            </div>
                        </div>
                        <div class="col-md">
                            <span class="subheading" style="text-align: left; line-height: 1.5">
                                <?= $homePageSettings['Who Are We Section Staff(1) Name'] ?> <br>
                                Email: <a href="mailto:<?= $homePageSettings['Who Are We Section Staff(1) Email'] ?>" id="email"><?= $homePageSettings['Who Are We Section Staff(1) Email']?></a><br>
                                <span class="subheading" id="contactdesc">
                                    <?= $homePageSettings['Who Are We Section Staff(1) Description'] ?>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
              
          </div>
        </div>
      </div>
    </header>