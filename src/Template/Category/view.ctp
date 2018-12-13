<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>  

<div class="category view large-9 medium-8 columns content">
    <h3><?= h($category->category) ?> Articles</h3>
    <?= $this->Html->link(__('New Article'), ['controller'=>'article','action' => 'add'], ['class'=>"btn btn-outline-primary"]) ?>
    <br>
    <br>
    <div class="related">
        <?php if (!empty($category->article)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>

                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->article as $article):
                if ($article->id == '1' or $article->id == '2'):
                else: ?>
                <tr>
                <td><?= h($article->id) ?></td>
                <td><?= h($article->title) ?></td>

                <td><?= h($article->created) ?></td>
                <td><?= h($article->modified) ?></td>
                <td><?= h($article->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller'=>'article', 'action' => 'view', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']) ?>

                    <?php if ($article->status == 'published')
                    {
                        echo $this->Html->link(__('Un-Publish '), ['controller'=>'article','action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-publish article "'. $article->title).'"?']);
                    }
                    elseif ($article->status != 'archived')
                    {
                        echo $this->Html->link(__('Edit'), ['controller'=>'article', 'action' => 'edit', $article->id], ['class'=>'btn btn-outline-secondary btn-sm']);
                        echo " ".$this->Html->link(__('Publish '), ['controller'=>'article', 'action' => 'publish', $article->id], ['class'=>'btn btn-success btn-sm', 'confirm' => __('Are you sure you want to publish article "'. $article->title).'"?']);
                        echo " ".$this->Html->link(__('Archive'), ['controller'=>'article', 'action' => 'archive', $article->id], ['class'=>'btn btn-info btn-sm', 'confirm' => __('Are you sure you want to archive article "'. $article->title).'"?']);
                    }
                    else
                    {
                        echo $this->Html->link(__('Save As Draft '), ['controller'=>'article', 'action' => 'saveAsDraft', $article->id], ['class'=>'btn btn-warning btn-sm', 'confirm' => __('Are you sure you want to un-archive article "'. $article->title).'"?']);
                        echo " ".$this->Html->link(__('Delete'), ['controller'=>'article', 'action' => 'delete', $article->id], ['class'=>'btn btn-danger btn-sm', 'confirm' => __('Are you sure you want to delete article "'. $article->title).'"?']);
                    }
                    ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
        </table>
            <div class="btn-toolbar">
                <table>
                    <td>
                        <h4>Sort By: </h4>
                    </td>
                    <td>
                        <div class="btn-group mr-2">
                            <?= $this->Html->link(__('Title'), ['controller' => 'Category', 'action' => 'view', '?' => ['direction'=>'asc', 'sort'=>'title']], ['class'=>"btn btn-outline-primary"]) ?>
                        </div>
                        <div class="btn-group mr-2">
                            <?= $this->Html->link(__('Date Created'), ['controller' => 'Category', 'action' => 'view', '?' => ['direction'=>'asc', 'sort'=>'created']], ['class'=>"btn btn-outline-primary"]) ?>
                            <?= $this->Html->link(__('Date Modified'), ['controller' => 'Category', 'action' => 'view', '?' => ['direction'=>'asc', 'sort'=>'modified']], ['class'=>"btn btn-outline-primary"]) ?>
                        </div>
                        <div class="btn-group mr-2">
                            <?= $this->Html->link(__('Category Name'), ['controller' => 'Category', 'action' => 'view', '?' => ['direction'=>'asc', 'sort'=>'category+name']],['class'=>"btn btn-outline-primary"]) ?>
                        </div>
                    </td>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
