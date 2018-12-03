<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Criar Curso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Cursos Salvos'), ['controller' => 'users' , 'action' => 'favorites', $user_id])?></li>    
        <li><?= $this->Html->link(__('Material didático'), ['action' => 'materialdidatico']) ?></li>

        <li><?= $this->Html->link(__('Minha agenda (aluno)'), ['action' => 'schedulealuno']) ?></li>

        <li><?= $this->Html->link(__('Minha agenda (professor)'), ['action' => 'scheduleprofessor']) ?></li>
    </ul>
</nav>
<div class="courses index large-10 medium-8 columns content">
    <h3><?= __('Courses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', 'Curso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('knowledge_area_id', 'Area de Conhecimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('educational_institution_id', 'Instituição Educacional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description', 'Descrição') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= h($course->name) ?></td>
                <td><?= $course->has('knowledge_area') ? $this->Html->link($course->knowledge_area->name, ['controller' => 'KnowledgeAreas', 'action' => 'view', $course->knowledge_area->id]) : '' ?></td>
                <td><?= $course->has('educational_institution') ? $this->Html->link($course->educational_institution->name, ['controller' => 'EducationalInstitutions', 'action' => 'view', $course->educational_institution->id]) : '' ?></td>
                <td><?= h($course->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $course->id]) ?>
                    <?= $this->Form->postLink(__('Contratar'), ['controller' => 'UsersCourses', 'action' => 'contratar', $user_id, $course->id], ['confirm' => __('Você tem certeza de que deseja contratar o curso de {0}?', $course->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
