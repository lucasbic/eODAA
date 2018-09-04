<br>
<div>
	<div class="panel">
		<h2 class="text-center">Por favor faça o login rapido</h2>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email');?>
			<?= $this->Form->input('password', array('type' => 'password'));?>
			<?= $this->Form->button('Login', array('class' => 'button'));?>
		<?= $this->Form->end(); ?>
	</div>
</div>
