<div style="padding-left:20px">
    <h1> <i class="fas fa-home"></i> Admin Home </h1>
    <br>

    <div class="btn-group btn-group-lg" role="group">
        <?= $this->Html->link(''.'Edit Home Page', ['controller' => 'Settings', 'action' => 'edit'], ['class'=>"btn btn-outline-primary", 'id'=>'bigbutton', 'escape'=>false]) ?>
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
        <?= $this->Html->link(__('By Student'), ['controller' => 'Article', 'action' => 'searchByCategory', '1'],['class'=>"btn btn-outline-primary"]) ?>
        <?= $this->Html->link(__('By Educator'), ['controller' => 'Article', 'action' => 'searchByCategory', '2'],['class'=>"btn btn-outline-primary"]) ?>
    </div>
    <br>
    <br>

    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <?= $this->Html->link(__('Add New Article'), ['controller' => 'Article', 'action' => 'add'], ['class'=>"btn btn-outline-primary"]) ?>
    </div>
    <br>
    <br>

    <h2>Recent Articles</h2>
    <div class="row">
        <?php foreach ($recentArticles as $article): ?>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="header-block">
                            <div class="card-title">
                                <?= $this->Html->link(h($article['title']),['controller'=>'article','action'=>'view', $article->id]) ?>
                            </div>
                            <div class="card-text">
                                <?= $this->Html->link(h($article['description']),['controller'=>'article','action'=>'view', $article->id],['escape'=>false]) ?>
                            </div>
                            <br>
                            <div class="card-text _date">Last Edit: <?=h($article['modified']) ?></div>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <?= h($this->Text->truncate(strip_tags($article['body']), 50, ['exact' => false])) ?>
                </div>
                <div class="card-footer">
                    <?= $this->Html->link(__('View'), ['controller'=>'article','action' => 'view', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller'=>'article','action' => 'edit', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']) ?>
                    <?php if ($article->status == 'published')
                    {
                        echo $this->Html->link(__('Un-Publish '), ['controller'=>'article','action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-publish article "'. $article->title).'"?']);
                    }
                    elseif ($article->status != 'archived')
                    {

                        echo " ".$this->Html->link(__('Publish '), ['controller'=>'article','action' => 'publish', $article->id], ['class'=>'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to publish article "'. $article->title).'"?']);
                        echo " ".$this->Html->link(__('Archive'), ['controller'=>'article','action' => 'archive', $article->id], ['class'=>'btn btn-info btn-sm', 'confirm' => __('Are you sure you want to archive article "'. $article->title).'"?']);
                    }
                    else
                    {
                        echo $this->Html->link(__('Un-Archive '), ['controller'=>'article','action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-archive article "'. $article->title).'"?']);
                        echo " ".$this->Form->postLink('Delete', ['controller'=>'article','action' => 'delete', $article->id], ['class'=>'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete article "'. $article->title).'"?']);
                    }
                    ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>