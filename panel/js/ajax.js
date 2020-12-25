$(document).ready(function(){
    alery('hola si sirvo')
    $.ajax({
        type: 'POST',
        url: 'php/cargar_mobeq.php'
    })
        .done(function(lista_moeq){
        $('#deco').html(lista_moeq);
    })
        .fail(function(response){
        alert('Hubo un errror al cargar la lista_me: '+ response );
    })
    $('#deco').on('change', function(){
        var id = $('#deco').val();
        $.ajax({
            type: 'POST',
            url: 'php/cargar_preme.php',
            data: {id: id}
        })
            .done(function(precio){
            
            /*var MiPrecio = document.getElementById("preme");
            MiPrecio.innerHTML = lista_pre;*/
            $('#preme').html(precio);
        })
            .fail(function(){
            alert('Hubo un errror al cargar los precios');
        })
    })
})
