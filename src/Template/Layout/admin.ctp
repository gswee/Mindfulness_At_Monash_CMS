<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Mindfulness At Monash Admin'
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Enable if Trumbowyg is used over TinyMCE
        <?= $this->Html->css('ui/trumbowyg.min.css') ?>
    
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>-->
    <?= $this->Html->script("tinymce/tinymce.min.js") ?>
    <!--<script type="text/javascript">
      tinymce.init({
        selector: '#description, #body',
          invalid_elements: 'br'
      });
    </script>-->
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('admin.css') ?>
    <?= $this->Html->css('custom_classes_admin.css') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Navigation-->
    
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul>
            <li class="name">
                <h1> <?= $this->Html->link(__('Mindfulness At Monash Admin'), ['controller'=>'Article', 'action'=>'index', '?' => ['direction'=>'asc', 'sort'=>'id']]); ?></h1>
            </li>
        </ul>
        <!--
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
-->
    </nav>
    
    <nav class="sidebar">
        <ul class="side-nav">
            <li><?= $this->Html->link(__('Edit Pages'),  "#", ['action' => 'add']) ?></li>
            <li>
                <ul class="side-nav sub-menu">
                    <li><?= $this->Html->link(__('Home Page'), "#", ['controller' => 'Article', 'action' => 'edit_home']) ?></li>
                    <li><?= $this->Html->link(__('For Students'), "#", ['controller' => 'Article', 'action' => 'edit_students']) ?></li>
                    <li><?= $this->Html->link(__('For Educators'), "#", ['controller' => 'Article', 'action' => 'edit_educators']) ?></li>
                </ul>
            </li>
            
            <li><?= $this->Html->link(__('Articles'), ['controller'=>'Article', 'action' => 'index']) ?></li>
            <li>
                <ul class="side-nav sub-menu">
                    <li><?= $this->Html->link(__('New Article'), ['controller'=>'Article', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('Student Articles'), ['controller' => 'Category', 'action' => 'view', '1']) ?></li>
                    <li><?= $this->Html->link(__('Educator Articles'), ['controller' => 'Category', 'action' => 'view', '2']) ?></li>
                </ul>
            </li>
            <!--
            <li><?= $this->Html->link(__('Categories'), ['controller' => 'Category', 'action' => 'index']) ?></li>
            <li>
                <ul class="side-nav sub-menu">
                    <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
                </ul>
            </li>
            -->
        </ul>
    </nav>
    
    <div class="admin">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    
    <footer>
        <?php echo $this->element('footer') ?>
    </footer>
    <!-- Trumbowyg text editor - implement later if TinyMCE does not allow free use
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?= $this->Html->script('jquery-3.2.1.min.js') ?>
    <?= $this->Html->script('trumbowyg.min.js') ?>
    -->
</body>
</html>
