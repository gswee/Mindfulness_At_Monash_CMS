<header class="masthead" id="banner">
  <div class="overlay">
      <?= 
    $this->Html->image('for_students.jpg', ['class' => 'img-responsive'], ['alt' => 'A student hard at work on the bed.']); ?>
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