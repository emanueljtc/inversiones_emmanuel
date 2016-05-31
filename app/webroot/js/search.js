$(document).ready(function(){
  $("#s").autocomplete({
    minLength: 2,
    select: function(event, ui){
     $("#s").val(ui.item.label);

  },
  source: function(request, response) {
           $.ajax({

               url: location.href +"personals/searchjson",
               data: {
                   term: request.term
               },
               dataType: "json",
               success: function(data){
                   response($.map(data, function(el, index){
                       return {
                           value: el.Platillo.nombre,
                           nombre: el.Platillo.nombre,
                           foto: el.Platillo.foto,
                           foto_dir: el.Platillo.foto_dir
                       };
                   }));
               }
           });
       }
 }).data("ui-autocomplete")._renderItem = function(ul, item){
   return $("<li></li>")
   .data("item.autocomplete", item)
   .append("<a>" + basePath + item.dni + "/" + item.name +  "</a>")
   .appendTo(ul)

 }
});
