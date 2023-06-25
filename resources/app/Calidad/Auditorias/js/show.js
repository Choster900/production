$(document).ready(function () {
    llenar_tabla_auditoria()

    function llenar_tabla_auditoria() {
        var table = $("table#tabla_auditoria_index").DataTable({
            ajax: {
                method: "POST",
                url: "Auditorias/mostrar_tabla_index",
                complete: function (data) { },
            }, //imprimimos las columnas en un div para poder controlar el espacio en cada td y asi poder colocarlos en toda la pantalla los 10 td
            columns: [
                { data: "codigo" },
                { data: "fecha_reporte" },
                { data: "nombre" },
                { data: "turno" },
                { data: "tipo" },
                {
                    data: {
                        codigo: 'codigo.0',
                        tipo: 'tipo.0',
                    },
                    render: function (data) {//En el boton de ver donde dice tipo_maquina vamos a modificarlo en un futuro cuando existan mas tipos de maquinas en todoo caso ahi diria (imprent,pegadora,troqueladora)
                        return (
                            `<a type="button" class="btn ver_ficha botones" style="background-color: #1f3558" href="` + base_url + `calidad/auditorias/detalle_auditoria/`+data.tipo+`/` + data.codigo + `">
                                <img src="/Produccion/resources/img/Ver.png">
                            </a>
                            <button `+(rol_id == 6 ? '' : rol_id == 1 ? '':'disabled') +` class="eliminar btn btn-danger botones btnEliminar" style="background-color: red" id="`+data.codigo+`">
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
        var filas = $("#tabla_auditoria_index thead tr:eq(1) th");
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

    $(document).on("click", "#tabla_auditoria_index tbody tr button.btnEliminar", function () {
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
                    url: "Auditorias/eliminar_auditoria",
					data: { id_auditoria: $(this).attr("id") },
					success: function (response) { },
				});
				Swal.fire('Eliminado!', 'Tu documento ha sido eliminado.', 'success')
			} else if (result.dismiss === Swal.DismissReason.cancel) {
				Swal.fire('Cancelado', 'Tu archivo esta bien :)', 'error')
			}
		})
	});

});