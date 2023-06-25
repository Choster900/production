$(document).ready(function () {
    mostrar_hules();
    
    //metodo para mostrar datos en la tabla
    function mostrar_hules(params){
        var table = $("table#tabla_hules").DataTable({
            ajax: {
                method: "POST",
                url: "getHules",
                data: params,
                complete: function () { },
            },
            columns: [
                { data: "id" },
                { data: "nombre"},
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

                            `
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

        var filas = $("#tabla_hules thead tr:eq(1) th");
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
        $("#tabla_hules_filter").remove();//eliminando los filtros que pone datatable por defecto
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
                url: 'deleteHules',
                data: { id: $(this).attr("id") },
                success: function (response) {
                    $('#tabla_hules').dataTable().fnDestroy();//borrando la informacion de la tabla
                    mostrar_hules(); //volviendo a mostrar la tabla
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
        url: 'getHules',
        data: {id: $(this).attr("id")},
        success: function (response) {
            console.log("Entrando");
            console.log(response);
            let datos = JSON.parse(response)
            console.log(datos[0].id);

            console.log("Entrando");
            $("#nombre_maquina").val(datos[0].nombre);

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
                nombre: $("#nombre_maquina").val(),
                activo: $("#tipo").val(),
            }
            event.preventDefault();
            $.ajax({
                type: "post",
                url: 'setHules',
                data: data,
                success: function (response) {
                    document.getElementById("maquinas").reset();//borrando todos los campos 
                    $(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 
                    toastr["success"]("Hulle ha sido agregado con exito", "Agregado");//alerta
                    $('#tabla_hules').dataTable().fnDestroy();//borrando la informacion de la tabla
                    mostrar_hules(); //volviendo a mostrar la tabla
                    CierraPopup();
                }
            });
        } else {
            let data = {
                id: $("#maquinas").attr("data-id"),
                nombre: $("#nombre_maquina").val(),
                activo: $("#tipo").val(),
            }
            event.preventDefault();
            $.ajax({
                type: "post",
                url: 'updateHules',
                data: data,
                success: function (response) {
                    document.getElementById("maquinas").reset();//borrando todos los campos 
                    $(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 
                    toastr["success"]("Maquina ha sido modificada con exito", "Agregado");//alerta
                    $('#tabla_hules').dataTable().fnDestroy();//borrando la informacion de la tabla
                    mostrar_hules(); //volviendo a mostrar la tabla
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