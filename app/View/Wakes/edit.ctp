<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>

<?php echo $this->Html->script('jquery',TRUE); ?>
<script>
   $(document).ready(function(){
 
 //$('#personal').change(function(){
 //var selected = $(this).val();
  var selected = $('#personal').val();

  //alert('que locura');
  
  $.ajax({
   type: "POST",
   url: '../getCargoByPersonal',
   data: "idPersonal="+selected,
   dataType: 'json',
   success: function(data){
   

   
   $.each(data, function(i,items){

      var idp = items.Position.idposition;
      var cargo = items.Position.cargo;
      //$('#cargo option:selected').text(cargo);
      $('#cargo').html(''); 
      $("<option value='"+idp+"'>"+cargo+"</option>").appendTo("#cargo");


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
 //});

$('#personal').change(function(){
 var selected = $(this).val();
  //var selected = $('#personal').val();

  //alert('que locura');
  
  $.ajax({
   type: "POST",
   url: '../getCargoByPersonal',
   data: "idPersonal="+selected,
   dataType: 'json',
   success: function(data){
   

   
   $.each(data, function(i,items){

      var idp = items.Position.idposition;
      var cargo = items.Position.cargo;
      //$('#cargo option:selected').text(cargo);
      $('#cargo').html(''); 
      $("<option value='"+idp+"'>"+cargo+"</option>").appendTo("#cargo");

      
    	

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
				<h4>Edición de Pago de Personal</h4>
    
			</center>
      <style>
            .pagof{
              display:none;
            }
      </style>
		</div>
		<br>
		<div class="form-horizontal">

 			<?php echo $this->Form->create('Wake', array('type'=>'file', 'novalidate'=>'novalidate' )); ?>
 			 <div class="form-group">

                <?php echo $this->Form->input('payment_day', array('label'=>'','placeholder' => '','class'=>'form-control pagof')); ?>

							 <label class="control-label col-xs-3" >Nombre del Empleado:</label>
							 <div class="col-xs-7">
								 <?php echo $this->Form->input('personal_id', array('label'=>'','placeholder' => 'Ingrese posición','class'=>'form-control','id'=>'personal','readonly'=>'readonly')); ?>
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

                  <?php echo $this->Form->input('position_id', array('label'=>'','type'=>'select','class'=>'form-control','id'=>'cargo','readonly'=>'readonly')); ?>
             </div>
					<label class="control-label col-xs-3" >Salario Diario:</label>
					<div class="col-xs-7">
						<?php echo $this->Form->input('salario', array('label'=>'','class'=>'form-control','id'=>'salariod','readonly'=>'readonly')); ?>
				 </div>
         <input type="hidden" id="vhora">
 					<label class="control-label col-xs-3" >Monto:</label>
 					<div class="col-xs-7">
 						<?php echo $this->Form->input('amount', array('label'=>'','placeholder' => 'Ingrese Monto','class'=>'form-control','id'=>'monto','readonly'=>'readonly')); ?>
 					</div>  
 					<label class="control-label col-xs-3" >Tipo de Pago:</label>
 					<div class="col-xs-7">
 						<?php
 							 echo $this->Form->input('payment_type',array('class'=>'form-control','id'=>'tipop','label'=>'','type'=>'select','options'=>array(''=>'[SELECCIONE TIPO]','Adelantado'=>'Adelantado','Atrasado'=>'Atrasado','Reglamentario'=>'Reglamentario')));
 						  ?>
 					</div>


 					<label class="control-label col-xs-3" >Inicio:</label>
 	
          
        <div class="col-xs-2">
            <?php echo $this->Form->input('start', array('label'=>'','placeholder' => '','class'=>'form-control','id'=>'f_date1','readonly'=>'readonly')); ?>
            <button id="inicio"><span class="input-group-addon glyphicon glyphicon-calendar"></span></button>
        </div>


 					
 					<label class="control-label col-xs-3" >Fin:</label>
 					<div class="col-xs-2">
            <?php echo $this->Form->input('end', array('label'=>'','placeholder' => '','class'=>'form-control','id'=>'f_date2','readonly'=>'readonly')); ?>
            <button id="fin"><span class="input-group-addon glyphicon glyphicon-calendar"></span></button>
        </div>

 			    <label class="control-label col-xs-3" >Salario Resultante:</label>
          <div class="col-xs-7">
            <?php echo $this->Form->input('salary_date', array('label'=>'','placeholder' => '','class'=>'form-control fechas','id'=>'salariof','readonly'=>'readonly')); ?>
          </div>  

 					<br>
 					</div>

 			<center><input type="submit" value="Actualizar" class="btn btn-info">
 			<input type="reset" value="Limpiar" class="btn btn-danger"></center>
			<br>
 	</div>
</div>
</div>
<div class="btn-group btn-group-justified">

              <?php echo $this->Html->link(__('Añadir Nuevo Pago'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
              <?php echo $this->Html->link(__('Lista de Relacion de Pago'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
              <?php echo $this->Html->link(__('Añadir Empleado'), array('controller' => 'Personals', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

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

        

    });
    
});


$('#salariof').hover(function(){
        
        var inicio = $("#f_date1").val();
        var fin =  $("#f_date2").val();
        var salariodia = $("#salariod").val(); 
        var aFecha1 = inicio.split('-'); 
        var aFecha2 = fin.split('-'); 
        var fFecha1 = Date.UTC(aFecha1[2],aFecha1[1]-1,aFecha1[0]); 
        var fFecha2 = Date.UTC(aFecha2[2],aFecha2[1]-1,aFecha2[0]); 
        var dif = fFecha2 - fFecha1;
        var dias = Math.floor(dif / (1000 * 60 * 60 * 24)); 
        var montot = parseFloat(dias) * parseFloat(salariodia);

           $('.fechas').val(montot);     
});

    Calendar.setup({
                  inputField : "f_date1",
                  trigger    : "inicio",
                  onSelect   : function() { this.hide() },
                  showTime   : 12,
                  dateFormat : "%d-%m-%Y"
                });

    Calendar.setup({
                  inputField : "f_date2",
                  trigger    : "fin",
                  onSelect   : function() { this.hide() },
                  showTime   : 12,
                  dateFormat : "%d-%m-%Y"
                });
</script>
</body>
</html>
