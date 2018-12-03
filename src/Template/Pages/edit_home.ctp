<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>

<div class="settings form large-9 medium-8 columns content">
    <legend><?= __('Edit Setting') ?></legend>
    <?php foreach($homeElements as $setting) { ?>
    <?= $this->Form->create($setting) ?>
        <fieldset>
            
            <?php
                echo $this->Form->control('setting');
            ?>
        </fieldset>
    <?php } ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
