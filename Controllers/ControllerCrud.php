<?php

require'../inc/metodosCrud.php';

class Controlador{

	public $cedula;
	public $nombres;
	public $apellidos;
	public $telefono;
	public $email;
	public $direccion;
	public $id;
	public $con;
	public $personas;

	public function __construct(){
		$this->con= new Conexion(); 
		$this->con=$this->con->conectar();

		$this->personas=new Personas();
		$this->Cedula=   mysqli_real_escape_string($this->con,$_POST['Cedula']); 
		$this->Nombres=  $_POST['Nombres']; 
		$this->Apellidos=$_POST['Apellidos']; 
		$this->Telefono= $_POST['Telefono']; 
		$this->Email=    $_POST['Email'];
		$this->Direccion=$_POST['Direccion']; 

	}

	public function ControllerCreate(){
		return $var=$this->personas->Create($this->Cedula,$this->Nombres,$this->Apellidos,$this->Telefono,$this->Email,$this->Direccion);
		// retornamos la consulta para que nos  devuelva un boleano  tru or  false  y asi validar si hubo un error
	}
	public function ControllerUdate($id){
		return $this->personas->Update($this->Cedula,$this->Nombres,$this->Apellidos,$this->Telefono,$this->Email,$this->Direccion,$id);
	}
	public function ControllerDelete($id){
		return $this->personas->Delete($id);
	}

}

$Controlador=new Controlador();

switch (TRUE) {
	case (isset($_POST['Agregar'])):

	$C=$Controlador->ControllerCreate();
    ($C)? header('Location: ../index.php?A=TRUE') : header('Location: ../index.php?=FALSE')  ;
	break;

	case(isset($_POST['Editar'])):

	$E=$Controlador->ControllerUdate($_POST['Editar']);
	($E)? header('Location: ../index.php?E=TRUE') : header('Location: ../index.php?E=FALSE')  ;
	break;

	case(isset($_GET['Delete'])):

	$D=$Controlador->ControllerDelete($_GET['Delete']);
	($D)? header('Location: ../index.php?D=TRUE') : header('Location: ../index.php?D=FALSE')  ;
	break;	
}



?>