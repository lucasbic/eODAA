<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KnowledgeArea $knowledgeArea
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Knowledge Area'), ['action' => 'edit', $knowledgeArea->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Knowledge Area'), ['action' => 'delete', $knowledgeArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $knowledgeArea->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Knowledge Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Knowledge Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="knowledgeAreas view large-9 medium-8 columns content">
    <h3><?= h($knowledgeArea->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($knowledgeArea->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($knowledgeArea->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($knowledgeArea->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Knowledge Area Id') ?></th>
                <th scope="col"><?= __('Educational Institution Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($knowledgeArea->courses as $courses): ?>
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
