<?php
require('metodosCrud.php');
$personas= new Personas(); 
$personas=$personas->Read();

$i=0;
$datos=array();//importante  declarar el array  
while($data=$personas->fetch_assoc()){

  	$datos[]=Array(  
		'0' => $data['ID'],
		'1' => $data['Nombres'],
		'2' => $data['Apellidos'],
		'3' => $data['Telefono'], 
		'4' => $data['Email'],
		'5' => $data['Direccion'],
		'6' => '<span><a class="btn btn-danger" onclick="return confirm("estas seguro  dde quere borar el registro");"  href="Controllers/ControllerCrud.php?Delete='.$data['ID'].'">Eliminar</a>
				<buttom onclick="Editar('.$i.');" class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Editar</buttom></span>'
	);

$i++;

}	
  

$data = array(
	"draw" =>   1,
	"recordsTotal" => $personas->num_rows,
	"recordsFiltered" => $personas->num_rows, 
	"data" => $datos 
);
print json_encode($data);

?>
