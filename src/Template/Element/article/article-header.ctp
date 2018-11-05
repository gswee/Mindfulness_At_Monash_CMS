<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1><?= h($article->title) ?></h1>
            <!-- We can display all related articles in the Category view pages -->
            <!-- We need to display 'student' not '1' -->
          <span class="subheading">Posted under <?= $article->has('category') ? $this->Html->link($article->category->category, ['controller' => 'Category', 'action' => 'view', $article->category->id]) : '' ?>, <?= h($article->created) ?></span>
        </div>
      </div>
    </div>
  </div>
</header>