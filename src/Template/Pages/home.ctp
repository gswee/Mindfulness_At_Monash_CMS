<?php
$this->layout = false;
//debug($homePageSettings);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Patrick+Hand" rel="stylesheet">
    
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
    
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    
    <!-- Navigation-->
    <?php echo $this->element('top-menu') ?>
    
    <!-- Page Header -->
    <?php echo $this->element('home/home_welcome') ?>

    <!-- Main Content -->
    <div class="container">
        <!-- Sandwich rows between 2 columns? -->
        <div class="row">
        <?php echo $this->element('home/home_forStudents') ?> 
        
        <?php echo $this->element('home/home_forEducators') ?>    
        </div>
        
    </div>
    <br>
    <br>
    <div id="contact_us">
        <?php echo $this->element('home/home_whoAreWe') ?>
    </div>
    
    <?php echo $this->element('footer') ?>
    
</body>
</html>
