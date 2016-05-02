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
				<h4>Añadir Cargo</h4>

			</center>
		</div>
		<br>
		<div class="form-horizontal">
 			<?php echo $this->Form->create('Position', array('type'=>'file', 'novalidate'=>'novalidate' )); ?>
 			 <div class="form-group">
							 <label class="control-label col-xs-3" >Cargo:</label>
							 <div class="col-xs-7">

								 <?php echo $this->Form->input('position', array('label'=>'','placeholder' => 'Ingrese posición','class'=>'form-control','id'=>'cargo')); ?>
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

 			<center><input type="submit" value="Guardar" class="btn btn-info">
 			<input type="reset" value="Limpiar" class="btn btn-danger"></center>
			<br>
 	</div>
</div>

	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listado de Cargos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Personal'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Salario'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Salario'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
	</ul>
</div>
