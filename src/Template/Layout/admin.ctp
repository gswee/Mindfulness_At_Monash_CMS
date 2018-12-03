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
    <script type="text/javascript">
        tinymce.init({
        selector: '#body',
          plugins: ["advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste autoresize"],
          //invalid_elements: 'br'
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            file_picker_types: 'file image media',
              force_br_newlines : false,
              force_p_newlines : false,
            forced_root_block: '',
            invalid_elements:"div"
      });
    </script>
    
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
    <nav class="navbar navbar-expand-md fixed-top bg-dark">
        <h1><?= $this->Html->link(__('Mindfulness At Monash Admin'), ['controller'=>'Article', 'action'=>'index', '?' => ['direction'=>'asc', 'sort'=>'id']], ['id'=>'home']); ?></h1>
    </nav>
    <div class="row" id="body-row">
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
                    <li><?= $this->Html->link(__('View Archived Articles'), ['controller' => 'Article', 'action' => 'searchByStatus', 'archived','?' => ['direction'=>'asc', 'sort'=>'created']]) ?></li>
                    <li><?= $this->Html->link(__('View Published Articles'), ['controller' => 'Article', 'action' => 'searchByStatus', 'published','?' => ['direction'=>'asc', 'sort'=>'created']]) ?></li>
                    <li><?= $this->Html->link(__('View Draft Articles'), ['controller' => 'Article', 'action' => 'searchByStatus', 'draft','?' => ['direction'=>'asc', 'sort'=>'created']]) ?></li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <div class="admin">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    
    </div>
    
</body>
</html>
