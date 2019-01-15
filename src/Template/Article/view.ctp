<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>

<!-- Page Header -->
<header class="masthead" id="banner">
    <div class="overlay">
        <?= $this->Html->image('for_students.jpg', ['class' => 'img-responsive'], ['alt' => 'A student hard at work on the bed.']); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?= h($article->title) ?></h1>
                    <span class="subheading">Posted under <?= $article->has('category') ? $this->Html->link($article->category->category, ['controller' => 'Category', 'action' => 'viewArticleIndex', $article->category->id], ['id' => 'category']) : '' ?>, <?= h($article->created) ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Article Page -->
<div class="container clearfix" id="article">

    <!-- Page Body -->
    <div class="overlay"></div>
    <div class="container"><!-- Navigation -->
        <div class="row">

            <div class="site-heading">
                <span class="subheading" id="desc"><?= $this->Text->autoParagraph($article->description); ?></span>
                <br>
                <p><?= $this->Text->autoParagraph($article->body); ?></p>
                <div class="dates">
                    <p><?= __('Originally Posted: ') ?><?= h($article->created) ?></p>
                    <?php
                    // displays last date/time article was modified
                    if (h($article->modified != null))
                    { ?>
                        <p><?= __('Last Modified: ')?><?php h($article->modified) ?></p>
                        <?php
                    } ?>
                </div>
            </div>

        </div>
    </div>

    
</div>
