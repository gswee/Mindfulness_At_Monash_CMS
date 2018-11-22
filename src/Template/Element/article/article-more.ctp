<?php
/**
 * @var \App\Model\Entity\Article $article
 */
?>
<div>
    <a href="<?= $this->Url->build(['controller' => 'Article', 'action' => 'view', $article->slug]); ?>">
        <?= h($article->title) ?>
    </a>
</div>