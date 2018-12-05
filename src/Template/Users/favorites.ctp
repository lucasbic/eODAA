<?php 

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \App\Model\Entity\KnowledgeArea $knowledge_area
 */

?>
<head>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
	@import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
</style>

<nav class="large-2 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?=__('mais cursos')?></li>
		<li><?= $this->Html->link(__('Criar Curso'), ['controller' => 'Courses', 'action' => 'add'])?> </li>	
		<li><?= $this->Html->link(__('Cursos'), ['controller' => 'Courses']) ?> </li>
	</ul>
</nav>
<div class="large-6 medium-6 columns content" style="margin-left: 0px">

	<h2 class="titulo">Contratados</h2>
	<ul class="event-list">
		<?php foreach ($user->courses as $course): 
			if ($course->_joinData->rel_type_id == 4 or $course->_joinData->rel_type_id == 5){
			?>
			<li>
				<span class="infobox">
					<span class="knowledge_short">
						<?= $course->knowledge_area->short_name; ?>
					</span>
					<span class="knowledge_long">
						<?= $course->knowledge_area->name; ?>
					</span>
				</span>
				<div class="info">
					<h2 class="title"><?= $this->Html->link(__($course->name), ['controller' => 'Courses', 'action' => 'view', $course->id]) ?></h2>
					<p class="descr"><?=$course->description?></p>
					<span class="bottom">
					<?php
					if ($course->_joinData->rel_type_id == 4){
						echo '<span style="color:red"><b>Pagamento pendente. Clique aqui para pagar.</b></span>';


					} else {
						echo '<span style="color:green"><b>Pagamento efetuado.</b></span>';
					}
					?> 
					</span>
				</div>
			</li>
			<?php
			}
		endforeach; ?>
	</ul>
</div>

<form method="post" target="pagseguro"  
action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
          
        <!-- Campos obrigatórios -->  
        <input name="receiverEmail" type="hidden" value="suporte@lojamodelo.com.br">  
        <input name="currency" type="hidden" value="BRL">  
  
        <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
        <input name="itemId1" type="hidden" value="0001">  
        <input name="itemDescription1" type="hidden" value="Notebook Prata">  
        <input name="itemAmount1" type="hidden" value="24300.00">  
        <input name="itemQuantity1" type="hidden" value="1">  
        <input name="itemWeight1" type="hidden" value="1000">  
        <input name="itemId2" type="hidden" value="0002">  
        <input name="itemDescription2" type="hidden" value="Notebook Rosa">  
        <input name="itemAmount2" type="hidden" value="25600.00">  
        <input name="itemQuantity2" type="hidden" value="2">  
        <input name="itemWeight2" type="hidden" value="750">  
  
        <!-- Código de referência do pagamento no seu sistema (opcional) -->  
        <input name="reference" type="hidden" value="REF1234">  
          
        <!-- Informações de frete (opcionais) -->  
        <input name="shippingType" type="hidden" value="1">  
        <input name="shippingAddressPostalCode" type="hidden" value="01452002">  
        <input name="shippingAddressStreet" type="hidden" value="Av. Brig. Faria Lima">  
        <input name="shippingAddressNumber" type="hidden" value="1384">  
        <input name="shippingAddressComplement" type="hidden" value="5o andar">  
        <input name="shippingAddressDistrict" type="hidden" value="Jardim Paulistano">  
        <input name="shippingAddressCity" type="hidden" value="Sao Paulo">  
        <input name="shippingAddressState" type="hidden" value="SP">  
        <input name="shippingAddressCountry" type="hidden" value="BRA">  
  
        <!-- Dados do comprador (opcionais) -->  
        <input name="senderName" type="hidden" value="José Comprador">  
        <input name="senderAreaCode" type="hidden" value="11">  
        <input name="senderPhone" type="hidden" value="56273440">  
        <input name="senderEmail" type="hidden" value="comprador@uol.com.br">  
  
        <!-- submit do form (obrigatório) -->  
        <input alt="Pague com PagSeguro" name="submit"  type="image"  
src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/120x53-pagar.gif"/>  
          
</form>  					 




<div class="large-4 medium-2 columns content" style="margin-left: 0px">
	<h2 class="titulo">Favoritos</h2>
	<ul class="event-list">
		<?php foreach ($user->courses as $course): 
			if ($course->_joinData->rel_type_id == 3){
			?>
			<li>
				<span class="infobox">
					<span class="knowledge_short">
						<?= $course->knowledge_area->short_name; ?>
					</span>
					<span class="knowledge_long">
						<?= $course->knowledge_area->name; ?>
					</span>
				</span>
				<div class="info">
					<h2 class="title"><?= $this->Html->link(__($course->name), ['controller' => 'Courses', 'action' => 'view', $course->id]) ?></h2>
					<p class="descr"><?=$course->description?></p>
					<span class="bottom"><?=$this->Html->link(__('Contratar'), ['controller' => 'UsersCourses', 'action' => 'contratar', 1, $user_id, $course->id])?></span>
				</div>
			</li>
			<?php
			}
		endforeach; ?>
	</ul>
</div>


