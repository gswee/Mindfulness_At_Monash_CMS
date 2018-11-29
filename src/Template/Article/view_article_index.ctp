<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[] $articles
 * @var \App\Model\Entity\Article\category_id $category_id
 */
?>

<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Article'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?> </li>
    </ul>
</nav>
-->
<!-- Page Sidebar -->
<?= $this->element('article/article-sidebar') ?>

<!-- Article Page -->
<div class="container" id="article">
    
<!-- Page Header -->
<header class="masthead" id="banner">
    <div class="overlay">
          <?= $this->Html->image('for_students.jpg', ['class' => 'img-responsive'], ['alt' => 'A student hard at work on the bed.']); ?>
    </div>
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
            <h1><?= h($article->title) ?></h1>
            <?php
                //if ($article->article->)
            ?>  
        </div>
    </div>
</header>
    <!--<h3><?= h($article->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($article->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $article->has('category') ? $this->Html->link($article->category->id, ['controller' => 'Category', 'action' => 'view', $article->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr>
    </table>-->
    
    <!-- Page Body -->
    <?php echo $this->element('article\article-body') ?>
    <div class="col-lg-8 col-md-10 mx-auto">
        <br>
        <h2>More Articles</h2>
        <?php 
        foreach ($articles as $article) { 
            if ($article->id == 1 or $article->id == 2 or $article->status != 'published'){

            }
            else {
                if ($article->category_id == $category_id){
                    echo $this->Html->link(h($article->title), ['controller'=>'article', 'action'=>'view', $article->id]); echo "<br>";
                    echo $this->Html->link(h($article->description), ['controller'=>'article', 'action'=>'view', $article->id]);echo  "<br>";
                    echo "<br>";
                }
            }
        }
        ?>
    </div>
    
    <!-- Page Footer -->
    <?php echo $this->element('footer') ?>
    
</div>
