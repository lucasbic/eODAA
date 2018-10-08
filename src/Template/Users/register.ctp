<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Cadastro</h2>
		<?= $this->Form->create($user); ?>
			<?= $this->Form->input('name', array('label' => 'Nome'));?>
			<?= $this->Form->input('email', array('label' => 'E-mail'));?>
			<?= $this->Form->input('password', array('type' => 'password', 'label' => 'Senha'));?>
			<?= $this->Form->input('cpf', array('label' => 'CPF'));?>
			<?= $this->Form->input('phone_number', array('label' => 'Número de Telefone'));?>
			<?= $this->Form->input('scholarity', array('label' => 'Escolaridade'));?>
			<?= $this->Form->hidden('access_level_id', array('value' => '2')); ?>
			<?= $this->Form->submit('Cadastrar', array('class' => 'button'));?>
			<?= $this->Html->link('Já possuo cadastro', ['controller' => 'users', 'action' => 'login'], ['class' => 'small']); ?>
		<?= $this->Form->end(); ?>
	</div>
</div> 