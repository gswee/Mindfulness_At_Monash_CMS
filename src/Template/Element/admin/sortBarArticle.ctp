<div class="btn-toolbar">
        <table>
            <td>
                <h4>Sort By: </h4>
            </td>
            <td>
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Title'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'title']]) ?></button>
                </div>
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Date Created'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'created']]) ?></button>
                    <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Date Modified'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'modified']]) ?></button>
                </div>
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Category Name'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'category+name']]) ?></button>
                </div>
            </td>
        </table>
    </div>