<header class="masthead" id="banner">
    <div class="overlay">
        <?= $this->Html->image($homePageSettings['contactusBg'], ['alt' => 'A serene water droplet ripple, captured in mid splash']); ?>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?= $homePageSettings['contactusTitle'] ?></h1>
                <span class="subheading">
                    <?= $homePageSettings['contactusSubtitle'] ?>
                </span>
                <br>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-auto">
                            <div class="image-cropper">
                              <?= $this->Html->image($homePageSettings['contactusStaff1_photo'], ['alt' => 'Dr Richard Chambers', 'id'=>'whoAreWe']) ?>
                            </div>
                        </div>
                        <div class="col-md">
                            <span class="subheading" style="text-align: left; line-height: 1.5">
                                <?= $homePageSettings['contactusStaff1_name'] ?> <br>
                                Email: <a href=<?= $homePageSettings['contactusStaff1_email'] ?> id="email">richard.chambers@monash.edu</a><br>
                                <span class="subheading" id="contactdesc">
                                    <?= $homePageSettings['contactusStaff1_desc'] ?>
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