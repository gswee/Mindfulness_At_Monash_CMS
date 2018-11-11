<?php
$cakeDescription = 'Mindfulness At Monash';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Replaced default .css with clean-blog template -->
    <?= $this->Html->css('clean-blog.min') ?>
    
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('all.min') ?>
    <?= $this->Html->css('custom_classes.css') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body style="margin-left: 0px;">
    <!-- Navigation-->
    <?php echo $this->element('article/article_top-menu') ?>
    
    <!-- Article Page -->
    <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        <?php echo $this->element('footer') ?>
    </footer>
    
    
</body>
</html>
