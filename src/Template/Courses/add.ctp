<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<div class="index large-4 medium-8 large-offset-4 medium-offset-2 columns">
    <div class="panel">
        <?= $this->Form->create($course) ?>
        <fieldset>
            <legend><?= __('Criar novo anúncio de curso') ?></legend>
            <?php
                echo $this->Form->control('name', array('label' => 'Nome do curso'));
                echo $this->Form->input('description', array(
                                            'label' => 'Descrição do curso', 
                                            'type' => 'textarea', 
                                            'rows' => '7',
                                            'cols' => '1',
                                            'scape' => 'false',
                                            'maxlength' => 512,
                                            'placeholder' => 'Escreva aqui uma breve descrição do seu curso (até 500 caracteres).'
                                        ));  
               /* echo '
                <div class="input select">
                    <label for="knowledge-area-id">Área de conhecimento do curso</label>
                    <select name="knowledge_area_id" id="knowledge-area-id">
                        <option value="0" selected="selected" disabled></option>
                ';
                foreach($course->knowledgeAreas as $knowledgeArea){
                    echo '
                        <option value="'.$knowledgeArea->id.'">Ae</option>
                    ';
                }
                echo '
                    </select>
                </div>
                ';*/
                echo $this->Form->control('knowledge_area_id', ['options' => $knowledgeAreas, 'label' => 'Área de conhecimento do curso']);
                echo $this->Form->control('educational_institution_id', ['options' => $educationalInstitutions]);
            ?>

            <div class="center">
                <?= $this->Html->link('Cancelar', ['controller' => 'Courses', 'action' => 'index'], [/*'target' => '_blank', */'class' => 'btn-basic blue', 'confirm' => 'O anúncio não foi concluído e será cancelado.']);?>
                <?= $this->Form->button(__('Cadastrar anúncio'), array('class' => 'btn-basic blue'), $user_id);?>
            </div>
        </fieldset> 

        <?= $this->Form->end() ?>
    </div>
</div>
