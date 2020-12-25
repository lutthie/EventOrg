<!DOCTYPE html>
<html>
    <head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    </head>
	
<body>
    <select id="ammSeleccion">
        <option value='' disabled selected>Catalogo </option>
        <option value='1'>Relojes</option>
        <option value='2'>Telefonos</option>
        <option value='3'>Computadoras</option>
        <option value='4'>Celulares</option>
        <option value='5'>Cuchillos</option>
     </select>
<br/>
    <p id="preme">
        <input type="text" id="PRECIO" values ="">
    </p>

</body>
</html>

<script>
	$(document).ready(function(){
	$('#ammSeleccion').change(function(){
		var dato = $(this).val();
        // alert(dato);
			
            $.post('aleksei.php', { luisa: dato }, function(data){
                
              //  alert('valor de retorno: '+data);
                
			var texto =  '<input type="number" id="PRECIO" value ="'+data.trim()+'">';
			 document.getElementById("preme").innerHTML = texto ;
		
		});
	});
});
</script>

		
			