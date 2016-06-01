<script>
function calcularEdad()
{
    var fecha=document.getElementById("f_date2").value;
  
        // Si la fecha es correcta, calculamos la edad
        var values=fecha.split("-");
        var dia = values[0];
        var mes = values[1];
        var ano = values[2];
  
  
        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth();
        var ahora_dia = fecha_hoy.getDate();
        
        var otra_fecha = new Date();
        var anoa = otra_fecha.getFullYear()
        
     if (ano < anoa){   
        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < (mes - 1))
        {
            edad--;
        }
        if (((mes - 1) == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }
    if(edad == 1){
        document.getElementById("edad").value=edad;
    }else{
    document.getElementById("edad").value=edad;  
      }
  }else if(ano >= anoa){
    
    document.getElementById("edad").value="Edad Incorrecta";

    }
}
</script>
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
        <label class="control-label col-xs-3" >Fecha de Ingreso:</label>
  
          
        <div class="col-xs-2">
            <?php echo $this->Form->input('date_reg', array('label'=>'','placeholder' => '','class'=>'form-control','id'=>'f_date1','readonly'=>'readonly')); ?>
            <button id="fingreso"><span class="input-group-addon glyphicon glyphicon-calendar"></span></button>
        </div>
        <div class="control-label col-xs-10">
            
        </div>
  							 <label class="control-label col-xs-3" >Cargo:</label>
  							 <div class="col-xs-7">

  								 <?php echo $this->Form->input('position_id', array(
  									 'label'=>'','placeholder' => '','class'=>'form-control'
  								 )); ?>
  							</div>
   			        <label class="control-label col-xs-3" >Cedula:</label>
   			        <div class="col-xs-7">

  		 						<?php echo $this->Form->input('dni', array(
  		 							'label'=>'','placeholder' => 'Cedula','type'=>'text','class'=>'form-control','onkeypress'=>'return IsCedula(event);','maxlength'=>'10')); ?>
   					   </div>
   					<label class="control-label col-xs-3" >Nombre:</label>
   					<div class="col-xs-7">
   						<?php echo $this->Form->input('name', array(
   						'label'=>'','placeholder' => 'Ingrese Nombre','class'=>'form-control','onkeypress'=>'return IsNombre(event);','maxlength'=>'60'
   							)); ?>
   					</div>
  					<label class="control-label col-xs-3" >Apellido:</label>
   					<div class="col-xs-7">
   						<?php echo $this->Form->input('last_name', array(
   						'label'=>'','placeholder' => 'Ingrese Apellido','class'=>'form-control','onkeypress'=>'return IsNombre(event);','maxlength'=>'60'
   							)); ?>
   					</div>
  					<label class="control-label col-xs-3" >Fecha de Nacimiento:</label>
  
          
        <div class="col-xs-2">
            <?php echo $this->Form->input('born_date', array('label'=>'','placeholder' => '','class'=>'form-control','id'=>'f_date2','readonly'=>'readonly')); ?>
            <button id="fnac"><span class="input-group-addon glyphicon glyphicon-calendar"></span></button>
        </div>
        <div class="control-label col-xs-10">
            
        </div>

   						<label class="control-label col-xs-3" >Sexo:</label>
   					<div class="col-xs-7">
              <?php
 							 echo $this->Form->input('sex',
 								array('class'=>'form-control','label'=>'','type'=>'select','options'=>array(''=>'[SELECCIONE SEXO]','Femenino'=>'Femenino','Masculino'=>'Masculino')));
 						  ?>
   					</div>
   					<label class="control-label col-xs-3" >Edad:</label>
   					<div class="col-xs-7">
   						<?php echo $this->Form->input('age', array(
   						'label'=>'','placeholder' => 'Edad','type'=>'text','class'=>'form-control','onkeypress'=>'return IsEdad(event);','maxlength'=>'3','id'=>'edad','readonly'=>'readonly','onClick'=>'calcularEdad();'
   							)); ?>
   					</div>

  					<label class="control-label col-xs-3" >Celular:</label>
   					<div class="col-xs-7">
   							<?php echo $this->Form->input('cell_phone', array(
   							'label'=>'','placeholder' => 'Telefono Celular','type'=>'text','class'=>'form-control','onkeypress'=>'return IsTelefono(event);','maxlength'=>'12'
   								)); ?>
   					</div>
   					<label class="control-label col-xs-3" >Telefono:</label>
   					<div class="col-xs-7">
   							<?php echo $this->Form->input('phone', array(
   							'label'=>'','placeholder' => 'Telefono Local','type'=>'text','class'=>'form-control','onkeypress'=>'return IsTelefono(event);','maxlength'=>'12'
   								)); ?>
   					</div>
  					<label class="control-label col-xs-3" >Email:</label>
  					<div class="col-xs-7">
  							<?php echo $this->Form->input('email', array(
  							'label'=>'','placeholder' => 'Email','type'=>'email','class'=>'form-control','maxlength'=>'80'
  								)); ?>
  					</div>

   					<label class="control-label col-xs-3" >Direccion:</label>
   					<div class="col-xs-7">
   							<?php
   								 echo $this->Form->input('address', array(
   									'label'=>'','placeholder' => 'Direccion','class'=>'form-control','maxlength'=>'150'
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
<script>
    Calendar.setup({
                  inputField : "f_date1",
                  trigger    : "fingreso",
                  onSelect   : function() { this.hide() },
                  showTime   : 12,
                  dateFormat : "%d-%m-%Y"
                });

    Calendar.setup({
                  inputField : "f_date2",
                  trigger    : "fnac",
                  onSelect   : function() { this.hide() },
                  showTime   : 12,
                  dateFormat : "%d-%m-%Y"
                });

</script>