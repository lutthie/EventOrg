$(document).on('ready',constructor);
function constructor(){
    PrecioTotal();
}

function PrecioTotal{
    $('#contenido').on('change','#preme,#preve,#prefood,#premusic',function(){
        var num1 = parseInt($('#preme').val());
        var num2 = parseInt($('#preve').val());
        var num3 = parseInt($('#prefood').val());
        var num4 = parseInt($('#premusic').val());
        if(isNaN(num1)){
            num1 = 0;
        }
        if(isNaN(num2)){
            num2 = 0;
        }
        if(isNaN(num3)){
            num3 = 0;
        }
        if(isNaN(num4)){
            num4 = 0;
        }
        $('#total').val(num1+num2+num3+num4);
    })
}