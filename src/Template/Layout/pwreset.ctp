<?php
/**
 * @var \App\Model\Entity\Settings $settings
 */
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $this->fetch('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->css('base.css'); ?>
    <?php echo $this->Html->css('admin.css'); ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

<div class="auth">
    <div class="auth-container">
        <div class="card" style="background-color: white">

            <div class="auth-content">

                <?= $this->Flash->render() ?>

                <?= $this->fetch('content') ?>

            </div>
        </div>

    </div>
</div>

</body>
</html>
