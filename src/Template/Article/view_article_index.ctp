<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[] $articles
 * @var \App\Model\Entity\Article\category_id $category_id
 */
?>

<!-- Page Sidebar -->
<?= $this->element('article/article-sidebar') ?>

<!-- Article Page -->
<div class="container" id="article">
    
<!-- Page Header -->
<header class="masthead" id="banner">

    <div class="overlay">
        <?php if($category_id == 1) {
            echo $this->Html->image($articleIndexSettings['For Students Masthead'], ['class' => 'img-responsive'], ['alt' => 'For Students Masthead']);
        } else if($category_id == 2) {
            echo $this->Html->image($articleIndexSettings['For Educators Masthead'], ['class' => 'img-responsive'], ['alt' => 'For Educators Masthead']);
        }?>
    </div>
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
            <h1><?= h($article->title) ?></h1>
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
                    echo $this->Html->link($article->title . '<br>' . $article->description, ['controller'=>'article', 'action'=>'view', $article->id], ['escape' => false]); echo "<br>";
                    echo "<br>";
                    echo "<br>";
                }
            }
        }
        ?>
    </div>
    
    <!-- Page Footer -->
    <?php echo $this->element('footer') ?>
    
</div>
