var nav4 = window.Event ? true : false;
function IsCedula(evt){
// Backspace = 8, Enter = 13, ’0′ = 48, ’9′ = 57, ‘.’ = 46
var key = nav4 ? evt.which : evt.keyCode;
return (key <= 13 || (key >= 48 && key <= 57));
}

var nav5 = window.Event ? true : false;
function IsEdad(evt){
// Backspace = 8, Enter = 13, ’0′ = 48, ’9′ = 57, ‘.’ = 46
var key = nav5 ? evt.which : evt.keyCode;
return (key <= 13 || (key >= 48 && key <= 57));
}

var nav6 = window.Event ? true : false;
function IsNombre(evt){
// Backspace = 8, Enter = 13, ’0′ = 48, ’9′ = 57, ‘.’ = 46
var key = nav6 ? evt.which : evt.keyCode;
return (key <= 13 || (key >= 64 && key <= 91) || (key >= 97 && key <= 122) || key == 20 || key == 32);
}

var nav7 = window.Event ? true : false;
function IsTelefono(evt){
// Backspace = 8, Enter = 13, ’0′ = 48, ’9′ = 57, ‘-’ = 45
var key = nav7 ? evt.which : evt.keyCode;
return (key <= 13 || (key >= 48 && key <= 57));
}

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