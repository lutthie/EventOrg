<?php
require_once 'conexion.php';

function Seleccion($Valor) {
 $mysqli = getConn();
  
  $query = "SELECT * FROM COM WHERE id_c = $Valor";
  $result = $mysqli->query($query);
    
  $retorno=0;
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $retorno = $row['monto'];
      
  }

// mysqli -> close();  
return $retorno;
	
}        

if ($_POST['prefood']){
    
   $Precio =  Seleccion($_POST['prefood']);
    
    echo $Precio;
	
	
}

?>

