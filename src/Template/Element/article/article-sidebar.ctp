<div class="sidebar-wrapper">
    <nav id="sidebar-nav">
        <ul id="sidebar-list">
            <div>
                <!-- Students Top bar link -->
                <!-- Fix later (cannot close)
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="expand">
                    <i class="fas fa-bars"></i>
                </button> 
                -->
                <?= $this->Html->link('Students', ['controller' => 'Article', 'action' => 'viewArticleIndex', '1'], ['class'=>'nav-link', ]) ?>
                <!--
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">Example</li>
                        <li class="nav-item">Example</li>
                    </ul>
                </div>
-->
            </div>
            <li>
                <!-- Educators Top bar link -->
                <?= $this->Html->link('Educators', ['controller' => 'Article', 'action' => 'viewArticleIndex', '2'], ['class'=>'nav-link']) ?>
            </li>
            <li>
                <!-- Contact Us Top bar link -->
                <?= $this->Html->link('Contact Us', ['controller' => 'Pages', 'action' => 'index', "#" => "contact_us"], ['class'=>'nav-link']) ?>
            </li>
        </ul>
    </nav>
</div>
<!-- Bootstrap core JavaScript -->
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->script('bootstrap.bundle.min') ?>

    <!-- Custom scripts for this template -->
    <?= $this->Html->script('clean-blog.min') ?>