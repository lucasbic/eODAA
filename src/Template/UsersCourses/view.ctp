<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCourse $usersCourse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Course'), ['action' => 'edit', $usersCourse->id_users]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Course'), ['action' => 'delete', $usersCourse->id_users], ['confirm' => __('Are you sure you want to delete # {0}?', $usersCourse->id_users)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Course'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersCourses view large-9 medium-8 columns content">
    <h3><?= h($usersCourse->id_users) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Users') ?></th>
            <td><?= $this->Number->format($usersCourse->id_users) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Courses') ?></th>
            <td><?= $this->Number->format($usersCourse->id_courses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rel Type') ?></th>
            <td><?= $this->Number->format($usersCourse->rel_type) ?></td>
        </tr>
    </table>
</div>
