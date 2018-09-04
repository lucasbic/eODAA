<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EducationalInstitution $educationalInstitution
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Educational Institution'), ['action' => 'edit', $educationalInstitution->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Educational Institution'), ['action' => 'delete', $educationalInstitution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationalInstitution->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="educationalInstitutions view large-9 medium-8 columns content">
    <h3><?= h($educationalInstitution->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= $educationalInstitution->has('address') ? $this->Html->link($educationalInstitution->address->id, ['controller' => 'Addresses', 'action' => 'view', $educationalInstitution->address->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($educationalInstitution->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($educationalInstitution->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($educationalInstitution->users)): ?>
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
            <?php foreach ($educationalInstitution->users as $users): ?>
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
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($educationalInstitution->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Knowledge Area Id') ?></th>
                <th scope="col"><?= __('Educational Institution Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($educationalInstitution->courses as $courses): ?>
            <tr>
                <td><?= h($courses->id) ?></td>
                <td><?= h($courses->name) ?></td>
                <td><?= h($courses->knowledge_area_id) ?></td>
                <td><?= h($courses->educational_institution_id) ?></td>
                <td><?= h($courses->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
