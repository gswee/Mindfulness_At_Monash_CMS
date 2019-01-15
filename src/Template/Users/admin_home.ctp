<div style="padding-left:20px">
    <h1> <i class="fas fa-home"></i> Admin Home </h1>
    <br>

    <div class="btn-group btn-group-lg" role="group">
        <?= $this->Html->link(''.'Edit Home Page', ['controller' => 'Settings', 'action' => 'edit', '1'], ['class'=>"btn btn-outline-primary", 'id'=>'bigbutton', 'escape'=>false]) ?>
    </div>
    <div class="btn-group btn-group-lg" role="group">
        <?= $this->Html->link(__('Edit "For Student" Page'), ['controller' => 'Article', 'action' => 'edit', '1'], ['class'=>"btn btn-outline-primary", 'id'=>'bigbutton']) ?>
    </div>
    <div class="btn-group btn-group-lg" role="group">
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
<!--
    <h2>Recent Articles</h2>
    <div class="row">
        <?php foreach ($recentArticles as $article): ?>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title">
                                <?= h($article['title']) ?>
                            </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <?= h($this->Text->truncate(strip_tags($article['body']), 50, ['exact' => false])) ?>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    -->
</div>