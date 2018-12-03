<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('menu') ?></li>
        <li><?= $this->Html->link(__('Minha agenda (aluno)'), ['action' => 'schedulealuno']) ?></li>
        <li><?= $this->Html->link(__('Minha agenda (professor)'), ['action' => 'scheduleprofessor']) ?></li>
    </ul>
</nav>
<div class="courses index large-10 medium-8 columns content">
    <h3><?= __('Material didático') ?></h3>



<h5 class="text-left">Escolha um ou mais itens para refinar busca</h5>


  <?= $this->Form->create() ?>
    <fieldset>     
      <div class="text-left">
            <?php
                echo $this->Form->control('name',['options' => $users, 'label' => 'Nome do docente']);

                echo $this->Form->control('knowledge_area_id', ['options' => $knowledgeAreas, 'label' => 'Área de conhecimento do curso']);

                echo $this->Form->control('educational_institution_id', ['options' => $educationalInstitutions, 'label' => 'Instituição de ensino']);
            ?>
            <?= $this->Form->button(__('Buscar'), array('class' => 'btn-basic blue'), $user_id);?>

      </div>
    </fieldset> 

  <?= $this->Form->end() ?>

<br>

<div class="centralizar_botao">
    <a class="btn-basic grey">
    <label>Listar todos os materiais didáticos</label>
    </a>
</div>
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('knowledge_area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('educational_institution_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>

</div>
