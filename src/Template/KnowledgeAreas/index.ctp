<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KnowledgeArea[]|\Cake\Collection\CollectionInterface $knowledgeAreas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Knowledge Area'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="knowledgeAreas index large-9 medium-8 columns content">
    <h3><?= __('Knowledge Areas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($knowledgeAreas as $knowledgeArea): ?>
            <tr>
                <td><?= $this->Number->format($knowledgeArea->id) ?></td>
                <td><?= h($knowledgeArea->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $knowledgeArea->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $knowledgeArea->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $knowledgeArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $knowledgeArea->id)]) ?>
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
