<div id="general">

<div class="panel panel-primary">
		<div class="panel-heading">
			<center>
				<h4>Añadir Grupo</h4>

			</center>
		</div>
		<br>
		<div class="form-horizontal">
 			<?php echo $this->Form->create('Group'); ?>
 			 <div class="form-group">
							 <label class="control-label col-xs-3" >Nombre del Grupo:</label>
							 <div class="col-xs-7">
							<?php echo $this->Form->input('name', array('label'=>'','placeholder' => 'Ingrese Nombre del Grupo','class'=>'form-control')); ?>

 			</div>
 					<br>
 					</div>

 			<center><input type="submit" value="Guardar" class="btn btn-info">
 			<input type="reset" value="Limpiar" class="btn btn-danger"></center>
			<br>
 	</div>
</div>

	</fieldset>
</div>
<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Lista de Grupos'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Usuarios'), array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>

<!-- <div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Add Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
