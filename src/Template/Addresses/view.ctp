<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Address $address
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Address'), ['action' => 'edit', $address->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Address'), ['action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="addresses view large-9 medium-8 columns content">
    <h3><?= h($address->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($address->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($address->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($address->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($address->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Housenumber') ?></th>
            <td><?= h($address->housenumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complement') ?></th>
            <td><?= h($address->complement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($address->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Educational Institutions') ?></h4>
        <?php if (!empty($address->educational_institutions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Address Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($address->educational_institutions as $educationalInstitutions): ?>
            <tr>
                <td><?= h($educationalInstitutions->id) ?></td>
                <td><?= h($educationalInstitutions->address_id) ?></td>
                <td><?= h($educationalInstitutions->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EducationalInstitutions', 'action' => 'view', $educationalInstitutions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EducationalInstitutions', 'action' => 'edit', $educationalInstitutions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EducationalInstitutions', 'action' => 'delete', $educationalInstitutions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationalInstitutions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($address->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Phone Number') ?></th>
                <th scope="col"><?= __('Scholarity') ?></th>
                <th scope="col"><?= __('Address Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($address->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->cpf) ?></td>
                <td><?= h($users->phone_number) ?></td>
                <td><?= h($users->scholarity) ?></td>
                <td><?= h($users->address_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
