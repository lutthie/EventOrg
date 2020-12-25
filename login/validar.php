<?php

$usuario=$_POST['email'];
$contrasena=$_POST['password'];
session_start();
$_SESSION['email']=$usuario;


$conexion=mysqli_connect("localhost","root","","ashi");

$consulta="SELECT*FROM cli where id_correo='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../panel/panel.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>