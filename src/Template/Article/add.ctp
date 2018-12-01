<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Article'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
    </ul>
</nav>
-->
<div class="article form large-9 medium-8 columns content">
    <?= $this->Form->create($article, ['novalidate'=>true, 'onsubmit'=>"button.disabled = true; return true;"]) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
echo "<br>";
            echo $this->Form->control('body');
echo "<br>";
            echo $this->Form->control('category_id', ['options' => $category, 'empty' => false]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Submit'), ['name'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>


