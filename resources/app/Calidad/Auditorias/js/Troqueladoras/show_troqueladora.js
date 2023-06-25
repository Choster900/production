$(document).ready(function () {
    llenar_tabla_auditoria({ id_reporte_aud_fcc012: parametros[6], tipo: parametros[5] })
    function llenar_tabla_auditoria(param) {
        var table = $("table#tabla_auditoria").DataTable({
            ajax: {
                method: "POST",
                url: base_url + "Calidad/Auditorias/get_reportes",
                data: param,
                complete: function (data) { },
            },
            columns: [
                { data: "id" },
                { data: "id_trello" },
                { data: "ot" },
                { data: "hora" },
                {
                    data: "producto",
                    render: function (producto) {
                        let res = producto != null ? producto : "----";
                        return (`<div class="wrap">` + res + `</div>`);
                    },
                },
                {
                    data: "operador",
                    render: function (operador) {
                        let res = operador != null ? operador : "----";
                        return (`<div class="wrap">` + res + `</div>`);
                    },
                },
                { data: "maquinas" },
                {
                    data: "id",
                    render: function (id) {
                        return (
                            `<button type="button" class="btn botones ver_detalle_reporte" style="background-color: #1f3558" data-toggle="modal" data-target="#modal_auditoria" id="" value="" data-codigo-detalle="` + id + `">
                                <img src="/Produccion/resources/img/Ver.png">
                            </button>
                            <button `+ (rol_id == 6 ? '' : rol_id == 1 ? '' : 'disabled') + ` class="eliminar btn btn-danger botones btnEliminar" style="background-color: red" id="` + id + `">
							    <img src="/Produccion/resources/img/Eliminar.png" alt="">
							</button>`
                        );
                    },
                },
            ],
            //bPaginate: false, //Ocultar paginación */
            bProcessing: true,
            order: [
                [0, "desc"]
            ],
            bAutoWidth: false,
            bLengthChange: false,
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
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            columnDefs: [{
                targets: "_all",
                sortable: false,
                ordering: false,
                searching: true,
            },],
        });
        var filas = $("#tabla_auditoria thead tr:eq(1) th");
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
        $("#tabla_producto_terminado_filter").remove(); //eliminando los filtros que pone datatable por defecto
        $(".dataTables_filter").remove(); //se eliminan manualmente por que la propiedad seraching:flase evita que se filtren los datos
    }

    const mostrar_contenido = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_contenido",
            data: param,
            success: function (response) {
                $("div#body-card-modal").empty();
                $("div#body-card-modal").append(response);
            }
        });
    }


    $(document).on("click", "#tabla_auditoria tbody tr button.ver_detalle_reporte", function () {

        let id = $(this).attr("data-codigo-detalle");
        mostrar_contenido({ codigo: id, tipo: parametros[5] });

        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/get_reportes",
            data: { id: $(this).attr("data-codigo-detalle"), tipo: parametros[5] },
            success: function (response) {
                let datos = JSON.parse(response);

                datos[0].hora != null ? $("#txtTiempo").val(datos[0].hora) : $("#txtTiempo").val("");
                datos[0].id_trello != null ? $("#txtIdTrello").val(datos[0].id_trello) : $("#txtIdTrello").val("");
                datos[0].producto != null ? $("#txtProducto").val(datos[0].producto) : $("#txtProducto").val("");
                datos[0].observaciones != null ? $("#txtObservaciones").val(datos[0].observaciones) : $("#txtObservaciones").val("");

                $("#slcOperador").attr("data-id", id)
                $("#txtObservaciones").attr("data-id", id);

                $("#slcMaquina").find('option[value="' + datos[0].maquinas + '"]').remove();
                $("#slcMaquina").prepend("<option value='" + datos[0].maquinas + "' selected='selected'>" + datos[0].maquinas + "</option>");

                $("#slcOperador").find('option[value="' + datos[0].operador + '"]').remove();
                $("#slcOperador").prepend("<option value='" + datos[0].operador + "' selected='selected'>" + datos[0].operador + "</option>");

            }
        });
    });

    $(document).on("click", "#tabla_auditoria tbody tr button.btnEliminar", function () {
        Swal.fire({
            title: '¿Esta seguro?',
            text: "La eliminación del documento " + $(this).attr("id") + " no podrá ser revertida!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, Eliminarlo!',
            cancelButtonText: 'No, Cancelar!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest("tr").remove();
                $.ajax({
                    type: "POST",
                    url: base_url + "Calidad/Auditorias/eliminar_detalle_auditoria",
                    data: { codigo_detalle: $(this).attr("id"), tabla: "detalle_fcc012" },
                    success: function (response) { },
                });
                Swal.fire('Eliminado!', 'Tu documento ha sido eliminado.', 'success')
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire('Cancelado', 'Tu archivo esta bien :)', 'error')
            }
        })
    });
});