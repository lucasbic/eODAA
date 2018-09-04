<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersEducationalInstitution $usersEducationalInstitution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Educational Institution'), ['action' => 'edit', $usersEducationalInstitution->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Educational Institution'), ['action' => 'delete', $usersEducationalInstitution->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersEducationalInstitution->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Educational Institutions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Educational Institution'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersEducationalInstitutions view large-9 medium-8 columns content">
    <h3><?= h($usersEducationalInstitution->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersEducationalInstitution->has('user') ? $this->Html->link($usersEducationalInstitution->user->name, ['controller' => 'Users', 'action' => 'view', $usersEducationalInstitution->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Educational Institution') ?></th>
            <td><?= $usersEducationalInstitution->has('educational_institution') ? $this->Html->link($usersEducationalInstitution->educational_institution->name, ['controller' => 'EducationalInstitutions', 'action' => 'view', $usersEducationalInstitution->educational_institution->id]) : '' ?></td>
        </tr>
    </table>
</div>
