getTable();
function getTable() {
	var table = $("table#tabla_catalogos").DataTable({
		ajax: {
			method: "POST",
			url: "getTrello",
			complete: function (data) {},
		},
		columns: [
			{ data: "codigo_maquina" },
			{ data: "codigoBoard" },
			{
				data: null,
				render: function (data, type, row, meta) {
					return (
						`<table class="justify-content-center mx-auto">
                        <tr>
                            <td>
                                <label for="lista_terminado">Terminado</label><br>
                                <input type="text" id="lista_terminado" value="` +
						(row.lista_terminado == null ? " " : row.lista_terminado) +
						`" disabled >
                            </td>
                            <td>
                                <label for="lista_planificado">Planificado</label><br>
                                <input type="text" id="lista_planificado" value="` +
						(row.lista_planificado == null ? " " : row.lista_planificado) +
						`" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="lista_suspendida">Suspendida</label><br>
                                <input type="text" id="lista_suspendida" value="` +
						(row.lista_suspendida == null ? " " : row.lista_suspendida) +
						`" disabled>
                            </td>
                            <td>
                                <label for="lista_proceso">Proceso</label><br>
                                <input type="text" id="lista_proceso" value="` +
						(row.lista_proceso == null ? " " : row.lista_proceso) +
						`" disabled>
                            </td>
                        </tr>
                    </table>`
					);
				},
			},
			{
				data: null,
				render: function (data, type, row, meta) {
					let vcodigo_producto =
						row.codigo_producto == null ? "" : row.codigo_producto;
					return (
						`<table class="justify-content-center mx-auto">
                        <tr>
                            <td><input type="text" value="` +
						(row.codigo_producto == null ? " " : row.codigo_producto) +
						`"disabled></td>
                        </tr>
                        <tr>
                            <td><input type="text" value="` +
						(row.label_2 == null ? " " : row.label_2) +
						`"disabled></td>
                        </tr>
                        <tr>
                            <td><input type="text" value="` +
						(row.label_3 == null ? " " : row.label_3) +
						`"disabled></td>
                        </tr>
                        <tr>
                            <td><input type="text" value="` +
						(row.label_4 == null ? " " : row.label_4) +
						`"disabled></td>
                        </tr>
                    </table>
                    `
					);
				},
			},
			{
				data: "ID",
				render: function (ID) {
					return (
						`<button id="` +
						ID +
						`" type="button" class="btn ver_ficha botones btnModificarDocumento" style="background-color: #1f3558" data-toggle="modal" data-target="#exampleModalLong">
                                Ver <img src="` +
						ruta_server +
						`imgToServer/icons/Ver.png">
                            </button>

                            <button  id="` +
						ID +
						`" class="eliminar btn btn-danger botones btnEliminarDocumento" style="background-color: red" id="btnEliminar">
                                Eliminar <img src="` +
						ruta_server +
						`imgToServer/icons/Eliminar.png" alt="">
                            </button>`
					);
				},
			},
		],
		bPaginate: true, //Ocultar paginación
		sDom: '<"top"fli>t<"bottom"p><"clear">f',
		bProcessing: true,
		bAutoWidth: true,
		searching: true,
		info: true,
		order: [[1, "desc"]],
		language: {
			//lenguaje - si no se configura esta parte por default muestra en ingles la iformacion
			decimal: "",
			emptyTable: "No hay registros",
			info: " _TOTAL_ registros",
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
	});
	var filas = $("#tabla_catalogos thead tr:eq(1) th"); //programando filtro
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
	$(".dataTables_filter").remove(); //se eliminan manualmente por que la propiedad seraching:flase evita que se filtren los datos
}

/**------------------------------------------------------------------------------------- */
/**Inicializando Select */
$(".js-select-basic-singles-catalogos").select2({
	width: "resolve",
	dropdownAutoWidth: true,
	theme: "bootstrap4",
	dropdownCssClass: "myFont",
});
/**------------------------------------------------------------------------------------- */

/* BOTONES*/
$(".new-name").text("Tablero");

$("#btnAgregarDocumento").click(function (e) {
	/**Agrega la información tanto al titulo y al botón */
	document.getElementById("maquinas").reset(); //borrando todos los campos
	$(".new-state").text("Agregar ");
	$(".opcion").attr("dat-opcion", "Agregar");
	//$("#codigo_operador").attr("disabled", false);
	$("#nombre_maquina option[value='']").attr("selected",true);
});


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
				url: 'deleteTrello',
				data: { ID: $(this).attr("id") },
				success: function (response) {
					$("#tabla_catalogos").dataTable().fnDestroy(); //borrando la informacion de la tabla
					getTable(); //volviendo a mostrar la tabla
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

$(document).on("click", ".btnModificarDocumento", function () {
	$(".new-state").text("Modificar ")
	$(".opcion").attr("dat-opcion", "Modificar")
	$("#maquinas").attr("data-id", $(this).attr("id"))

	$.ajax({
		type: "POST",
		url: 'getTrello',
		data: {id: $(this).attr("id")},
		success: function (response) {
			console.log(response);
			let datos = JSON.parse(response)
			/**Listas */
			$("#id_trello").val(datos[0].ID);
			$("#list_terminado").val(datos[0].lista_terminado);
			$("#list_planificado").val(datos[0].lista_planificado);
			$("#list_suspendida").val(datos[0].lista_suspendida);
			$("#list_proceso").val(datos[0].lista_proceso);

			/**Label */
			$("#codigo_producto").val(datos[0].codigo_producto);
			$("#label_2").val(datos[0].label_2);
			$("#label_3").val(datos[0].label_3);
			$("#label_4").val(datos[0].label_3);

			$("#codigo_tablero").val(datos[0].codigoBoard);
			$("#nombre_maquina option[value="+datos[0].codigo_maquina+"]").attr("selected",true);
			$(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 

		}
	});

});

$('#maquinas').validetta({//validetta - valida que no existan campos vacios

	realTime: true,
	display: 'inline',
	errorTemplateClass: 'validetta-inline',
	onValid: function (event) {

		if ($(".opcion").attr("dat-opcion") == "Agregar") {
			let data = {
				codigoBoard: $("#codigo_tablero").val(),
				lista_terminado: $("#list_terminado").val(),
				lista_planificado: $("#list_planificado").val(),
				lista_suspendida: $("#list_suspendida").val(),
				lista_proceso: $("#list_proceso").val(),
				codigo_producto: $("#codigo_producto").val(),
				label_2: $("#label_2").val(),
				label_3: $("#label_3").val(),
				label_4: $("#label_4").val(),
				codigo_maquina : $("#nombre_maquina").val(),
			}
			event.preventDefault();
			$.ajax({
				type: "post",
				url: 'setTrello',
				data: data,
				success: function (response) {
					document.getElementById("maquinas").reset();//borrando todos los campos 
					$(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 
					toastr["success"]("El tablero ha sido agregado con exito", "Agregado");//alerta
					$('#tabla_catalogos').dataTable().fnDestroy();//borrando la informacion de la tabla
					getTable(); //volviendo a mostrar la tabla
					CierraPopup();
				}
			});
		} else {
			let data = {
				ID: $("#id_trello").val(),
				codigoBoard: $("#codigo_tablero").val(),
				lista_terminado: $("#list_terminado").val(),
				lista_planificado: $("#list_planificado").val(),
				lista_suspendida: $("#list_suspendida").val(),
				lista_proceso: $("#list_proceso").val(),
				codigo_producto: $("#codigo_producto").val(),
				label_2: $("#label_2").val(),
				label_3: $("#label_3").val(),
				label_4: $("#label_4").val(),
				codigo_maquina : $("#nombre_maquina").val(),
			}
			event.preventDefault();
			$.ajax({
				type: "post",
				url: 'updateTrello',
				data: data,
				success: function (response) {
					document.getElementById("maquinas").reset();//borrando todos los campos 
					$(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco 
					toastr["success"]("El tablero ha sido modificada con exito", "Agregado");//alerta
					$('#tabla_catalogos').dataTable().fnDestroy();//borrando la informacion de la tabla
					getTable(); //volviendo a mostrar la tabla
					CierraPopup();
				}
			});
		}

	}
});

function CierraPopup() {
	$("#cerrarModal").click(); //Esto simula un click sobre el botón close de la modal, por lo que no se debe preocupar por qué clases agregar o qué clases sacar.
	$(".modal-backdrop").remove(); //eliminamos el backdrop del modal
}
