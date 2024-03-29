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

//$user = $session->read('Auth');
$cakeDescription = 'Mindfulness At Monash Admin';
//debug($this->request->params);
//exit;
$loguser = $this->request->session()->read('Auth.User');
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        #username {
            color: white;
        }
        #username:hover {
            text-decoration: none;
            opacity: 0.8;
        }
    </style>
    <?= $this->Html->script("tinymce/tinymce.min.js") ?>
    <script type="text/javascript">
        tinymce.init({
            selector: '#body',
            plugins: ["advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste autoresize"],
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
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md fixed-top bg-dark">
        <h1><?= $this->Html->link(__('Mindfulness At Monash Admin'), ['controller'=>'Users', 'action'=>'admin_home'], ['id'=>'home']); ?></h1>
        <div id="user_section">
            <div class="row">
                <div class="col-sm-8 user">
                    Welcome, <b><?= $this->Html->link($loguser['username'],['controller'=>'users', 'action'=>'view', $loguser['id']], ['id'=>'username', 'escape'=>false]) ?></b>
                </div>
                <div class="col-sm-4 logout">
                    <?= $this->Html->link('Logout',['controller'=>'users','action'=>'logout'], ['id'=>'home']); ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="row" id="body-row">
    <nav class="sidebar">
        <ul class="side-nav">
            <li  <?php if($this->request->params['controller'] == 'Settings' && $this->request->params['action'] == 'index') {echo 'class="current"';} ?>>
                <?= $this->Html->link(__('Edit Pages'), ['controller'=>'Settings', 'action' => 'index']) ?>
            </li>
            <li>
                <ul class="side-nav sub-menu">
                    <li <?php if($this->request->params['controller'] == 'Settings' && $this->request->params['action'] == 'edit') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('Home Page'), ['controller' => 'Settings', 'action' => 'edit']) ?>
                    </li>

                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'edit' && $this->request->params['pass'][0] == '1') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('For Students'), ['controller' => 'Article', 'action' => 'edit', '1']) ?>
                    </li>

                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'edit' && $this->request->params['pass'][0] == '2') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('For Educators'), ['controller' => 'Article', 'action' => 'edit', '2']) ?>
                    </li>
                </ul>
            </li>
            
            <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'index') {echo 'class="current"';} ?>>
                <?= $this->Html->link(__('Articles'), ['controller'=>'Article', 'action' => 'index']) ?>
            </li>
            <li>
                <ul class="side-nav sub-menu">
                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'add') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('New Article'), ['controller'=>'Article', 'action' => 'add']) ?>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'searchByCategory' && $this->request->params['pass'][0] == '1') {echo 'class="current"';}?>>
                        <?= $this->Html->link(__('Student Articles'), ['controller' => 'Article', 'action' => 'searchByCategory', '1']) ?>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'searchByCategory' && $this->request->params['pass'][0] == '2') {echo 'class="current"';}?>>
                        <?= $this->Html->link(__('Educator Articles'), ['controller' => 'Article', 'action' => 'searchByCategory', '2']) ?>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'searchByStatus' && $this->request->params['pass'][0] == 'archived') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('View Archived Articles'), ['controller' => 'Article', 'action' => 'searchByStatus', 'archived']) ?>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'searchByStatus' && $this->request->params['pass'][0] == 'published') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('View Published Articles'), ['controller' => 'Article', 'action' => 'searchByStatus', 'published']) ?>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'Article' && $this->request->params['action'] == 'searchByStatus' && $this->request->params['pass'][0] == 'draft') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('View Draft Articles'), ['controller' => 'Article', 'action' => 'searchByStatus', 'draft']) ?>
                    </li>
                </ul>
            </li>
            <li <?php if($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'index') {echo 'class="current"';} ?>>
                <?= $this->Html->link(__('Users'), ['controller'=>'Users', 'action' => 'index']) ?>
            </li>
            <li>
                <ul class="side-nav sub-menu">
                    <li <?php if($this->request->params['controller'] == 'Users' && $this->request->params['action'] == 'add') {echo 'class="current"';} ?>>
                        <?= $this->Html->link(__('Add User'), ['controller'=>'Users', 'action' => 'add']) ?>
                    </li>
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
