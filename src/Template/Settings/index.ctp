<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting[]|\Cake\Collection\CollectionInterface $settings
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Setting'), ['action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="settings index large-9 medium-8 columns content">
    <h3><?= __('Edit Pages') ?></h3>
    <!--<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('settingsKey') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($settings as $setting): ?>
            <tr>
                <td><?= $this->Number->format($setting->id) ?></td>
                <td><?= h($setting->settingsKey) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $setting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $setting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setting->id)]) ?>
                </td>
            </tr>
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
    </div>-->
    <div class="card-deck">
        <div class="card">
            <?=$this->Html->image('thumbnail.png', ['class'=>"card-img-top", 'alt'=>"Card image cap"])?>
            <div class="card-body">
                <h5 class="card-title">Home Page</h5>
                <p class="card-text">Edit the welcome masthead and the contact information.</p>
                <?= $this->Html->link(__("Edit Home Page"), ['action' => 'edit', 1], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
        <div class="card">
            <?=$this->Html->image('thumbnail2.png', ['class'=>"card-img-top", 'alt'=>"Card image cap"])?>
            <div class="card-body">
                <h5 class="card-title">For Students Article Index</h5>
                <p class="card-text">Edit the title masthead and the introduction.</p>
                <?= $this->Html->link(__("Edit For Students Page"), ['controller'=>'Article','action' => 'edit', 1], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
        <div class="card">
            <?=$this->Html->image('thumbnail3.png', ['class'=>"card-img-top", 'alt'=>"Card image cap"])?>
            <div class="card-body">
                <h5 class="card-title">For Educators Article Index</h5>
                <p class="card-text">Edit the title masthead and the introduction.</p>
                <?= $this->Html->link(__("Edit For Educators Page"), ['controller'=>'Article','action' => 'edit', 2], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    </div>



</div>
