<?php
require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db= "ashi";
    $con=mysqli_connect($server,$user,"",$db) or die ("Error al conectar a la bd ");
    return $con;
}
$con=conectar();
$id_asi = $_POST['id'];
$nombre = $_POST ['event'];
$fecha = $_POST['date'];
$hora = $_POST['hour'];
$cliente = $_POST['client'];
$mobequip = $_POST['deco'];
$evento = $_POST['typee'];
$ubicacion = $_POST['locate'];
$musvid = $_POST['music'];
$comida = $_POST['food'];
$descripcion = '';
$total = '';
$query = "INSERT INTO asi(id_asi, nombreasi, descripcion, total, fecha, hora, CLI_id_correo, ME_id_m, EVE_id_e, UBI_id_u, MV_id_mv, COM_id_c) Values ('$id_asi','$nombre','$descripcion','$total','$fecha','$hora','$cliente','$mobequip','$evento','$ubicacion','$musvid','$comida')";
$resultado = $con -> query($query);
if($resultado){
    ob_start();
    require_once 'cotizacion.php';
    $html = ob_get_clean();
    $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
    $html2pdf->writeHTML($html);
    $html2pdf->Output('Cotizacion.pdf');
    //header("location: cotizacion.php");
    }

else{
    header("location: panelm.php");
}
?>