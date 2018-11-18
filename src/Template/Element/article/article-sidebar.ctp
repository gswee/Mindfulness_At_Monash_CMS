<div class="sidebar-wrapper">
    <nav id="sidebar-nav">
        <ul id="sidebar-list">
            <li>
                <!-- To link when static Students page is created
                <?= $this->Html->link('Students', ['controller' => 'Pages', 'action' => 'display', 'students'], ['class'=>'nav-link']) ?>
                -->
                <!-- Students Top bar link -->
                <?= $this->Html->link('Students', ['controller' => 'Article', 'action' => 'view', '1'], ['class'=>'nav-link', ]) ?>
            </li>
            <li>
                <!-- To link when static Educators page is created
                <?= $this->Html->link('Educators', ['controller' => 'Pages', 'action' => 'display', 'educators'], ['class'=>'nav-link']) ?>
                -->
                <!-- Educators Top bar link -->
                <?= $this->Html->link('Educators', ['controller' => 'Article', 'action' => 'view', '2'], ['class'=>'nav-link']) ?>
            </li>
            <li>
                <!-- Contact Us Top bar link -->
                <?= $this->Html->link('Contact Us', ['controller' => 'Pages', 'action' => 'index', "#" => "contact_us"], ['class'=>'nav-link']) ?>
            </li>
        </ul>
    </nav>
</div>
