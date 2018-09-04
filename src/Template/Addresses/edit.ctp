<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Address $address
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $address->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addresses form large-9 medium-8 columns content">
    <?= $this->Form->create($address) ?>
    <fieldset>
        <legend><?= __('Edit Address') ?></legend>
        <?php
            echo $this->Form->control('country');
            echo $this->Form->control('state');
            echo $this->Form->control('city');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('housenumber');
            echo $this->Form->control('complement');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
