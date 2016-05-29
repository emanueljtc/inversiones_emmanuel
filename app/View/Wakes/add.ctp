<div id="general">

<div class="panel panel-primary">
		<div class="panel-heading">
			<center>
				<h4>Nuevo Pago de Personal</h4>

			</center>
		</div>
		<br>
		<div class="form-horizontal">
 			<?php echo $this->Form->create('Wake', array('type'=>'file', 'novalidate'=>'novalidate' )); ?>
 			 <div class="form-group">
							 <label class="control-label col-xs-3" >Nombre del Empleado:</label>
							 <div class="col-xs-7">
								 <?php echo $this->Form->input('personal_id', array('label'=>'','placeholder' => 'Ingrese posición','class'=>'form-control','id'=>'cargo')); ?>
							</div>
							<label class="control-label col-xs-3" >Dias Feriados:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('holiday', array(
 						'label'=>'','placeholder' => 'Ingrese Numero de Dias Feriados Trabajados','class'=>'form-control','id'=>'vhoras','onkeyup'=>'Multi();'
 							)); ?>
 					</div>
 			        <label class="control-label col-xs-3" >Horas Extras:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('extra_hours', array(
 						'label'=>'','placeholder' => 'Ingrese Numero de Horas Extras Trabajadas','class'=>'form-control','id'=>'vhoras','onkeyup'=>'Multi();'
 							)); ?>
 					</div>
               <label class="control-label col-xs-3" >Cargo:</label>
               <div class="col-xs-7">
                  <?php echo $this->Form->input('position', array('label'=>'','class'=>'form-control')); ?>
             </div>
					<label class="control-label col-xs-3" >Salario Diario:</label>
					<div class="col-xs-7">
						<?php echo $this->Form->input('salario', array('label'=>'','class'=>'form-control')); ?>
				 </div>
 					<label class="control-label col-xs-3" >Monto:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('amount', array('label'=>'','placeholder' => 'Ingrese Monto','class'=>'form-control','id'=>'salario')); ?>
 					</div>
 					<label class="control-label col-xs-3" >Tipo de Pago:</label>
 					<div class="col-xs-7">
 						<?php
 							 echo $this->Form->input('payment_type',array('class'=>'form-control','label'=>'','type'=>'select','options'=>array(''=>'[SELECCIONE TIPO]','Salario Basico'=>'Salario Basico','Bono Vacacional'=>'Bono Vacacional')));
 						  ?>
 					</div>


 					<label class="control-label col-xs-3" >Inicio:</label>
 					<div class="col-xs-2">
 						<?php
   								$meses = array(
   									'01'=>'Enero',
   									'02'=>'Febrero',
   									'03'=>'Marzo',
   									'04'=>'Abril',
   									'05'=>'Mayo',
   									'06'=>'Junio',
   									'07'=>'Julio',
   									'08'=>'Agosto',
   									'09'=>'Septiembre',
   									'10'=>'Octubre',
   									'11'=>'Noviembre',
   									'12'=>'Diciembre',
   									);
   								echo $this->Form->input('end', array(
   									    'label' => ' ',
   									    'class'=>'form-control',
   									    'dateFormat' => 'DMY',
   									    'minYear' => date('Y') - 95,//aqui se configura la edad limite de miembro
   									    'maxYear' => date('Y') - 0,
   									    'monthNames' => $meses
   									));
   							?>
 					</div>
 					<div class="col-xs-7">

 					</div>
 					<label class="control-label col-xs-3" >Fin:</label>
 					<div class="col-xs-2">
 						<?php
   								$meses = array(
   									'01'=>'Enero',
   									'02'=>'Febrero',
   									'03'=>'Marzo',
   									'04'=>'Abril',
   									'05'=>'Mayo',
   									'06'=>'Junio',
   									'07'=>'Julio',
   									'08'=>'Agosto',
   									'09'=>'Septiembre',
   									'10'=>'Octubre',
   									'11'=>'Noviembre',
   									'12'=>'Diciembre',
   									);
   								echo $this->Form->input('end', array(
   									    'label' => ' ',
   									    'class'=>'form-control',
   									    'dateFormat' => 'DMY',
   									    'minYear' => date('Y') - 95,//aqui se configura la edad limite de miembro
   									    'maxYear' => date('Y') - 0,
   									    'monthNames' => $meses
   									));
   							?>

 					</div>

 			</div>
 					<br>
 					</div>

 			<center><input type="submit" value="Guardar" class="btn btn-info">
 			<input type="reset" value="Limpiar" class="btn btn-danger"></center>
			<br>
 	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Wakes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
