<?php $this->assign('title', 'Reset Password'); ?>
<div>
    <?php echo $this->Form->create($user) ?>
    <fieldset style="border:none">
        <legend><?php echo __('Reset Password') ?>
            <?php
            echo $this->Form->input('password', ['required' => true, 'autofocus' => true]); ?>

            <?php
            echo $this->Form->input('confirm_password', ['type' => 'password', 'required' => true]);
            ?>
    </fieldset>
    <?php echo $this->Form->button(__('Submit')); ?>
    <?php echo $this->Form->end(); ?>
</div>