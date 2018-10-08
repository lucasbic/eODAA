<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lecture $lecture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lectures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lectures form large-9 medium-8 columns content">
    <?= $this->Form->create($lecture) ?>
    <fieldset>
        <legend><?= __('Add Lecture') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('course_id', ['options' => $courses]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
