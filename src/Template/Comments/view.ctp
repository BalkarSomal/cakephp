<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comments view large-9 medium-8 columns content">
    <h3><?= h($comment->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('ID') ?></th>
            <td><?= $this->Number->format($comment->ID) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($comment->userID) ?></td>
        </tr>
        <tr>
            <th><?= __('ArticleID') ?></th>
            <td><?= $this->Number->format($comment->articleID) ?></td>
        </tr>
        <tr>
            <th><?= __('Approved') ?></th>
            <td><?= $comment->Approved ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($comment->body)); ?>
    </div>
</div>
