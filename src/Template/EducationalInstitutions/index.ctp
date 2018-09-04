<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EducationalInstitution[]|\Cake\Collection\CollectionInterface $educationalInstitutions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="educationalInstitutions index large-9 medium-8 columns content">
    <h3><?= __('Educational Institutions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($educationalInstitutions as $educationalInstitution): ?>
            <tr>
                <td><?= $this->Number->format($educationalInstitution->id) ?></td>
                <td><?= $educationalInstitution->has('address') ? $this->Html->link($educationalInstitution->address->id, ['controller' => 'Addresses', 'action' => 'view', $educationalInstitution->address->id]) : '' ?></td>
                <td><?= h($educationalInstitution->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $educationalInstitution->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $educationalInstitution->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $educationalInstitution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationalInstitution->id)]) ?>
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
