<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>
<div class="settings form large-9 medium-8 columns content">
    <?php foreach($settings as $setting) { ?>
    <?= $this->Form->create($setting) ?>
    <fieldset>
        <legend><?= __($setting->settingsKey) ?></legend>
        <?php
            echo $this->Form->control('settingsValue');

        ?>
    </fieldset>
    <?php } ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
