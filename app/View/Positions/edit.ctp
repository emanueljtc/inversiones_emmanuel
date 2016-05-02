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

<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Lista de Cargos'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Personal'), array('controller' => 'personals', 'action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Nuevo Personal'), array('controller' => 'personals', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>