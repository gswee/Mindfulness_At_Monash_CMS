<div class="btn-toolbar">
        <table>
            <td>
                <h4>Sort By: </h4>
            </td>
            <td>
                <div class="btn-group mr-2">
                    <?= $this->Html->link(__('Title'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'title']], ['class'=>"btn btn-outline-primary"]) ?>
                </div>
                <div class="btn-group mr-2">
                    <?= $this->Html->link(__('Date Created'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'created']], ['class'=>"btn btn-outline-primary"]) ?>
                    <?= $this->Html->link(__('Date Modified'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'modified']], ['class'=>"btn btn-outline-primary"]) ?>
                </div>
                <div class="btn-group mr-2">
                    <?= $this->Html->link(__('Category Name'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'category+name']],['class'=>"btn btn-outline-primary"]) ?>
                </div>
            </td>
        </table>
    </div>