<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCourse $usersCourse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rel Types'), ['controller' => 'RelTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rel Type'), ['controller' => 'RelTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersCourses form large-9 medium-8 columns content">
    <?= $this->Form->create($usersCourse) ?>
    <fieldset>
        <legend><?= __('Add Users Course') ?></legend>
        <?php
            echo $this->Form->control('rel_type_id', ['options' => $relTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
