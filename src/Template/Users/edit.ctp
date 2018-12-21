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
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo "Reset Password";
            //echo $this->Form->control('password',['password'=>(new DefaultPasswordHasher)->hash('password')]);
            // Admin enters email

            // Email is checked with db

            // Enter new password
            //echo $this->Form->control();
            //Confirm new password

        ?>

    </fieldset>
    <?= $this->Form->button(__('Save'), ['id'=>'save']) ?>
    <?= $this->Form->end() ?>
</div>
