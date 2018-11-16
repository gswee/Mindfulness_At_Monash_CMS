<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
            <?= $this->Html->link('Mindfulness At Monash', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'navbar-brand']) ?>
            <?= $this->Html->link('Contact Us', ['controller' => 'Pages', 'action' => 'index', "#" => "contact_us"], ['class'=>'nav-link']) ?>
      </div>
    </nav>

    <!-- Bootstrap core JavaScript -->
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.bundle.min') ?>

    <!-- Custom scripts for this template -->
    <?= $this->Html->script('clean-blog.min') ?>
    