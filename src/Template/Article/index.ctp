<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $article
 */
?>


<div class="article index large-9 medium-8 columns content">
    <h3><?= __('Article') ?></h3>    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category name') ?></th>
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
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
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
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class'=>"btn btn-outline-primary"]) ?>
        </div>
    </div>
    <br> 
    <?= $this->element('admin/sortBarArticle') ?>
</div>

