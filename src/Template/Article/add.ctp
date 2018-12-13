<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="article form large-9 medium-8 columns content">
    <?= $this->Form->create($article, ['novalidate'=>true, 'onsubmit'=>"document.getElementById('save').disabled = true; return true;"]) ?>
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
    <?= $this->Form->button(__('Save As Draft'), ['id'=>'save']) ?>
    <?= $this->Form->end() ?>
</div>


