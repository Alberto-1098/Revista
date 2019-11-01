$(document).ready(function(){
  obtenerDatos();
  option();
  agregar();
  $(document).on("click","#btn-trad",function(){
    let id= this.value;
    
    $.ajax({
        url:'php1/consul.php',
        method:'POST',
        data:{id:id},
        success: function(data){
            $('#prueba').html(data);
        }

    });
});

$(document).on("click","#buscar",function(){
    var id= $('#idi').val();    
    $.ajax({
        url:'php1/li.php',
        type:'POST',
        data:{id:id},
        success: function(data){
            alertify.success('listo');
            $('.tra2').html(data);
            
        }

    });
    return false;

});
});

function agregar(){
    var dato=$('#option').val();
    $('#idi').val(dato);
    
}
function obtenerDatos(){
    $.ajax({
        url:'php1/li.php',
        method:'POST',
        success: function(data){

            $('#trad').html(data);
        }

    });
}

function option(){
    $.ajax({
        url:'php1/option.php',
        method:'POST',
        success: function(data){

            $('#option').html(data);
        }

    });
}

