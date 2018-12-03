<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Ver Cursos'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Voltar'), ['controller' => 'users', 'action' => 'view', $user_id])?></li>
    </ul>
</nav>
<div class="users form large-10 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('cpf');
            echo $this->Form->control('phone_number');
            echo $this->Form->control('scholarity');
            echo $this->Form->control('address_id', ['options' => $addresses, 'empty' => true]);
            echo $this->Form->control('access_level_id', ['options' => $accessLevels]);
            echo $this->Form->control('courses._ids', ['options' => $courses]);
            echo $this->Form->control('educational_institutions._ids', ['options' => $educationalInstitutions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
