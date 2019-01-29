<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="article form large-9 medium-8 columns content">
    <?= $this->Form->create($article, ['novalidate'=>true, 'onsubmit'=>"getElementById('save').disabled = true; return true;"]) ?>
    <fieldset>
        <legend><?= __('Edit Article') ?></legend>
        <?php
            echo $this->Form->control('title',
                ['label'=>'Title<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);
            echo $this->Form->control('description',
                ['label'=>'Description<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);

            echo $this->Form->control('body',
                ['label'=>'Body<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);
echo "<br>";
            if ($article->id != '1' or '2') {
                echo $this->Form->control('category_id', ['options' => $categories, 'empty' => false]);

            }
        //echo $article->id;
        ?>
    </fieldset>
    <br>
    <?php if ($article->status == 'published' or $article->status == 'archived') { ?>
        <?= $this->Form->button(__('Save'),['id'=>'save']) ?>
    <?php } else if ($article->status == 'draft') { ?>
        <?= $this->Form->button(__('Save Draft'),['id'=>'save']) ?>
    <?php } ?>
    <?= $this->Form->end() ?>
</div>

