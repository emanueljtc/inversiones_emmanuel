 <div id="general">

  <div class="panel panel-primary">
  		<div class="panel-heading">
  			<center>
  				<h4>Añadir Empleado</h4>

  			</center>
  		</div>
  		<br>
  		<div class="form-horizontal">
   			<?php echo $this->Form->create('Personal', array('type'=>'file', 'novalidate'=>'novalidate' )); ?>
   			 <div class="form-group">
  							 <label class="control-label col-xs-3" >Cargo:</label>
  							 <div class="col-xs-7">

  								 <?php echo $this->Form->input('position_id', array(
  									 'label'=>'','placeholder' => '','class'=>'form-control'
  								 )); ?>
  							</div>
   			        <label class="control-label col-xs-3" >Cedula:</label>
   			        <div class="col-xs-7">

  		 						<?php echo $this->Form->input('dni', array(
  		 							'label'=>'','placeholder' => 'Cedula','type'=>'text','class'=>'form-control'
  		 						)); ?>
   					   </div>
   					<label class="control-label col-xs-3" >Nombre:</label>
   					<div class="col-xs-7">
   						<?php echo $this->Form->input('name', array(
   						'label'=>'','placeholder' => 'Ingrese Nombre','class'=>'form-control'
   							)); ?>
   					</div>
  					<label class="control-label col-xs-3" >Apellido:</label>
   					<div class="col-xs-7">
   						<?php echo $this->Form->input('last_name', array(
   						'label'=>'','placeholder' => 'Ingrese Apellido','class'=>'form-control'
   							)); ?>
   					</div>
  					<label class="control-label col-xs-3">F. Nacimiento:</label>
   		        <div class="col-xs-9">
   		        <br>
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
   								echo $this->Form->input('born_date', array(
   									    'label' => ' ',
   									    'dateFormat' => 'DMY',
   									    'minYear' => date('Y') - 95,//aqui se configura la edad limite de miembro
   									    'maxYear' => date('Y') - 0,
   									    'monthNames' => $meses
   									));
   							?>
   		        </div>
   						<label class="control-label col-xs-3" >Sexo:</label>
   					<div class="col-xs-7">
              <?php
 							 echo $this->Form->input('sex',
 								array('class'=>'form-control','label'=>'','type'=>'select','options'=>array('Femenino'=>'Femenino','Masculino'=>'Masculino')));
 						  ?>
   					</div>
   					<label class="control-label col-xs-3" >Edad:</label>
   					<div class="col-xs-7">
   						<?php echo $this->Form->input('age', array(
   						'label'=>'','placeholder' => 'Edad','type'=>'text','class'=>'form-control'
   							)); ?>
   					</div>

  					<label class="control-label col-xs-3" >Celular:</label>
   					<div class="col-xs-7">
   							<?php echo $this->Form->input('cell_phone', array(
   							'label'=>'','placeholder' => 'Telefono Celular','type'=>'text','class'=>'form-control'
   								)); ?>
   					</div>
   					<label class="control-label col-xs-3" >Telefono:</label>
   					<div class="col-xs-7">
   							<?php echo $this->Form->input('phone', array(
   							'label'=>'','placeholder' => 'Telefono Local','type'=>'text','class'=>'form-control'
   								)); ?>
   					</div>
  					<label class="control-label col-xs-3" >Email:</label>
  					<div class="col-xs-7">
  							<?php echo $this->Form->input('email', array(
  							'label'=>'','placeholder' => 'Email','type'=>'email','class'=>'form-control'
  								)); ?>
  					</div>

   					<label class="control-label col-xs-3" >Direccion:</label>
   					<div class="col-xs-7">
   							<?php
   								 echo $this->Form->input('address', array(
   									'label'=>'','placeholder' => 'Direccion','class'=>'form-control'
   								));
   							?>
   							<br>
   					</div>




   			</div>
   			<center><input type="submit" value="Guardar" class="btn btn-info">
   			<input type="reset" value="Limpiar" class="btn btn-danger"></center>
  			<br>
   	</div>
  </div>

  			<!-- <?php
  				echo $this->Form->input('position_id');
  				echo $this->Form->input('date_reg');
  				echo $this->Form->input('dni');
  				echo $this->Form->input('name');
  				echo $this->Form->input('last_name');
  				echo $this->Form->input('born_date');
  				echo $this->Form->input('sex');
  				echo $this->Form->input('age');
  				echo $this->Form->input('cell_phone', array(
  				'label'=>'','placeholder' => 'Celular','type'=>'text','class'=>'form-control'
  					));
  				echo $this->Form->input('phone');
  				echo $this->Form->input('email');
  				echo $this->Form->input('address');
  			?>
  			</fieldset>
  		<?php echo $this->Form->end(__('Submit')); ?> -->
  		</div>
      <div class="btn-group btn-group-justified">

      				<?php echo $this->Html->link(__('Añadir Empleado'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
      				<?php echo $this->Html->link(__('Lista de Personal'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
      				<?php echo $this->Html->link(__('Registrar Pago'), array('controller' => 'wakes', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

      </div>

</div>
