<?php
$this->layout = false;
//debug($homePageSettings);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Courgette" rel="stylesheet">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mindfulness At Monash - Welcome
    </title>

    <?= $this->Html->meta('icon') ?>
    <!-- Replaced default cake css with Clean Blog css -->
    <?= $this->Html->css('clean-blog.css') ?>
    
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('all.min.css') ?>
    <?= $this->Html->css('custom_classes.css') ?>

</head>
<body>
    
    <!-- Navigation-->
    <?php echo $this->element('top-menu') ?>
    
    <!-- Page Header -->
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

    <!-- Main Content -->
    <div class="container">
        <!-- Sandwich rows between 2 columns? -->
        <div class="row">
            <div class="col-6 mx-auto" id="homepage_col" style="border-right: 1px solid gray">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?= $this->Html->link('For Students', ['controller' => 'Article', 'action' => 'viewArticleIndex', '1'], ['id'=>'title_home']) ?>
                        </h2>
                        <span class="fa-stack fa-lg">
                            <?= $this->Html->link('<i class="fas fa-circle fa-stack-2x"></i>'.'<i class="fas fa-pencil-alt fa-stack-1x fa-inverse"></i>', ['controller' => 'Article', 'action' => 'viewArticleIndex', '1'], ['id'=>'title_home','escape'=>false]) ?>
                        </span>
                        <h3 class="post-subtitle">
                            <?= $this->Html->link('Mindfulness helps to improve mental health, improve academic performance and best of all - it\'s easy! Find out how you can get back in touch with your mind.', ['controller' => 'Article', 'action' => 'viewArticleIndex', '1'], ['id'=>'subtitle_home']) ?>

                        </h3>
                    </a>
                </div>
                <br>
                <!-- Pager -->
                <div class="clearfix">
                    <?= $this->Html->link('Find out more', ['controller' => 'Article', 'action' => 'viewArticleIndex', '1'], ['class'=>'btn btn-primary']) ?>
                    <!--<a class="btn btn-primary" href="#">Find out more &rarr;</a>-->
                </div>
            </div>

            <div class="col-6 mx-auto" id="homepage_col">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?= $this->Html->link('For Educators', ['controller' => 'Article', 'action' => 'viewArticleIndex', '2'], ['id'=>'title_home']) ?>
                        </h2>
                        <span class="fa-stack fa-lg">
                            <?= $this->Html->link('<i class="fas fa-circle fa-stack-2x"></i>'.'<i class="fas fa-book fa-stack-1x fa-inverse"></i>', ['controller' => 'Article', 'action' => 'viewArticleIndex', '2'], ['id'=>'title_home','escape'=>false]) ?>
                        </span>
                        <h3 class="post-subtitle">
                            <?= $this->Html->link('Mindfulness is beneficial for your students\' wellbeing - as well as yours. Find out how you can impart the benefits of mindfulness to your students.', ['controller' => 'Article', 'action' => 'viewArticleIndex', '2'], ['id'=>'subtitle_home']) ?>
                        </h3>
                    </a>
                    <br>
                    <!-- Pager -->
                    <div class="clearfix">
                        <?= $this->Html->link('Find out more', ['controller' => 'Article', 'action' => 'viewArticleIndex', '2'], ['class'=>'btn btn-primary']) ?>
                        <!--<a class="btn btn-primary" href="#">Older Posts &rarr;</a>-->
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <br>
    <br>
    <!-- Contact Us -->
    <div id="contact_us">
        <header class="masthead" id="banner">
            <div class="overlay">
                <?= $this->Html->image($homePageSettings['Who Are We Section Masthead'], ['alt' => 'A serene water droplet ripple, captured in mid splash']); ?>
            </div>

            <div class="container" id="contact_us">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1><?= $homePageSettings['Who Are We Section Title'] ?></h1>
                            <span class="subheading">
                                <?= $homePageSettings['Who Are We Section Subtitle'] ?>
                            </span>
                            <br>
                        </div>
                    </div>
                    <div class="container" id="contacts">
                        <div class="row d-flex justify-content-center">
                            <div class="col-auto">
                                <div class="image-cropper">
                                    <?= $this->Html->image($homePageSettings['Who Are We Section Staff(1) Photo'], ['alt' => 'Dr Richard Chambers', 'id'=>'whoAreWe']) ?>
                                </div>
                            </div>
                            <div class="col-sm" style="padding-left:60px; padding-right:0px; border-right: 1px solid white;">
                                <span class="subheading" style="text-align: left; line-height: 1.5">
                                    <p style="font-weight: bold"><?= $homePageSettings['Who Are We Section Staff(1) Name'] ?><br>
                                    Email: <a href="mailto:<?= $homePageSettings['Who Are We Section Staff(1) Email'] ?>" id="email"><?= $homePageSettings['Who Are We Section Staff(1) Email']?></a></p>

                                </span>
                            </div>
                            <div class="col-sm" style="margin-left: 40px">
                                <span class="subheading" id="contactdesc">
                                        <?= $homePageSettings['Who Are We Section Staff(1) Description'] ?>
                                    </span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </header>
    </div>
    
    <?php echo $this->element('footer') ?>
    
</body>
</html>
