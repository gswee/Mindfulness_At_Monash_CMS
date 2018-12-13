<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting[]|\Cake\Collection\CollectionInterface $settings
 */
?>
<div class="settings index large-9 medium-8 columns content">
    <h3><?= __('Edit Pages') ?></h3>

    <div class="card-deck">
        <div class="card">
            <?=$this->Html->image('thumbnail.png', ['class'=>"card-img-top", 'alt'=>"Card image cap"])?>
            <div class="card-body">
                <h5 class="card-title">Home Page</h5>
                <p class="card-text">Edit the welcome masthead and the contact information.</p>
                <?= $this->Html->link(__("Edit Home Page"), ['action' => 'edit', 1], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
        <div class="card">
            <?=$this->Html->image('thumbnail2.png', ['class'=>"card-img-top", 'alt'=>"Card image cap"])?>
            <div class="card-body">
                <h5 class="card-title">For Students Article Index</h5>
                <p class="card-text">Edit the title masthead and the introduction.</p>
                <?= $this->Html->link(__("Edit For Students Page"), ['controller'=>'Article','action' => 'edit', 1], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
        <div class="card">
            <?=$this->Html->image('thumbnail3.png', ['class'=>"card-img-top", 'alt'=>"Card image cap"])?>
            <div class="card-body">
                <h5 class="card-title">For Educators Article Index</h5>
                <p class="card-text">Edit the title masthead and the introduction.</p>
                <?= $this->Html->link(__("Edit For Educators Page"), ['controller'=>'Article','action' => 'edit', 2], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>
