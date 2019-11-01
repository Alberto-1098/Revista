
$(document).ready(function(e){
    $('#task-form').submit(function(){
        var name = $('#estado').val();
        var codigo = $('#codigo').val();
        var nom = $('#nombre').val();
		$.ajax({
            url:'insertar_idiomas.php',
            type:'POST',
            data:{name:name,codigo:codigo,nombre:nom},
            success:function(response){
              
                $('#task-form').trigger('reset');
                alertify.success('Registro Exitoso');
            }
        });
       return false;

    });
$('#tabla').load('php1/listar_idiomas.php');

 
 var datosT,estado,codigo,nombre,id;
 $(document).on("click","#actualizar",function(){
     datosT=$(this).closest("tr");
     id= datosT.find('td:eq(0)').text();
     estado= datosT.find('td:eq(1)').text();
     codigo= datosT.find('td:eq(2)').text();
     nombre= datosT.find('td:eq(3)').text();
     $("#modal").val(id);
     $("#modal1").val(estado);
     $("#modal2").val(codigo);
     $("#modal3").val(nombre);
 });

 $(document).on("click","#eliminar",function(){
    datosT=$(this).closest("tr");
    id= datosT.find('td:eq(0)').text();
    
    nombre= datosT.find('td:eq(3)').text();
    $("#modal1").val(id);
    
    $("#modal11").val(nombre);
});
});
$(document).on("click","#edit",function(){
    var id= $('#modal').val();
    var name = $('#modal1').val();
    var codigo = $('#modal2').val();
    var nom = $('#modal3').val();
    
    $.ajax({
        url:'php1/modificar.php',
        type:'POST',
        data:{id,name,codigo,nombre:nom},
        success:function(response){
            alertify.success('Idioma Modificado');
            
            $('#task-form-modal').trigger('reset');
        }
    });
    return false;


});
$(document).on("click","#elim",function(){
    var id= $('#modal1').val();
    var nom = $('#modal11').val();
    
    $.ajax({
        url:'php1/eliminar.php',
        type:'POST',
        data:{id},
        success:function(response){
            alertify.success('Idioma Eliminado');
            
            $('#task-form-modal').trigger('reset');
        }
    });
    return false;

});

$(document).on("click","#activar",function(){
    var id=$('#activar').val();
    alert(id);
});


