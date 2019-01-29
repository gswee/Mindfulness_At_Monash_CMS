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
        <p>Fields marked with <b style="color:red">*</b> are compulsory.</p>
        <?= $this->Form->control(
                'title',
                ['label'=>'Title<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]
        ); ?>
        <?= $this->Form->control(
                'description',
                ['label'=>'Description<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]
        );?>
        <br>
        <?= $this->Form->control(
                'body',
                ['label'=>'Body<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]
        ); ?>
        <br>
        <?= $this->Form->control(
                'category_id',
                ['label'=>'Category<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false],
                ['options' => $categories, 'empty' => false]
        );?>

    </fieldset>
    <br>
    <?= $this->Form->button(__('Save As Draft'), ['id'=>'save']) ?>
    <?= $this->Form->end() ?>
</div>


