<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $article
 */
?>

<div class="category view large-9 medium-8 columns content">
<h2><?= __('Articles') ?></h2>
    <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class'=>"btn btn-outline-primary"]) ?>
    <br>
    <br>
<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('title') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col"><?= $this->Paginator->sort('category name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($article as $article): 
            if ($article->id == '1' or $article->id == '2'): 
            else: ?>

        <tr>
            <td><?= $this->Number->format($article->id) ?></td>
            <td><?= h($article->title) ?></td>
            <td><?= h($article->created) ?></td>
            <td><?= h($article->modified) ?></td>
            <td><?= $article->has('category') ? $this->Html->link($article->category->category, ['controller' => 'Category', 'action' => 'view', $article->category->id]) : '' ?></td>
            <td><?= h($article->status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']) ?>

                <?php if ($article->status == 'published')
                {
                    echo $this->Html->link(__('Un-Publish '), ['action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-publish article "'. $article->title).'"?']);
                }
                elseif ($article->status != 'archived')
                {

                    echo " ".$this->Html->link(__('Publish '), ['action' => 'publish', $article->id], ['class'=>'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to publish article "'. $article->title).'"?']);
                    echo " ".$this->Html->link(__('Archive'), ['action' => 'archive', $article->id], ['class'=>'btn btn-info btn-sm', 'confirm' => __('Are you sure you want to archive article "'. $article->title).'"?']);
                }
                else 
                {
                    echo $this->Html->link(__('Un-Archive '), ['action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-archive article "'. $article->title).'"?']);
                    echo " ".$this->Form->postLink('Delete', ['action' => 'delete', $article->id], ['class'=>'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete article "'. $article->title).'"?']);
                }
                ?> 
            </td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>
<div class="btn-toolbar">
    <div class="btn-group mr-2">

    </div>
</div>
<br>
    <div class="btn-toolbar">
        <table>
            <td>
                <h4>Sort By: </h4>
            </td>
            <td>
                <div class="btn-group mr-2">
                    <?= $this->Paginator->sort('title', 'Title', ['id' => 'p2'] ); ?>
                    <!--<?= $this->Html->link(__('Title'), ['controller' => 'Article', 'action' => 'index', '?' => ['direction'=>'asc', 'sort'=>'title']], ['class'=>"btn btn-outline-primary"]) ?>-->
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
    <!--<?= $this->element('admin/sortBarArticle') ?>-->
</div>

<script>
    document.getElementById("p2").style.color = "blue";
</script>


