<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCourse $usersCourse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Course'), ['action' => 'edit', $usersCourse->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Course'), ['action' => 'delete', $usersCourse->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersCourse->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rel Types'), ['controller' => 'RelTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rel Type'), ['controller' => 'RelTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersCourses view large-9 medium-8 columns content">
    <h3><?= h($usersCourse->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersCourse->has('user') ? $this->Html->link($usersCourse->user->name, ['controller' => 'Users', 'action' => 'view', $usersCourse->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $usersCourse->has('course') ? $this->Html->link($usersCourse->course->name, ['controller' => 'Courses', 'action' => 'view', $usersCourse->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rel Type') ?></th>
            <td><?= $usersCourse->has('rel_type') ? $this->Html->link($usersCourse->rel_type->name, ['controller' => 'RelTypes', 'action' => 'view', $usersCourse->rel_type->id]) : '' ?></td>
        </tr>
    </table>
</div>
