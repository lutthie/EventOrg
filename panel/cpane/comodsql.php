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

$id_c = $_POST['id'];
$nombre = $_POST ['plati'];
$no_personas = $_POST['client'];
$tipo_comida = $_POST['tipoc'];
$acompanamento = $_POST['acomp'];
$bebida = $_POST['bebida'];
$monto = $_POST['pago'];
$empresa = $_POST['empr'];
$encargado = $_POST['encar'];
$telefono = $_POST['phone'];
$pago = $_POST['pago'];

$query = "UPDATE com SET comida = '$nombre', cantidad_persona ='$no_personas', tipo_comida='$tipo_comida', acompañamiento='$acompanamento', bebida='$bebida', monto='$monto', empresa='$empresa', encargado='$encargado', telefono='$telefono', pago= '$pago' WHERE id_c = '$id_c'";

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