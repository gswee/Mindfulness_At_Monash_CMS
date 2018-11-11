<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <!-- Change if Home Page becomes dynamic -->
          <?= $this->Html->link('Mindfulness At Monash', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'navbar-brand']) ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </nav>

    <!-- Bootstrap core JavaScript -->
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.bundle.min') ?>

    <!-- Custom scripts for this template -->
    <?= $this->Html->script('clean-blog.min') ?>
    