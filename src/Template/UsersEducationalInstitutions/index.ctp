<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersEducationalInstitution[]|\Cake\Collection\CollectionInterface $usersEducationalInstitutions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Educational Institution'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersEducationalInstitutions index large-9 medium-8 columns content">
    <h3><?= __('Users Educational Institutions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('educational_institution_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersEducationalInstitutions as $usersEducationalInstitution): ?>
            <tr>
                <td><?= $usersEducationalInstitution->has('user') ? $this->Html->link($usersEducationalInstitution->user->name, ['controller' => 'Users', 'action' => 'view', $usersEducationalInstitution->user->id]) : '' ?></td>
                <td><?= $usersEducationalInstitution->has('educational_institution') ? $this->Html->link($usersEducationalInstitution->educational_institution->name, ['controller' => 'EducationalInstitutions', 'action' => 'view', $usersEducationalInstitution->educational_institution->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersEducationalInstitution->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersEducationalInstitution->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersEducationalInstitution->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersEducationalInstitution->user_id)]) ?>
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
