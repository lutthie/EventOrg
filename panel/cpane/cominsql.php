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

$query = "INSERT INTO com(id_c, comida, cantidad_persona, tipo_comida, acompañamiento, bebida, monto, empresa, encargado, telefono, pago) Values ('$id_c','$nombre','$no_personas','$tipo_comida','$acompanamento','$bebida','$monto','$empresa','$encargado','$telefono','$pago')";

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