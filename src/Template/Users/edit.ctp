<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
use Cake\Auth\DefaultPasswordHasher;

?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user, ['onsubmit'=>"document.getElementById('save').disabled = true; return true;"] ) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <p>Fields marked with <b style="color:red">*</b> are compulsory.</p>
        <?php
            echo $this->Form->control('username',
                ['label'=>'Username<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);
            echo $this->Form->control('email',
                ['label'=>'Email<span style="font-weight:bold;color:red;"> *</span>', 'escape'=>false]);
            echo $this->Html->link('Reset Password', ['controller'=>'users', 'action'=>'password'],['class'=>'btn btn-warning'])
        ?>
        <br>
        <br>


    </fieldset>
    <?= $this->Form->button(__('Save'), ['id'=>'save']) ?>
    <?= $this->Form->end() ?>
</div>
