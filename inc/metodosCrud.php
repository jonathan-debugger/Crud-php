<?php
require  '../Conexion/conexion.php';


class Personas{
	public $con;
	public $resultado;
	public function __construct(){

		$this->con= new Conexion();
		$this->con= $this->con->conectar();  

	}

	//declaramos  los  objetos
	public function Create($cedula,$nombres,$apellidos,$telefono,$email,$direccion){	
		$sql="INSERT INTO personas (ID,Nombres,Apellidos,Telefono,Email,Direccion)
		VALUES(".$cedula.",'".$nombres."','".$apellidos."','".$telefono."','".$email."','".$direccion."')";
		return $this->con->query($sql);
		 // retornamos la consulta para que nos  devuelva un boleano  tru or  false  y asi validar si hubo un error
	}

	public function Read(){
		$sql='select * from  personas';
		return $this->con->query($sql);
		  
	}

	public function Update($cedula,$nombres,$apellidos,$telefono,$email,$direccion,$id){
		$sql="UPDATE personas SET  ID='".$cedula."',Nombres='".$nombres."',Apellidos='".$apellidos."',Telefono='".$telefono."',
		Email='".$email."', Direccion='".$direccion."' WHERE ID='".$id."' ";
		return $this->con->query($sql);
		
	}

	public function Delete($cedula){
		$sql="DELETE FROM personas WHERE ID='".$cedula."'";
		return $this->con->query($sql);
		 
	}


}


?>
