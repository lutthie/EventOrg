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

$query = "DELETE FROM eve WHERE id_e ='$id_e'";

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