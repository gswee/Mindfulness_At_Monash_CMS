<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>

<!-- Page Sidebar -->
<?= $this->element('article/article-sidebar') ?>

<!-- Article Page -->
<div class="container" id="article">
    
<!-- Page Header -->
<?php echo $this->element('article\article-header') ?>
    
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
    <div class="row">
        <?php echo $this->element('article\article-body') ?>
    </div>
    
    <!-- To be added if custom 'Related Articles' list creation is implemented
    <h2>More Articles</h2>
    <?php 
    foreach ($articles as $article) { 
        echo $this->element('article\article-more', ['article'=>$article]); 
    }
    ?>
    -->
    
    <?php echo $this->element('footer') ?>
    
</div>
