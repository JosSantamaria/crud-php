var tabla;

function init(){
    //TODO evitar guardado doble.
    $("#form_cliente").on("submit", function(e)
    {
        guardaryeditar(e);
    });

}

$(document).ready( function(){
            //mostramos la tabla
            tabla=$('#datos_clientes').dataTable({
                "aProcessing": true,//Activamos el procesamiento del datatables
                "aServerSide": true,//Paginacion y filtrado realizados por el servidor
                dom: 'Bfrtip',//Definimos los elementos del control de tabla
                buttons: [
                            {extend:'copyHtml5',text:'Copiar al Portapapeles'}, //Renombrado de Boton.
                            {extend:'excelHtml5',text:'Descargar Excel'},
                            {extend:'csvHtml5',text:'Descargar CSV'},
                            {extend:'pdfHtml5',text:'Descargar PDF'}
                            
                            
                        ],
                        //llamamos al controlador de clientes con la opcion
                "ajax":{
                    url: '../../controller/ctrl_clientes.php?op=listar',
                    type : "get",
                    dataType : "json",
                    error: function(e){
                        console.log(e.responseText);	
                    }
                },
                "bDestroy": true,
                "responsive": true,
                "bInfo":true,
                "iDisplayLength": 10,//Por cada 10 registros hace una paginacion
                "order": [[ 0, "asc" ]],//Ordenar (columna,orden)
                "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            }).DataTable();

        }
    )
//TODO guardar,editar(actualizar) cliente.
function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#form_cliente")[0]);

    $.ajax({
        url: "../../controller/ctrl_clientes.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){

            $('#form_cliente')[0].reset();
            $("#modal_cliente").modal('hide');
            $('#datos_clientes').DataTable().ajax.reload();

            swal.fire(
                'Registro!',
                'El registro fue exitoso.',
                'success'
            )
        }
    });

}


// TODO editar
function editar(IDCLIENTE){
    console.log(IDCLIENTE);
    //TODO renombre modal
    $("#modal_titulo").html('Editar Registro');

    //TODO consulta de datos.
    $.post("../../controller/ctrl_clientes.php?op=mostrar",{IDCLIENTE:IDCLIENTE},function(data){
        
        data = JSON.parse(data);
        
        $('#IDCLIENTE').val(data.IDCLIENTE);
        $('#RAZON_SOCIAL').val(data.RAZON_SOCIAL);
        $('#RFC').val(data.RFC);
    });


    //TODO mostrar
    $("#modal_cliente").modal('show');
}

//TODO eliminar
function eliminar(IDCLIENTE){

    swal.fire({
                title: '¿Estas Seguro?',
                text: "No podras deshacer esta accion.",
                icon: 'error', 
                showCancelButton: true,
                confirmButtonText: 'Si, eliminar',
                cancelButtonText: 'No, cancelar',
                reverseButtons: true
              }).then((result) => {
                if (result.isConfirmed) {
                    $.post("../../controller/ctrl_clientes.php?op=eliminar",
                    {IDCLIENTE:IDCLIENTE},
                    function (data){
                    });

                    $("#datos_clientes").DataTable().ajax.reload();

                  swal.fire(
                    'Eliminado!',
                    'Se ha eliminado correctamente este registro.',
                    'success' 
                  )
                } 
                  
                
              })
}

$(document).on("click","#btn_nuevo_cliente",function(){
    
    $("#modal_titulo").html("Registrar cliente");
    $('#form_cliente')[0].reset();
    $("#modal_cliente").modal('show');
})

init();