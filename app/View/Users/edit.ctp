<div id="general">

<div class="panel panel-primary">
		<div class="panel-heading">
			<center>
				<h4>Añadir Usuario</h4>

			</center>
		</div>
		<br>
		<div class="form-horizontal">
 			<?php echo $this->Form->create('User'); ?>
 			 <div class="form-group">
							 <label class="control-label col-xs-3" >Nombre y Apellido:</label>
							 <div class="col-xs-7">

								 <?php echo $this->Form->input('fullname', array('label'=>'','placeholder' => 'Ingrese Nombre y Apellido','class'=>'form-control')); ?>
							</div>
 			        <label class="control-label col-xs-3" >Nombre de Usuario:</label>
 			        <div class="col-xs-7">

		 						<?php echo $this->Form->input('username', array(
		 							'label'=>'','placeholder' => 'Ingrese un Nombre de Usuario','class'=>'form-control')); ?>
 					   </div>
 					<label class="control-label col-xs-3" >Contraseña:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('password', array(
 						'label'=>'','placeholder' => 'Ingrese una Contraseña','class'=>'form-control')); ?>
 					</div>
					<label class="control-label col-xs-3" >Tipo de Usuario:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('group_id', array('type'=>'select','label'=>'','placeholder' => 'Seleccione Tipo de Usuario','class'=>'form-control')); ?>
 					</div>
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

				<?php echo $this->Html->link(__('Lista de Usuarios'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>

<!-- <div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fullname');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
