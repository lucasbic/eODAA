<br>
<div class="index large-8 medium-8 large-offset-2 medium-offset-2 columns">
	<div class="panel">
		<h2 class="text-center">Seja bem vindo à Plataforma de Ensino eODAA</h2>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email', array('label' => 'E-mail')); ?>
			<?= $this->Form->input('password', array('type' => 'password', 'label' => 'Senha')); ?>
            <div class="left">
                <?= $this->Html->link(
                                     'Login with Facebook',
                                     ['controller' => 'Users', 'action' => 'login', '?' => ['provider' => 'Facebook']]
                                    );?>
            </div>
            <div class="right">
                <?= $this->Html->link(
                                     'Login with Google',
                                     ['controller' => 'Users', 'action' => 'login', '?' => ['provider' => 'Google']]
                                    );?>
            </div>
			<div class="center">
				<?= $this->Form->submit('Login', array('class' => 'button')); ?>
				<?= $this->Html->Link('Não possuo cadastro', ['action' => 'register'], ['class' => 'small']);?>
			</div>
		<?= $this->Form->end(); ?>
	</div>
</div> 
