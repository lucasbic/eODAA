<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccessLevel $accessLevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accessLevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accessLevel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Access Levels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accessLevels form large-9 medium-8 columns content">
    <?= $this->Form->create($accessLevel) ?>
    <fieldset>
        <legend><?= __('Edit Access Level') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
