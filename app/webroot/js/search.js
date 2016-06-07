$(document).ready(function(){

$("#s").keyup(function(e){		
	var cedula = $("#s").val();
  
   $.ajax({
   type: "POST",
   url: 'Personals/getPalabraByPersonal',
   data: "dni="+cedula,
   dataType: 'json',
   success: function(data){



   $.each(data, function(i,items){

      var idp = items.Personal.idpersonal;
      var nombre = items.Personal.full_name;
	    var cedula= items.Personal.cedula;
      
	    $('#empleado').html('');
      $("<option value='"+cedula+"'>"+nombre+"</option>").appendTo("#empleado");

      //var salario = items.Position.salario;
      //$('#salariod').val(salario);

      //var vhora = items.Position.vhora;
      //$('#vhora').val(vhora);

    });


   }

  });
})
	});






