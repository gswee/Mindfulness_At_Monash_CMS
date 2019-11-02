<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>

<!-- Page Header -->
<header class="masthead" id="banner">
    <div class="overlay">
        <?php
        if ($article->category_id == 1) {
            echo $this->Html->image('https://i.imgur.com/hI6nuXo.jpg', ['class' => 'img-responsive'], ['alt' => 'A student hard at work on the bed.']);
        } else if ($article->category_id == 2) {
            echo $this->Html->image('https://i.imgur.com/Gpm44o1.jpg', ['class' => 'img-responsive'], ['alt' => 'Writing notes on a wooden desk.']);
        } else if ($article->category_id == 3) {
            echo $this->Html->image('https://i.imgur.com/BsQFe27.jpg', ['class' => 'img-responsive'], ['alt' => 'Person meditating in front of sunset.']);
        }
        
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?= h($article->title) ?></h1>
                    <span class="subheading"> Posted under
                    <?php
                        if ($article->category_id == 3) {
                            echo  $this->Html->link('Student', ['controller' => 'Article', 'action' => 'viewArticleIndex', 1, '#'=>'moreArticles'], ['id' => 'category'])." and ". $this->Html->link('Educator', ['controller' => 'Article', 'action' => 'viewArticleIndex', 2, '#'=>'moreArticles'], ['id' => 'category']).", "; 
                            echo " ".h($article->created);
                        }
                        
                        else {
                            echo $article->has('category') ? $this->Html->link($article->category->category, ['controller' => 'Article', 'action' => 'viewArticleIndex', $article->category->id, '#'=>'moreArticles'], ['id' => 'category']) : ''; 
                            echo h($article->created);
                        }
                    ?>
                    </span>
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
    <?= $this->Html->link(__('< Back'), $this->request->referer(), ['class'=>'btn btn-primary']) ?>
    
</div>
