<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lecture $lecture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lecture'), ['action' => 'edit', $lecture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lecture'), ['action' => 'delete', $lecture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lecture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lectures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lecture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lectures view large-9 medium-8 columns content">
    <h3><?= h($lecture->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($lecture->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $lecture->has('course') ? $this->Html->link($lecture->course->name, ['controller' => 'Courses', 'action' => 'view', $lecture->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($lecture->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lecture->id) ?></td>
        </tr>
    </table>
</div>
