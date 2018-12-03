<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

        <li><?= $this->Html->link(__('Material didático'), ['action' => 'materialdidatico']) ?></li>

        <li><?= $this->Html->link(__('Classificar serviço'), ['action' => 'classificacaoservico']) ?></li>

        <li><?= $this->Html->link(__('Minha agenda (aluno)'), ['action' => 'schedulealuno']) ?></li>

        <li><?= $this->Html->link(__('Minha agenda (professor)'), ['action' => 'scheduleprofessor']) ?></li>
    </ul>
</nav>
<div class="courses index large-10 medium-8 columns content">
    <h3><?= __('Classificar serviço') ?></h3>



<h5 class="text-left">Avalie a qualidade do professor e da aula que recebeu</h5>


  <?= $this->Form->create() ?>
    <fieldset>     
      <div class="text-left">
            <?php
                echo $this->Form->control('name',['options' => $users, 'label' => 'Docente que ministrou a aula']);
            ?>

            
            <h5 class="text-left">Selecione notas de 0 a 10 para os campos a seguir</h5>   
            <br>
            <h6 class="text-left">Qualidade da aula</h6>              
            <p>
                <input type="radio" name="Qualidade" value="0"/>0
                <input type="radio" name="Qualidade" value="1"/>1
                <input type="radio" name="Qualidade" value="2"/>2
                <input type="radio" name="Qualidade" value="3"/>3
                <input type="radio" name="Qualidade" value="4"/>4
                <input type="radio" name="Qualidade" value="5"/>5
                <input type="radio" name="Qualidade" value="6"/>6
                <input type="radio" name="Qualidade" value="7"/>7
                <input type="radio" name="Qualidade" value="8"/>8
                <input type="radio" name="Qualidade" value="9"/>9
                <input type="radio" name="Qualidade" value="10"/>10
            </p>
            <h6 class="text-left">Domínio do professor sobre o assunto</h6>
            <p>
                <input type="radio" name="Domínio" value="0"/>0
                <input type="radio" name="Domínio" value="1"/>1
                <input type="radio" name="Domínio" value="2"/>2
                <input type="radio" name="Domínio" value="3"/>3
                <input type="radio" name="Domínio" value="4"/>4
                <input type="radio" name="Domínio" value="5"/>5
                <input type="radio" name="Domínio" value="6"/>6
                <input type="radio" name="Domínio" value="7"/>7
                <input type="radio" name="Domínio" value="8"/>8
                <input type="radio" name="Domínio" value="9"/>9
                <input type="radio" name="Domínio" value="10"/>10
            </p>
            <h6 class="text-left">O docente trata o aluno com respeito e educação? (0 para muito ruim e 10 para muito bom)</h6>
            <p>
                <input type="radio" name="Respeito" value="0"/>0
                <input type="radio" name="Respeito" value="1"/>1
                <input type="radio" name="Respeito" value="2"/>2
                <input type="radio" name="Respeito" value="3"/>3
                <input type="radio" name="Respeito" value="4"/>4
                <input type="radio" name="Respeito" value="5"/>5
                <input type="radio" name="Respeito" value="6"/>6
                <input type="radio" name="Respeito" value="7"/>7
                <input type="radio" name="Respeito" value="8"/>8
                <input type="radio" name="Respeito" value="9"/>9
                <input type="radio" name="Respeito" value="10"/>10
            </p>
            <h6 class="text-left">Pontualidade</h6>              
            <p>
                <input type="radio" name="Pontualidade" value="0"/>0
                <input type="radio" name="Pontualidade" value="1"/>1
                <input type="radio" name="Pontualidade" value="2"/>2
                <input type="radio" name="Pontualidade" value="3"/>3
                <input type="radio" name="Pontualidade" value="4"/>4
                <input type="radio" name="Pontualidade" value="5"/>5
                <input type="radio" name="Pontualidade" value="6"/>6
                <input type="radio" name="Pontualidade" value="7"/>7
                <input type="radio" name="Pontualidade" value="8"/>8
                <input type="radio" name="Pontualidade" value="9"/>9
                <input type="radio" name="Pontualidade" value="10"/>10
            </p>
            <h6 class="text-left">Faria mais aulas com o docente (0 para "Nunca mais" e 10 para "Com certeza"</h6>              
            <p>
                <input type="radio" name="Pontualidade" value="0"/>0
                <input type="radio" name="Pontualidade" value="1"/>1
                <input type="radio" name="Pontualidade" value="2"/>2
                <input type="radio" name="Pontualidade" value="3"/>3
                <input type="radio" name="Pontualidade" value="4"/>4
                <input type="radio" name="Pontualidade" value="5"/>5
                <input type="radio" name="Pontualidade" value="6"/>6
                <input type="radio" name="Pontualidade" value="7"/>7
                <input type="radio" name="Pontualidade" value="8"/>8
                <input type="radio" name="Pontualidade" value="9"/>9
                <input type="radio" name="Pontualidade" value="10"/>10
            </p>

            <?php    
                echo $this->Form->input('description', array(
                            'label' => 'Visão geral', 
                            'type' => 'textarea', 
                            'rows' => '7',
                            'cols' => '1',
                            'scape' => 'false',
                            'maxlength' => 512,
                            'placeholder' => 'Escreva , caso queira, algo mais para complementar a sua avaliação, para que outros alunos também saibam (até 500 caracteres).')); 

            ?>

            <?= $this->Html->link('Cancelar', ['controller' => 'Courses', 'action' => 'index'], [/*'target' => '_blank', */'class' => 'btn-basic blue', 'confirm' => 'A avaliação não foi concluída e será cancelada.']);?>

            <?= $this->Form->button(__('Submeter avaliação'), array('class' => 'btn-basic blue'), $user_id);?>

      </div>
    </fieldset> 
  <?= $this->Form->end() ?>


<br>


</div>
