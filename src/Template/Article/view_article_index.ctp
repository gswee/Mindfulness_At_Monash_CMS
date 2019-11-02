<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[] $articles
 * @var \App\Model\Entity\Article[]\category_id $category_id
 */
?>

<!-- Page Sidebar -->

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

            </div>

        </div>
    </div>

    <br>
    <div id="moreArticles">
        <h2>More Articles</h2>
        <?php
        foreach ($articles as $article) {
            if ($article->id == 1 or $article->id == 2 or $article->status != 'published'){

            }
            else {
                if ($article->category_id == $category_id or $article->category_id == 3 ){
                    ?>

                    <a class="card" href="article/view/<?=$article->id?>">
                        <div class="card-body">
                            <div class="card-title"><?=$article->title ?></div>
                            <div class="card-text"><?=$article->description ?></div>
                            <div class="card-text _date">Posted: <?=$article->created ?></div>
                        </div>
                    </a>

                    <?php
                }
            }
        }
        ?>
    </div>

</div>
