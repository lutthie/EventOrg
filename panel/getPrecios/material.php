<?php
require_once 'conexion.php';

function Seleccion($Valor) {
 $mysqli = getConn();
  
  $query = "SELECT * FROM ME WHERE id_m = $Valor";
  $result = $mysqli->query($query);
    
  $retorno=0;
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $retorno = $row['mepago'];
      
  }

// mysqli -> close();  
return $retorno;
	
}        

if ($_POST['preme']){
    
   $Precio =  Seleccion($_POST['preme']);
    
    echo $Precio;
	
	
}

?>

