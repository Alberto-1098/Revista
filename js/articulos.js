
$(document).ready(function(e){
    $('#task-form').submit(function(){
        var name = $('#estado').val();
        var codigo = $('#codigo').val();
        var nom = $('#nombre').val();
		$.ajax({
            url:'php1/insertar_articulos.php',
            type:'POST',
            data:{name:name,codigo:codigo},
            success:function(response){
                alertify.success('listo');
                obtnerdatos();
                

            }
        });
       return false;

    });
    
//$('#tabla').load('php1/listar_articulos.php');
obtnerdatos();
 
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
    
    nombre= datosT.find('td:eq(2)').text();
    $("#modal12").val(id);
    $("#modal11").val(nombre);
});
});
$(document).on("click","#edit",function(){
    var id= $('#modal').val();
    var name = $('#modal1').val();
    var codigo = $('#modal2').val();
    $.ajax({
        url:'php1/modificar_articulos.php',
        type:'POST',
        data:{id,name,codigo},
        success:function(response){
            alert(response);
            var resp= eval(response);
            alert (resp instanceof Array);
            $('#task-form-modal').trigger('reset');
            obtnerdatos();
        }
    });
    return false;


});
$(document).on("click","#elim",function(){
    var id= $('#modal12').val();
    $.ajax({
        url:'php1/eliminar_articulos.php',
        type:'POST',
        data:{id:id},
        success:function(response){
            alert(response);            
            $('#task-form-modal').trigger('reset');
            obtnerdatos();
        }
    });
    return false;

});

function obtnerdatos(){
    $.ajax({
        url:"php1/listar_articulos.php",
        method:'POST',
        success:function(data){
            $('#tabla').html(data);
        }

    });
}


