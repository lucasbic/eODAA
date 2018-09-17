<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('cpf');
            echo $this->Form->control('phone_number');
            echo $this->Form->control('scholarity');
            echo $this->Form->control('address_id', ['options' => $addresses, 'empty' => true]);
            echo $this->Form->control('educational_institutions._ids', ['options' => $educationalInstitutions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
