<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <!-- Change if Home Page becomes dynamic -->
          <?= $this->Html->link('Mindfulness At Monash', ['controller' => 'Pages', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- Students Top bar link -->
                <?= $this->Html->link('<i class="fas fa-pencil-alt"></i>      '.'Students', ['controller' => 'Article', 'action' => 'viewArticleIndex', '1'], ['class'=>'nav-link','escape'=>false]) ?>
            </li>
            <li class="nav-item">
                <!-- Educators Top bar link -->
                <?= $this->Html->link('<i class="fas fa-book"></i>      '.'Educators', ['controller' => 'Article', 'action' => 'viewArticleIndex', '2'], ['class'=>'nav-link', 'escape'=>false]) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('<i class="fas fa-phone"></i>      '.'Contact Us', ['controller' => 'Pages', 'action' => 'index', "#" => "contact_us"], ['class'=>'nav-link', 'escape'=>false]) ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Bootstrap core JavaScript -->
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.bundle.min') ?>

    <!-- Custom scripts for this template -->
    <?= $this->Html->script('clean-blog.min') ?>
    