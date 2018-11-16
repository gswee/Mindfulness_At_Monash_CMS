<?php
/**
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $article
 */
?>
<div>
    <nav>
        <ul>
            <?php foreach ($article as $article): ?>
            <li>
                <?php echo $this->Html->link($article->fetch('title'), array('controller' => 'Article', 'action' => 'view') ); ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>