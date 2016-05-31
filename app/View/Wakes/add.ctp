<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<?php echo $this->Js->writeBuffer(array('cache'=>TRUE)); // Write cached scripts ?>
<?php echo $this->Html->script('jquery',TRUE); ?>
<script>
   $(document).ready(function(){
 
 $('#personal').change(function(){
  var selected = $(this).val();

  //alert('que locura');
  
  $.ajax({
   type: "POST",
   url: 'getCargoByPersonal',
   data: "idPersonal="+selected,
   dataType: 'json',
   success: function(data){
   

   
   $.each(data, function(i,items){

      var cargo = items.Position.cargo;
      $('#cargo').val(cargo);

      var salario = items.Position.salario;
      $('#salariod').val(salario);

      var vhora = items.Position.vhora;
      $('#vhora').val(vhora);
      //var horast = items.Position.horast;
      //$('#horat').val(horast);

    });    

   //var cadena = JSON.stringify(data);
   //var vector = cadena.split('Personal');
   //var array = vector;
   //var cadena =jQuery.parseJSON(data);
   //cadena.toString;
    //alert(vector);

   }

  });
 });
});

</script>
<body>
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
								 <?php echo $this->Form->input('personal_id', array('label'=>'','placeholder' => 'Ingrese posición','class'=>'form-control','id'=>'personal')); ?>
                     </div>
                     
							<label class="control-label col-xs-3" >Dias Feriados:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('holiday', array(
 						'label'=>'','placeholder' => 'Ingrese Numero de Dias Feriados Trabajados','class'=>'form-control calculo','id'=>'diasf'
 							)); ?>
 					</div>
 			        <label class="control-label col-xs-3" >Horas Extras:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('extra_hours', array(
 						'label'=>'','placeholder' => 'Ingrese Numero de Horas Extras Trabajadas','class'=>'form-control calculo','id'=>'horase'
 							)); ?>
 					</div>
               <label class="control-label col-xs-3" >Cargo:</label>
               <div class="col-xs-7">

                  <?php echo $this->Form->input('position', array('label'=>'','class'=>'form-control','id'=>'cargo')); ?>
             </div>
					<label class="control-label col-xs-3" >Salario Diario:</label>
					<div class="col-xs-7">
						<?php echo $this->Form->input('salario', array('label'=>'','class'=>'form-control','id'=>'salariod')); ?>
				 </div>
         <input type="hidden" id="vhora">
 					<label class="control-label col-xs-3" >Monto:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('amount', array('label'=>'','placeholder' => 'Ingrese Monto','class'=>'form-control','id'=>'monto')); ?>
 					</div>
 					<label class="control-label col-xs-3" >Tipo de Pago:</label>
 					<div class="col-xs-7">
 						<?php
 							 echo $this->Form->input('payment_type',array('class'=>'form-control','id'=>'tipop','label'=>'','onClick'=>'fechas();','type'=>'select','options'=>array(''=>'[SELECCIONE TIPO]','Adelantado'=>'Adelantado','Atrasado'=>'Atrasado','Reglamentario'=>'Reglamentario')));
 						  ?>
 					</div>


 					<label class="control-label col-xs-3" >Inicio:</label>
 					<div class="col-xs-2">
 						<?php
   								$meses = array(
                    '01'=>'01',
                    '02'=>'02',
                    '03'=>'03',
                    '04'=>'04',
                    '05'=>'05',
                    '06'=>'06',
                    '07'=>'07',
                    '08'=>'08',
                    '09'=>'09',
                    '10'=>'10',
                    '11'=>'11',
                    '12'=>'12',
                    );
   								echo $this->Form->input('end', array(
   									    'label' => ' ',
   									    'class'=>'form-control',
                        'id'=>'inicio',
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
   									'01'=>'01',
   									'02'=>'02',
   									'03'=>'03',
   									'04'=>'04',
   									'05'=>'05',
   									'06'=>'06',
   									'07'=>'07',
   									'08'=>'08',
   									'09'=>'09',
   									'10'=>'10',
   									'11'=>'11',
   									'12'=>'12',
   									);
   								echo $this->Form->input('end', array(
   									    'label' => ' ',
   									    'class'=>'form-control',
                        'id'=>'fin',
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
<script>

$(document).ready(function(){
   $('.calculo').keyup(function(){
        //Calculo de Dias Feriados
         var valor = 1.5;
         var diasf = $("#diasf").val().substring(0,10);
         var salariod = $("#salariod").val(); 
         var rdiasf = ((parseFloat(salariod) * parseFloat(valor)) * parseFloat(diasf));
        
        //Calculo de Horas Extras
        var valorhora = $("#vhora").val();
        var horase = $("#horase").val();
        var rhorase = ((parseFloat(valorhora) * parseFloat(valor)) * parseFloat(horase));

        var monto = parseFloat(rhorase)+parseFloat(rdiasf);
        $("#monto").val(monto);

        var inicio = $("#inicio").val();        
        alert(inicio);

    });

});

function fechas(){
          //Calculo de Numero de Dias Correspondientes al Pago
f1 = document.getElementById("inicio").value;
f2 = document.getElementById("fin").value;

alert(f1);

 var aFecha1 = f1.split('-'); 
 var aFecha2 = f2.split('-'); 
 var fFecha1 = Date.UTC(aFecha1[2],aFecha1[1]-1,aFecha1[0]); 
 var fFecha2 = Date.UTC(aFecha2[2],aFecha2[1]-1,aFecha2[0]); 
 var dif = fFecha2 - fFecha1;
 var dias = Math.floor(dif / (1000 * 60 * 60 * 24)); 
 alert (dias);
   }
</script>
</body>
</html>

