<aside class="sidebar">
<div class="sidebar-container">
    <nav class="menu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- To link when static Students page is created
                <?= $this->Html->link('Students', ['controller' => 'Pages', 'action' => 'display', 'students'], ['class'=>'nav-link']) ?>
                -->
                <!-- Students Top bar link -->
                <?= $this->Html->link('Students', ['controller' => 'Article', 'action' => 'view', '1'], ['class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
                <!-- To link when static Educators page is created
                <?= $this->Html->link('Educators', ['controller' => 'Pages', 'action' => 'display', 'educators'], ['class'=>'nav-link']) ?>
                -->
                <!-- Educators Top bar link -->
                <?= $this->Html->link('Educators', ['controller' => 'Article', 'action' => 'view', '2'], ['class'=>'nav-link']) ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
        </ul>
    </nav>
</div>
</aside>