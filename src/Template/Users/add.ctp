<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user, ['onsubmit'=>"document.getElementById('save').disabled = true; return true;"]) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <p>Fields marked with <b style="color:red">*</b> are compulsory.</p>
        <?php
            echo $this->Form->control(
                    'username',
                ['label'=>'Username<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);
            echo $this->Form->control(
                    'email',
                ['label'=>'Email<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);
            echo $this->Form->control(
                'password',
                ['label'=>'Password<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);
            echo $this->Form->control(
                'confirm_password', ['type' => 'password', 'required' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Add User'), ['id'=>'save']) ?>
    <?= $this->Form->end() ?>
</div>
