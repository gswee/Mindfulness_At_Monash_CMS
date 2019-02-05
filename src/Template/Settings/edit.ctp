<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */


?>
<div class="settings form large-9 medium-8 columns content">
    <h1><?= __('Edit Home Page') ?></h1>
    <?php foreach($settings as $setting) { ?>

    <?= $this->Form->create($setting, ['onsubmit'=>"document.getElementById('save').disabled = true; return true;"]) ?>
    <fieldset>
        <legend><?= __($setting->settingsKey) ?></legend>
        <?php
            echo $this->Form->control('settingsValue',['label' => false, 'name' => $setting->id, 'id'=>"input".$setting->id]);
            if(strpos($setting->settingsKey, 'Masthead') or strpos($setting->settingsKey, 'Photo')) { ?>
                <br>
                <a class="btn btn-outline-primary btn-sm openImage" onclick="openImage(<?= $setting->id ?>)">View Image</a>
                <br>
                <br>
            <?php }
            echo "<br>";
        ?>
    </fieldset>

        <!-- Participant view -->


    <?php } ?>
    <?= $this->Form->button(__('Submit'), ['id'=>'save']) ?>
    <?= $this->Form->end() ?>
</div>

<script>
    function openImage(id) {
        var url = document.getElementById('input'+id).value;
        window.open(url,'_blank');
    }
</script>