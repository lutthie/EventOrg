<?php
require_once 'conexion.php';

function Seleccion($Valor) {
 $mysqli = getConn();
  
  $query = "SELECT * FROM EVE WHERE id_e = $Valor";
  $result = $mysqli->query($query);
    
  $retorno=0;
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $retorno = $row['pagoeve'];
      
  }

// mysqli -> close();  
return $retorno;
	
}        

if ($_POST['preve']){
    
   $Precio =  Seleccion($_POST['preve']);
    
    echo $Precio;
	
	
}

?>

