var tabla;

function init(){
    //evitar guardado doble.
    $("#form_producto").on("submit", function(e)
    {
        guardaryeditar(e);
    });

}

$(document).ready( function(){
            //mostramos la tabla
            tabla=$('#datos_productos').dataTable({
                "aProcessing": true,//Activamos el procesamiento del datatables
                "aServerSide": true,//Paginacion y filtrado realizados por el servidor
                dom: 'Bfrtip',//Definimos los elementos del control de tabla
                buttons: [
                            {extend:'copyHtml5',text:'Copiar al Portapapeles'}, //Renombrado de Boton.
                            {extend:'excelHtml5',text:'Descargar Excel'},
                            {extend:'csvHtml5',text:'Descargar CSV'},
                            {extend:'pdfHtml5',text:'Descargar PDF'}
                            
                            
                        ],
                        //llamamos al controlador de productos con la opcion
                "ajax":{
                    url: '../../controller/ctrl_productos.php?op=listar',
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
//guardar,editar(actualizar) producto.
function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#form_producto")[0]);

    $.ajax({
        url: "../../controller/ctrl_productos.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){

            $('#form_producto')[0].reset();
            $("#modal_producto").modal('hide');
            $('#datos_productos').DataTable().ajax.reload();

            swal.fire(
                'Registro!',
                'El registro fue exitoso.',
                'success'
            )
        }
    });

}


//editar
function editar(IDMATERIAL){
    console.log(IDMATERIAL);
}

//eliminar
function eliminar(IDMATERIAL){
    //console.log(IDMATERIAL);

    swal.fire({
                //Estructura de Alerta
                title: '¿Estas Seguro?',
                text: "No podras deshacer esta accion.",
                icon: 'error', //icono
                showCancelButton: true,
                confirmButtonText: 'Si, eliminar',
                cancelButtonText: 'No!, cancelar',
                reverseButtons: true
              }).then((result) => {
                if (result.isConfirmed) {
                //llamar controlador por $.post .
                    $.post("../../controller/ctrl_productos.php?op=eliminar",
                    {IDMATERIAL:IDMATERIAL},
                    function (data){
                    });

                    $("#datos_productos").DataTable().ajax.reload();

                  swal.fire(
                    'Eliminado!',
                    'Se ha eliminado correctamente este registro.',
                    'success' //icono
                  )
                } 
                  
                
              })
}

$(document).on("click","#btn_nuevo",function(){
    $("#modal_titulo").html("Registrar Producto")
    $("#modal_producto").modal('show')
})

init();