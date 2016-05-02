<script>
	
function Multi(){
	var horast = document.getElementById("horast").value;
	var vhoras = document.getElementById("vhoras").value;

	var multi = horast * vhoras;
	document.getElementById("salario").value = multi;
}
</script>
<div id="general">

<div class="panel panel-primary">
		<div class="panel-heading">
			<center>
				<h4>Editar Cargo</h4>

			</center>
		</div>
		<br>
		<div class="form-horizontal">
 			<?php echo $this->Form->create('Position'); ?>
 			 <div class="form-group">
							 <label class="control-label col-xs-3" >Cargo:</label>
							 <div class="col-xs-7">
								<?php echo $this->Form->input('id'); ?>
								 <?php echo $this->Form->input('position', array('label'=>'','placeholder' => 'Ingrese posicion','class'=>'form-control')); ?>
							</div>
 			        <label class="control-label col-xs-3" >Horas Trabajadas:</label>
 			        <div class="col-xs-7">

		 						<?php echo $this->Form->input('hour_worked', array(
		 							'label'=>'','placeholder' => 'Ingrese horas trabajadas','class'=>'form-control','id'=>'horast','onkeyup'=>'Multi();'
		 						)); ?>
 					   </div>
 					<label class="control-label col-xs-3" >Valor de la Hora:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('time_value', array(
 						'label'=>'','placeholder' => 'Ingrese valor de la hora','class'=>'form-control','id'=>'vhoras','onkeyup'=>'Multi();'
 							)); ?>
 					</div>
					<label class="control-label col-xs-3" >Salario:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('daily_salary', array('label'=>'','placeholder' => 'Ingrese Salario','class'=>'form-control','id'=>'salario')); ?>
 					</div>
 			</div>
 					<br>
 					</div>

 			<center><input type="submit" value="Actualizar" class="btn btn-info">
 			<input type="reset" value="Limpiar" class="btn btn-danger"></center>
			<br>
			<?php //echo $this->Form->end(__('Submit')); ?>
 	</div>
</div>

	</fieldset>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Position.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Position.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
	</ul>
</div>
