<?php
require_once 'conexion.php';

function Seleccion($Valor) {
 $mysqli = getConn();
  
  $query = "SELECT * FROM MV WHERE id_mv = $Valor";
  $result = $mysqli->query($query);
    
  $retorno=0;
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $retorno = $row['pagomv'];
      
  }

// mysqli -> close();  
return $retorno;
	
}        

if ($_POST['premusic']){
    
   $Precio =  Seleccion($_POST['premusic']);
    
    echo $Precio;
	
	
}

?>

