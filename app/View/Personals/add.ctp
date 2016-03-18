<div class="personals form">
<?php echo $this->Form->create('Personal'); ?>
	<fieldset>
		<legend><?php echo __('Add Personal'); ?></legend>
	<?php
		echo $this->Form->input('fecha_reg');
		echo $this->Form->input('cedula');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('fecha_nac');
		echo $this->Form->input('sexo');
		echo $this->Form->input('edad');
		echo $this->Form->input('celular');
		echo $this->Form->input('telefono_local');
		echo $this->Form->input('correo');
		echo $this->Form->input('direccion');
		echo $this->Form->input('cargo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?></li>
	</ul>
</div>
