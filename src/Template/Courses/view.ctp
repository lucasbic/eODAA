<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Curso'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Html->link(__('Ver Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Criar Curso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Contratar Curso'), ['controller' => 'UsersCourses', 'action' => 'contratar', $user_id, $course->id]) ?> </li>
    </ul>
</nav>
<div class="courses view large-10 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($course->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Knowledge Area') ?></th>
            <td><?= $course->has('knowledge_area') ? $this->Html->link($course->knowledge_area->name, ['controller' => 'KnowledgeAreas', 'action' => 'view', $course->knowledge_area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Educational Institution') ?></th>
            <td><?= $course->has('educational_institution') ? $this->Html->link($course->educational_institution->name, ['controller' => 'EducationalInstitutions', 'action' => 'view', $course->educational_institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($course->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($course->users)): ?>
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
                <th scope="col"><?= __('Access Level Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->users as $users): ?>
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
                <td><?= h($users->access_level_id) ?></td>
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
        <h4><?= __('Related Lectures') ?></h4>
        <?php if (!empty($course->lectures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->lectures as $lectures): ?>
            <tr>
                <td><?= h($lectures->id) ?></td>
                <td><?= h($lectures->name) ?></td>
                <td><?= h($lectures->course_id) ?></td>
                <td><?= h($lectures->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lectures', 'action' => 'view', $lectures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lectures', 'action' => 'edit', $lectures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lectures', 'action' => 'delete', $lectures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lectures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
