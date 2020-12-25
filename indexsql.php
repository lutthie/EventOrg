<?php 

function conectar(){

$user="root";
$pass="";
$server="localhost";
$db= "ashi";
$con=mysqli_connect($server,$user,"",$db) or die ("Error al conectar a la bd ");

return $con;
}

$con=conectar();

$id_correo = $_POST ['email'];
$nombre = $_POST ['firstname'];
$contrasena = $_POST['password'];
$telefono = '';
$direccion = ''; 

$query = "INSERT INTO cli(id_correo, nombre_completo, contrasena, telefono, direccion) Values ('$id_correo','$nombre','$contrasena','$telefono','$direccion')";

$resultado = $con -> query($query);

if($resultado){
header("location: login/vistas/login.php"); 
//echo "Guardado correctamente";
}
else{
//header("location: cpexpError.php"); 
}

?>