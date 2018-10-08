<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RelType[]|\Cake\Collection\CollectionInterface $relTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rel Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users Courses'), ['controller' => 'UsersCourses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Course'), ['controller' => 'UsersCourses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relTypes index large-9 medium-8 columns content">
    <h3><?= __('Rel Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relTypes as $relType): ?>
            <tr>
                <td><?= $this->Number->format($relType->id) ?></td>
                <td><?= h($relType->name) ?></td>
                <td><?= h($relType->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $relType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
