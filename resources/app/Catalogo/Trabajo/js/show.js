$(document).ready(function () {
    mostrar_trabajos();
    
    //metodo para mostrar datos en la tabla
    function mostrar_trabajos(params){
        var table = $("table#tabla_trabajo").DataTable({
            ajax: {
                method: "POST",
                url: "getTrabajo",
                data: params,
                complete: function () { },
            },
            columns: [
                { data: "id" },
                { data: "descripcion"},
                { data: "activo",
                      render:function(activo){
                          return(
                                 (activo== 0 ? "Inactivo" : "Activo")
                          );
                      } },
                {
                    data: "id",
                    render: function (id) {
                        return (
                            `<button id="` + id + `" type="button" class="btn ver_ficha botones btnModificarDocumento" style="background-color: #1f3558" data-toggle="modal" data-target="#exampleModalLong">
                                Ver <img src="`+ruta_server +`imgToServer/icons/Ver.png">
                            </button>

                            <button  id="` + id + `" class="eliminar btn btn-danger botones btnEliminarDocumento" style="background-color: red" id="btnEliminar">
                                Eliminar <img src="`+ruta_server +`imgToServer/icons/Eliminar.png" alt="">
                            </button>`
                        );
                    },
                }
            ],
            sDom: '<"top"fli>t<"bottom"p><"clear">f',
            bProcessing: true,
            //order: [[0, "asc"]],
            bAutoWidth: false,
            bLengthChange: false,
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            language: {
                decimal: "",
                emptyTable: "No hay registros",
                info: "Mostrando _TOTAL_ registros",
                infoEmpty: "Mostrando desde el 0 al 0 del total de  0 registros",
                infoFiltered: "(Filtrados del total de _MAX_ registros)",
                infoPostFix: "",
                thousands: ",",
                lengthMenu: "",

                loadingRecords: "Cargando...",
                search: "Filtrar:",
                zeroRecords: "No se ha encontrado nada  atraves de ese filtrado.",
                aria: {
                    sortAscending: ": activate to sort column ascending",
                    sortDescending: ": activate to sort column descending",
                },
            },
            columnDefs: [
                {
                    targets: "_all",
                    sortable: false,
                    ordering: false,
                    searching: true,
                },
            ],

        });

        var filas = $("#tabla_trabajo thead tr:eq(1) th");
        filas.each(function (i) {
            $("input", this).on("keyup change", function () {
                if (table.column(i).search() !== this.value) {
                    table.column(i).search(this.value).draw();
                }
            });
            $("select", this).on("change", function () {
                table.column(i).search(this.value).draw();
            });
        });
        $("#tabla_trabajo_filter").remove();//eliminando los filtros que pone datatable por defecto
        $(".dataTables_filter").remove();//se eliminan manualmente por que la propiedad seraching:flase evita que se filtren los datos
    }
    


/**------------------------------------------------------------------------------------- */
/**Inicializando Select */
$('.js-select-basic-singles-catalogos').select2({
    width: 'resolve',
    dropdownAutoWidth: true,
    theme: "bootstrap4",
    dropdownCssClass: "myFont",
});
/**------------------------------------------------------------------------------------- */
/** BOTONES */
/**BOTON AGREGAR, verificar el botón para llamar el modal. */
/**Lee el ID del formulario  */
let name_to_component = $("#maquinas").attr("data-table")
$(".new-name").text(name_to_component)

$("#btnAgregarDocumento").click(function (e) {
    /**Agrega la información tanto al titulo y al botón */
    document.getElementById("maquinas").reset();//borrando todos los campos 
    $(".new-state").text("Agregar ")
    $(".opcion").attr("dat-opcion", "Agregar")
});

/** BOTON ELIMINAR  */
$(document).on("click", ".btnEliminarDocumento", function () {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {

        if (result.isConfirmed) {
            Swal.fire('Deleted!','Your file has been deleted.','success')
            $(this).closest("tr").remove();

            $.ajax({
                type: "POST",
                url: 'deleteTrabajo',
                data: { id: $(this).attr("id") },
                success: function (response) {
                    $('#tabla_trabajo').dataTable().fnDestroy();//borrando la informacion de la tabla
                    mostrar_trabajos(); //volviendo a mostrar la tabla
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            )
        }
    })
});

/** BOTON MODIFICAR  */
$(document).on("click", ".btnModificarDocumento", function () {
    $(".new-state").text("Modificar ")
    $(".opcion").attr("dat-opcion", "Modificar")
    $("#maquinas").attr("data-id", $(this).attr("id"))

    $.ajax({
        type: "POST",
        url: 'getTrabajo',
        data: {id: $(this).attr("id")},
        success: function (response) {
            console.log("Entrando");
            console.log(response);
            let datos = JSON.parse(response)
            console.log(datos[0].id);

            console.log("Entrando");
            $("#nombre_maquina").val(datos[0].descripcion);

            $("#tipo option[value="+datos[0].activo+"]").attr("selected",true);
            $(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 

        }
    });

});

  /* FIN DE BOTONES*/

  /**FORMULARIO DE MAQUINA  */
  $('#maquinas').validetta({//validetta - valida que no existan campos vacios

    realTime: true,
    display: 'inline',
    errorTemplateClass: 'validetta-inline',
    onValid: function (event) {

        if ($(".opcion").attr("dat-opcion") == "Agregar") {
            let data = {
                descripcion: $("#nombre_maquina").val(),
                activo: $("#tipo").val(),
            }
            event.preventDefault();
            $.ajax({
                type: "post",
                url: 'setTrabajo',
                data: data,
                success: function (response) {
                    document.getElementById("maquinas").reset();//borrando todos los campos 
                    $(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 
                    toastr["success"]("Trabajo ha sido agregado con exito", "Agregado");//alerta
                    $('#tabla_trabajo').dataTable().fnDestroy();//borrando la informacion de la tabla
                    mostrar_trabajos(); //volviendo a mostrar la tabla
                    CierraPopup();
                }
            });
        } else {
            let data = {
                id: $("#maquinas").attr("data-id"),
                descripcion: $("#nombre_maquina").val(),
                activo: $("#tipo").val(),
            }
            event.preventDefault();
            $.ajax({
                type: "post",
                url: 'updateTrabajo',
                data: data,
                success: function (response) {
                    document.getElementById("maquinas").reset();//borrando todos los campos 
                    $(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 
                    toastr["success"]("Maquina ha sido modificada con exito", "Agregado");//alerta
                    $('#tabla_trabajo').dataTable().fnDestroy();//borrando la informacion de la tabla
                    mostrar_trabajos(); //volviendo a mostrar la tabla
                    CierraPopup();
                }
            });
        }

    }
});

function CierraPopup() {
    $('#cerrarModal').click(); //Esto simula un click sobre el botón close de la modal, por lo que no se debe preocupar por qué clases agregar o qué clases sacar.
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
    }

});