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

$id_e = $_POST['id'];
$tematica = $_POST ['tematic'];
$no_personas = $_POST['client'];
$nombre = $_POST['event'];
$descripcion = $_POST['desc'];
$pago = $_POST['pago'];

$query = "UPDATE eve SET tematica = '$tematica', no_personas = '$no_personas', nombre= '$nombre', descripcion = '$descripcion', pagoeve = '$pago' WHERE id_e = '$id_e'";

$resultado = $con -> query($query);

if($resultado){
//header("location: login/login.php"); 
echo "Guardado correctamente";
}
else{
//header("location: cpexpError.php"); 
    echo "Error";
}

?>