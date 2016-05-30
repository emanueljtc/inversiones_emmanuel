<script type="text/javascript">
    $('document').ready(function(){
    jQuery.validator.addMethod("accept", function(value, element, param) {
        return value.match(new RegExp("." + param + "$"));
    });

    $.validator.addMethod('regexp', function(value, element, param) {
        return this.optional(element) || value.match(param);
    },
    'ingresa una cuenta valida');
   $("#PersonalBuscarForm").validate({
		rules: {
			"data[Personal][dni]": {
				required: true,
				number: true,
				minlength: 7
			}
		},
		messages: {
			"data[Personal][dni]": {
				required: "<div class='validacion'>* Requerido</div>",
				number: "<div class='validacion'>Solo n&uacute;meros</div>",
				minlength: "<div class='validacion'>Minimo 7 digitos</div>"
			}
		},
                errorElement :'div'
	});
});
</script>

<div align="center">
<?php
   echo $this->Form->create('Personal');
   echo "<center><table class=formpequeno>";
   echo "<tr >";
   echo "<td class=formpequeno>".$this->Form->input('dni',array('label'=>'Cedula:', 'size'=>'20','maxlength'=>'8'))."</td>";
   echo "</tr>";
   echo "</table></center>";
   echo '<center>'.$this->Form->end('Buscar Personal').'</center><br>';
?>
</div>
