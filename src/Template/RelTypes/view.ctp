<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RelType $relType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rel Type'), ['action' => 'edit', $relType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rel Type'), ['action' => 'delete', $relType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rel Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rel Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Courses'), ['controller' => 'UsersCourses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Course'), ['controller' => 'UsersCourses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="relTypes view large-9 medium-8 columns content">
    <h3><?= h($relType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($relType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($relType->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($relType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users Courses') ?></h4>
        <?php if (!empty($relType->users_courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Rel Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($relType->users_courses as $usersCourses): ?>
            <tr>
                <td><?= h($usersCourses->user_id) ?></td>
                <td><?= h($usersCourses->course_id) ?></td>
                <td><?= h($usersCourses->rel_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsersCourses', 'action' => 'view', $usersCourses->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsersCourses', 'action' => 'edit', $usersCourses->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersCourses', 'action' => 'delete', $usersCourses->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersCourses->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
