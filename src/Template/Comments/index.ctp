<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comments index large-9 medium-8 columns content">
    <h3><?= __('Comments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('ID') ?></th>
                <th><?= $this->Paginator->sort('Approved') ?></th>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th><?= $this->Paginator->sort('articleID') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->ID) ?></td>
                <td><?= h($comment->Approved) ?></td>
                <td><?= $this->Number->format($comment->userID) ?></td>
                <td><?= $this->Number->format($comment->articleID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comment->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
