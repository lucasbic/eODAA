<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersEducationalInstitution $usersEducationalInstitution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersEducationalInstitution->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersEducationalInstitution->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Educational Institutions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersEducationalInstitutions form large-9 medium-8 columns content">
    <?= $this->Form->create($usersEducationalInstitution) ?>
    <fieldset>
        <legend><?= __('Edit Users Educational Institution') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
