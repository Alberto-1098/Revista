$(document).ready(function(){
obtenerDatos();
option();
list();
$(document).on("click","#Agregar",function(){
    datosT=$(this).closest("tr");
    id= datosT.find('td:eq(0)').text();
    estado= datosT.find('td:eq(1)').text();
    $('#text-add').val(id);  
  
});

$(document).on("click","#traducir",function(){
    datosT=$(this).closest("tr");
    id= datosT.find('td:eq(0)').text();
    estado= datosT.find('td:eq(1)').text();
    $('#idtrad').val(id);  
   
  
});
$(document).on("click","#add",function(){
    var option = $('#op').val();
    var texto = $('#traduccion').val();
    var id= $('#idtrad').val();
    alert('presionado');
    $.ajax({
        url:'php1/insertar_OT.php',
        type:'POST',
        data:{option:option,texto:texto,id:id},
        success:function(response){

            alertify.success(response);          
            
            obtnerdatos();
        }
        
    });
   
   return false;
});

$(document).on("click","#eliminar",function(){
    datosT=$(this).closest("tr");
    id= datosT.find('td:eq(0)').text();
    estado= datosT.find('td:eq(2)').text();
    $('#modal12').val(id);
    $('#modal11').val(estado);  
    
 
});




$('#task-form').submit(function(){
    var titulo = $('#titulo').val();
    var option = $('#option').val();
    var descripcion = $('#descripcion').val();
    var texto = $('#texto').val();
    var id= $('#text-add').val();
    $.ajax({
        url:'php1/insertar_traduccion.php',
        type:'POST',
        data:{titulo:titulo,option:option,descripcion:descripcion,texto:texto,id:id},
        success:function(response){
            alert(response);
           
            alertify.success('Articulo Agregado');
            titulo = $('#titulo').val();
    $('#option').val("");
    $('#descripcion').val("");
    $('#texto').val("");
    $('#text-add').val("");
            obtnerdatos();
        }
        
    });
    obtenerDatos();
   return false;

});
});

function list(){
    $.ajax({
        url:'php1/option.php',
        type:'POST',
        success: function(data){
        $('#op').html(data);
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
function obtenerDatos(){
    $.ajax({
        url:'php1/listar_traducciones.php',
        method:'POST',
        success: function(data){

            $('#tabla').html(data);
        }

    });
}