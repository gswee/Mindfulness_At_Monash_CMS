<?php
$cakeDescription = 'Mindfulness At Monash';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:600|Patrick+Hand" rel="stylesheet">
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
        
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Replaced default .css with clean-blog template -->
    <?= $this->Html->css('clean-blog') ?>
    
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('all.min') ?>
    <?= $this->Html->css('custom_classes.css') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <style>
        div.site-heading img {
            max-width:100%;
        }
        
    </style>
</head>
<body style="margin-left: 0px;">
    <!-- Navigation-->
    <?php echo $this->element('article/article_top-menu') ?>
    
    <!-- Article Page -->
    <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
