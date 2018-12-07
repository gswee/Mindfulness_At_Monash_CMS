<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>  
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Article'), ['controller' => 'Article', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Article', 'action' => 'add']) ?> </li>
    </ul>
</nav>
-->
<div class="category view large-9 medium-8 columns content">
    <h3><?= h($category->category) ?> Articles</h3>
    <br>
    <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class'=>"btn btn-outline-primary"]) ?>
    <!--
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($category->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
    </table>
    -->
    <br>
    <br>
    <div class="related">
        <?php if (!empty($category->article)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->article as $article): ?>
            <tr>
                <td><?= h($article->id) ?></td>
                <td><?= h($article->title) ?></td>
                <td><?= h($article->description) ?></td>
                <td><?= h($article->created) ?></td>
                <td><?= h($article->modified) ?></td>
                <td><?= h($article->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']) ?>


                    <?php if ($article->status == 'published')
                    {
                        echo $this->Html->link(__('Un-Publish '), ['action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-publish article "'. $article->title).'"?']);
                    }
                    elseif ($article->status != 'archived')
                    {
                        echo $this->Html->link(__('Edit'), ['action' => 'edit', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']);
                        echo " ".$this->Html->link(__('Publish '), ['action' => 'publish', $article->id], ['class'=>'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to publish article "'. $article->title).'"?']);
                        echo " ".$this->Html->link(__('Archive'), ['action' => 'archive', $article->id], ['class'=>'btn btn-info btn-sm', 'confirm' => __('Are you sure you want to archive article "'. $article->title).'"?']);
                    }
                    else
                    {
                        echo $this->Html->link(__('Save As Draft '), ['action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-archive article "'. $article->title).'"?']);
                        echo " ".$this->Html->link(__('Delete'), ['action' => 'delete', $article->id], ['class'=>'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete article "'. $article->title).'"?']);
                    }
                    ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <?php endif; ?>
    </div>
</div>
