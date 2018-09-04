<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Knowledge Areas'), ['controller' => 'KnowledgeAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Knowledge Area'), ['controller' => 'KnowledgeAreas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lectures'), ['controller' => 'Lectures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lecture'), ['controller' => 'Lectures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
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
        <h4><?= __('Related Lectures') ?></h4>
        <?php if (!empty($course->lectures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->lectures as $lectures): ?>
            <tr>
                <td><?= h($lectures->id) ?></td>
                <td><?= h($lectures->name) ?></td>
                <td><?= h($lectures->course_id) ?></td>
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
