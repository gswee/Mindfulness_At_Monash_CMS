<div style="padding-left:20px">
    <h1> Admin Home </h1>
    <br>
    
    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <?= $this->Html->link(__('Edit Home Page'), ['controller' => 'Settings', 'action' => 'edit', '1'], ['class'=>"btn btn-outline-primary", 'id'=>'bigbutton']) ?>
    </div>
    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <?= $this->Html->link(__('Edit "For Student" Page'), ['controller' => 'Article', 'action' => 'edit', '1'], ['class'=>"btn btn-outline-primary", 'id'=>'bigbutton']) ?>
    </div>
    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <?= $this->Html->link(__('Edit "For Educators" Page'), ['controller' => 'Article', 'action' => 'edit', '2'], ['class'=>"btn btn-outline-primary", 'id'=>'bigbutton']) ?>
    </div>
    <br>
    <br>

    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <?= $this->Html->link(__('View All Articles'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'title']], ['class'=>"btn btn-outline-primary"]) ?>
        <?= $this->Html->link(__('By Student'), ['controller' => 'Category', 'action' => 'view', '1', '?' => ['direction'=>'asc', 'sort'=>'category+name']],['class'=>"btn btn-outline-primary"]) ?>
        <?= $this->Html->link(__('By Educator'), ['controller' => 'Category', 'action' => 'view', '2', '?' => ['direction'=>'asc', 'sort'=>'category+name']],['class'=>"btn btn-outline-primary"]) ?>
    </div>
    <br>
    <br>

    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <?= $this->Html->link(__('Add New Article'), ['controller' => 'Article', 'action' => 'add'], ['class'=>"btn btn-outline-primary"]) ?>
    </div>
    <br>
    <br>

    <h2>Recent Articles</h2>

</div>