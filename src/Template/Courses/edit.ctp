<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Knowledge Areas'), ['controller' => 'KnowledgeAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Knowledge Area'), ['controller' => 'KnowledgeAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educational Institutions'), ['controller' => 'EducationalInstitutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Educational Institution'), ['controller' => 'EducationalInstitutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lectures'), ['controller' => 'Lectures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lecture'), ['controller' => 'Lectures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course) ?>
    <fieldset>
        <legend><?= __('Edit Course') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('knowledge_area_id', ['options' => $knowledgeAreas]);
            echo $this->Form->control('educational_institution_id', ['options' => $educationalInstitutions]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
