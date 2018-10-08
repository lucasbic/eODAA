<br>
<div class="index large-8 medium-8 large-offset-2 medium-offset-2 columns">
	<div class="panel">
		<h2 class="text-center">Seja bem vindo à plataforma eODAA de ensino</h2>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email', array('label' => 'E-mail')); ?>
			<?= $this->Form->input('password', array('type' => 'password', 'label' => 'Senha')); ?>
			<div class="center">
				<?= $this->Form->submit('Login', array('class' => 'button')); ?>
				<?= $this->Html->Link('Não possuo cadastro', ['action' => 'register'], ['class' => 'small']);?>
			</div>
		<?= $this->Form->end(); ?>
	</div>
</div> 