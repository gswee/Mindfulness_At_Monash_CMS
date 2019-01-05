<h1>Mindfulness at Monash Admin</h1>
<?= $this->Form->create(null,['onsubmit'=>"document.getElementById('login').disabled = true; return true;"]) ?>
<?= $this->Form->control('username') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login',['id'=>'login']) ?>
<?= $this->Form->end() ?>