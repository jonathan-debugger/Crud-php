
$(document).ready( function () {
    $('#myTable').DataTable({				
    	"ajax":{
		  "url":"inc/datajs.php",
    	"data":{"datos":"ID","datos":"Nombres","datos":"Apellidos", "datos":"Telefono", "datos":"Email", "datos":"Direccion", "datos":"ID"}
	}

 });
 
 });

function Editar(i){
$.ajax({
    data: {"data":"ID","data":"Nombres","data":"Apellidos", "data":"Telefono", "data":"Email", "data":"Direccion", "data":"ID"},
    type: "POST",
    dataType: "json",
    url:"inc/datajs.php",
})
 .done(function( data, textStatus, jqXHR ) {

   	$('#Cedula').val(data['data'][i][0]);
  	$('#Nombres').val(data['data'][i][1]);
  	$('#Apellidos').val(data['data'][i][2]);
  	$('#Telefono').val(data['data'][i][3]);
  	$('#Email').val(data['data'][i][4]);
  	$('#Direccion').val(data['data'][i][5]);
	$('#exampleModalLabel').text('Actualizar datos');

  $('#Estado').attr({'name':'Editar','value':''+data['data'][i][0]+''});
 })
 .fail(function( jqXHR, textStatus, errorThrown ) {
         console.log( "La solicitud a fallado: " +  textStatus);
});  

  };

  $('#Agregar').click(function(){
	$('#Cedula,#Nombres,#Apellidos,#Telefono,#Email,#Direccion').val("");
	$('#exampleModalLabel').text('Registra una nueva persona');
  $('#Estado').attr({'name':'Agregar','value':'Agregar'});
  });
