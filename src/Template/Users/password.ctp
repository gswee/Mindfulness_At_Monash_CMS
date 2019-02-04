<?php $this->assign('title', 'Request Password Reset'); ?><div class="users content">
	<h3><?php echo __('Forgot Password'); ?></h3>
	<?php
    	echo $this->Form->create(null,['onsubmit'=>"document.getElementById('request').disabled = true; return true;"]);
        echo $this->Form->input('email', ['autofocus' => true, 'label' => 'Email address', 'required' => true]);
		echo $this->Form->button('Request reset email', ['id'=>'request']);
    	echo $this->Form->end();
	?>
</div>