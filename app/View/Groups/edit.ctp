<div id="general">

<div class="panel panel-primary">
		<div class="panel-heading">
			<center>
				<h4>Editar Grupo</h4>

			</center>
		</div>
		<br>
		<div class="form-horizontal">
 			<?php echo $this->Form->create('Group'); ?>
 			 <div class="form-group">
				 				<?php	echo $this->Form->input('id');?>
							 <label class="control-label col-xs-3" >Nombre del Grupo:</label>
							 <div class="col-xs-7">
							<?php echo $this->Form->input('name', array('label'=>'','placeholder' => '','class'=>'form-control')); ?>

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
