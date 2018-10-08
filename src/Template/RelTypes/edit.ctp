<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RelType $relType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rel Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users Courses'), ['controller' => 'UsersCourses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Course'), ['controller' => 'UsersCourses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($relType) ?>
    <fieldset>
        <legend><?= __('Edit Rel Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
