
<?php
class Conexion{
//Propiedades o  atributos

private $host;
private $user;
private $pass;
private $db;

public function conectar(){
$this->host='127.0.0.1';
$this->user='root';
$this->pass='';
$this->db='crud';

$con = new mysqli($this->host, $this->user, $this->pass, $this->db);
return $con;

}

}

/*
$conexion= new Conexion();
$con=$conexion->conectar();

$sql='select * from personas';
$resultado = $con->query($sql);



while($datos=$resultado->fetch_assoc()){
echo $datos['Nombres'];
}
*/

$con = new mysqli('127.0.0.1', 'root', '', 'crud');
$query=mysqli_query($con,"select  * from personas");
$q=mysqli_fetch_assoc($query);
foreach ($q as $key) {
	echo $key;
}
?>








































































