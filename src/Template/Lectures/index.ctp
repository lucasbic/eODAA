<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lecture[]|\Cake\Collection\CollectionInterface $lectures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lecture'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lectures index large-9 medium-8 columns content">
    <h3><?= __('Lectures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lectures as $lecture): ?>
            <tr>
                <td><?= $this->Number->format($lecture->id) ?></td>
                <td><?= h($lecture->name) ?></td>
                <td><?= $lecture->has('course') ? $this->Html->link($lecture->course->name, ['controller' => 'Courses', 'action' => 'view', $lecture->course->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lecture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lecture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lecture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lecture->id)]) ?>
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
