$(document).ready(function () {
	var data = {
		//id: $(".active").attr("role"),
		//maquina: $(".active").attr("id"),
	};

	$("#" + $(".active").attr("role") + "").addClass("in show active");

	$(".active").attr("role") == "modulos" ? llenar_tabla_modulos(data) : "";
	$(".active").attr("role") == "submodulos" ? llenar_tabla_submodulos() : "";

	$(".todas_las_maquinas").click(function () {
		//data.id = $(this).attr("role");
		//data.maquina = $(this).attr("id");

		if ($(this).attr("role") == "modulos") {
			$(".btn_nombre").text("Agregar Modulo");
			$(".opcion").attr("dat-opcion", "Agregar");
			$("#btnAgregarDocumento").attr("data-target", "#exampleModalLong");
			$("table#tabla_modulo").dataTable().fnDestroy();
			//console.log("Estamos aca");
			llenar_tabla_modulos(data);
		} else if ($(this).attr("role") == "submodulos") {
			$(".btn_nombre").text("Agregar Sub-modulo");
			$(".opcion").attr("dat-opcion", "Agregar");
			$("#btnAgregarDocumento").attr("data-target", "#exampleModalSubmodulo");
			$("table#tabla_submodulos").dataTable().fnDestroy();
			llenar_tabla_submodulos();
		}
	});

	$("#btnAgregarDocumento").click(function (e) {
		/**Agrega la información tanto al titulo y al botón */
		document.getElementById("maquinas").reset(); //borrando todos los campos
		document.getElementById("submodulo").reset(); //borrando todos los campos
		$(".opcion").attr("dat-opcion", "Agregar");
	});

	function llenar_tabla_modulos(param) {
		var table = $("table#tabla_modulo").DataTable({
			ajax: {
				method: "POST",
				url: "getModulos",
				data: param,
				complete: function (data) {},
			}, //imprimimos las columnas en un div para poder controlar el espacio en cada td y asi poder colocarlos en toda la pantalla los 10 td
			columns: [
				{ data: "id" },
				{ data: "modulo" },
				{
					data: "id",
					render: function (id) {
						return (
							`<button id="` +
							id +
							`" type="button" class="btn ver_ficha botones btnModificarDocumento" style="background-color: #1f3558" data-toggle="modal" data-target="#exampleModalLong">
                                Ver <img src="` +
							ruta_server +
							`imgToServer/icons/Ver.png">
                            </button>

                            <button  id="` +
							id +
							`" class="eliminar btn btn-danger botones btnEliminarDocumento" style="background-color: red" id="btnEliminar" data-target="#exampleModalLong">
                                Eliminar <img src="` +
							ruta_server +
							`imgToServer/icons/Eliminar.png" alt="">
                            </button>`
						);
					},
				},
			],
			bPaginate: false, //Ocultar paginación
			sDom: '<"top"fli>t<"bottom"p><"clear">f',
			bProcessing: true,
			bAutoWidth: false,
			searching: false,
			info: false,
			order: [[0, "asc"]],
			language: {
				decimal: "",
				emptyTable: "No hay registros",
				info: "Mostrando _TOTAL_ registros",
				infoEmpty: "Mostrando desde el 0 al 0 del total de  0 registros",
				infoFiltered: "(Filtrados del total de _MAX_ registros)",
				infoPostFix: "",
				thousands: ",",
				lengthMenu: "Mostrar _MENU_ registros por página",
				loadingRecords: "Cargando...",
				search: "Filtrar:",
				zeroRecords: "No se ha encontrado nada  atraves de ese filtrado.",

				aria: {
					sortAscending: ": activate to sort column ascending",
					sortDescending: ": activate to sort column descending",
				},
			},
		});
	}
	/**Fin de llenar modulos */
	/**Inicio de submodulos */
	function llenar_tabla_submodulos() {
		var table = $("table#tabla_submodulos").DataTable({
			ajax: {
				method: "POST",
				url: "getSubModulos",
				data: null,
				complete: function (data) {},
			}, //imprimimos las columnas en un div para poder controlar el espacio en cada td y asi poder colocarlos en toda la pantalla los 10 td
			columns: [
				{ data: "id" },
				{ data: "modulo" },
				{ data: "nombre" },
				{ data: "ruta2" },
				{
					data: "id",
					render: function (id) {
						return (
							`<button id="` +
							id +
							`" type="button" class="btn ver_ficha botones btnModificarDocumento" style="background-color: #1f3558" data-toggle="modal" data-target="#exampleModalSubmodulo">
                                Ver <img src="` +
							ruta_server +
							`imgToServer/icons/Ver.png">
                            </button>

                            <button  id="` +
							id +
							`" class="eliminar btn btn-danger botones btnEliminarDocumento" style="background-color: red" id="btnEliminar" data-target="#exampleModalSubmodulo">
                                Eliminar <img src="` +
							ruta_server +
							`imgToServer/icons/Eliminar.png" alt="">
                            </button>`
						);
					},
				},
			],
			bPaginate: false, //Ocultar paginación
			sDom: '<"top"fli>t<"bottom"p><"clear">f',
			bProcessing: true,
			bAutoWidth: false,
			searching: false,
			info: false,
			order: [[1, "asc"]],
			language: {
				decimal: "",
				emptyTable: "No hay registros",
				info: "Mostrando _TOTAL_ registros",
				infoEmpty: "Mostrando desde el 0 al 0 del total de  0 registros",
				infoFiltered: "(Filtrados del total de _MAX_ registros)",
				infoPostFix: "",
				thousands: ",",
				lengthMenu: "Mostrar _MENU_ registros por página",
				loadingRecords: "Cargando...",
				search: "Filtrar:",
				zeroRecords: "No se ha encontrado nada  atraves de ese filtrado.",

				aria: {
					sortAscending: ": activate to sort column ascending",
					sortDescending: ": activate to sort column descending",
				},
			},
		});
	}
	/**Fin de submodulos */

	/**BOTENES */
	$(document).on("click", ".btnEliminarDocumento", function () {
		let modal = $(this).attr("data-target");
		//alert(modal);
		if (modal == "#exampleModalLong") {
			Swal.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel!",
				reverseButtons: true,
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire("Deleted!", "Your file has been deleted.", "success");
					$(this).closest("tr").remove();

					$.ajax({
						type: "POST",
						url: "deleteModulo",
						data: { id: $(this).attr("id") },
						success: function (response) {
							$("#tabla_modulo").dataTable().fnDestroy(); //borrando la informacion de la tabla
							llenar_tabla_modulos(null); //volviendo a mostrar la tabla
						},
					});
				} else if (result.dismiss === Swal.DismissReason.cancel) {
					Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
				}
			});
		} else if (modal == "#exampleModalSubmodulo") {
			Swal.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Yes, delete it!",
				cancelButtonText: "No, cancel!",
				reverseButtons: true,
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire("Deleted!", "Your file has been deleted.", "success");
					$(this).closest("tr").remove();

					$.ajax({
						type: "POST",
						url: "deleteSubModulo",
						data: { id: $(this).attr("id") },
						success: function (response) {
							$("#tabla_submodulos").dataTable().fnDestroy(); //borrando la informacion de la tabla
							llenar_tabla_submodulos(); //volviendo a mostrar la tabla
						},
					});
				} else if (result.dismiss === Swal.DismissReason.cancel) {
					Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
				}
			});
		}
	});

	$("#btnAgregarDocumento").click(function (e) {
		$(".new-state").text("Agregar ");
	});

	/** BOTON MODIFICAR  */
	$(document).on("click", ".btnModificarDocumento", function () {
		$(".new-state").text("Modificar ");
		$(".opcion").attr("dat-opcion", "Modificar");
		//alert($(this).attr("data-target"));
		let modal = $(this).attr("data-target");

		if (modal == "#exampleModalLong") {
			$("#maquinas").attr("data-id", $(this).attr("id"));
			// $('#codigo_operador').attr("disabled", true)
			let data = {
				id: $(this).attr("id"),
			};

			$.ajax({
				type: "POST",
				url: "getModulos",
				data: data,
				success: function (response) {
					console.log($(this).attr("id"));
					let datos = JSON.parse(response);

					$("#codigo").val(datos[0].id);
					$("#nombre").val(datos[0].modulo);
				},
			});
		} else {
			$("#submodulo").attr("data-id", $(this).attr("id"));
			// $('#codigo_operador').attr("disabled", true)
			let data = {
				id: $(this).attr("id"),
			};

			$.ajax({
				type: "POST",
				url: "getSubModulos",
				data: data,
				success: function (response) {
					console.log($(this).attr("id"));
					let datos = JSON.parse(response);

					//$("#codigo").val(datos[0].id);
					$("#nombre_submodulo").val(datos[0].nombre);
					$("#ruta_submodulo").val(datos[0].ruta2);
					$("#modulo_submodulo").val(datos[0].id_modulo).trigger("change");
				},
			});
		}
	});
	/* FIN DE BOTONES*/

	/**FORMULARIO INGRESAR MODULO */
	/***************************MODULOS*/
	$("#maquinas").validetta({
		//validetta - valida que no existan campos vacios
		realTime: true,
		display: "inline",
		errorTemplateClass: "validetta-inline",
		onValid: function (event) {
			//alert("Hola");
			if ($(".opcion").attr("dat-opcion") == "Agregar") {
				let data = {
					modulo: $("#nombre").val(),
				};
				event.preventDefault();
				$.ajax({
					type: "post",
					url: "setModulo",
					data: data,
					success: function (response) {
						document.getElementById("maquinas").reset(); //borrando todos los campos
						$(".js-select-basic-singles-catalogos").trigger("change"); //propiedad de select2 para dejarlo en blanco
						toastr["success"]("Modulo ha sido agregado con exito", "Agregado"); //alerta
						$("#tabla_modulo").dataTable().fnDestroy(); //borrando la informacion de la tabla
						llenar_tabla_modulos(null); //volviendo a mostrar la tabla
						CierraPopup();
					},
				});
			} else {
				let data = {
					id: $("#codigo").val(),
					modulo: $("#nombre").val(),
				};
				event.preventDefault();
				$.ajax({
					type: "post",
					url: "updateModulo",
					data: data,
					success: function (response) {
						document.getElementById("maquinas").reset(); //borrando todos los campos
						$(".js-select-basic-singles-catalogos").trigger("change"); //propiedad de select2 para dejarlo en blanco
						toastr["success"](
							"Modulo ha sido modificada con exito",
							"Agregado"
						); //alerta
						$("#tabla_modulo").dataTable().fnDestroy(); //borrando la informacion de la tabla
						llenar_tabla_modulos(null); //volviendo a mostrar la tabla
						CierraPopup();
					},
				});
			}
		},
	});

	/***************************SUBMODULOS ****************************************/
	$("#submodulo").validetta({
		//validetta - valida que no existan campos vacios
		realTime: true,
		display: "inline",
		errorTemplateClass: "validetta-inline",
		onValid: function (event) {
			//alert("Hola");
			if ($(".opcion").attr("dat-opcion") == "Agregar") {
				let data = {
					nombre: $("#nombre_submodulo").val(),
					id_modulo: $("#modulo_submodulo").val(),
					ruta2: $("#ruta_submodulo").val(),
				};
				event.preventDefault();
				$.ajax({
					type: "post",
					url: "setSubModulo",
					data: data,
					success: function (response) {
						document.getElementById("submodulo").reset(); //borrando todos los campos
						$(".js-select-basic-singles-catalogos").trigger("change"); //propiedad de select2 para dejarlo en blanco
						toastr["success"](
							"Submodulo ha sido agregado con exito",
							"Agregado"
						); //alerta
						$("#tabla_submodulos").dataTable().fnDestroy(); //borrando la informacion de la tabla
						llenar_tabla_submodulos(); //volviendo a mostrar la tabla
						CierraPopup();
					},
				});
			} else {
				let data = {
					id: $("#submodulo").attr("data-id"),
					nombre: $("#nombre_submodulo").val(),
					id_modulo: $("#modulo_submodulo").val(),
					ruta2: $("#ruta_submodulo").val(),
				};
				event.preventDefault();
				$.ajax({
					type: "post",
					url: "updateSubModulo",
					data: data,
					success: function (response) {
						document.getElementById("submodulo").reset(); //borrando todos los campos
						$(".js-select-basic-singles-catalogos").trigger("change"); //propiedad de select2 para dejarlo en blanco
						toastr["success"](
							"Modulo ha sido modificada con exito",
							"Agregado"
						); //alerta
						$("#tabla_submodulos").dataTable().fnDestroy(); //borrando la informacion de la tabla
						llenar_tabla_submodulos(); //volviendo a mostrar la tabla
						CierraPopup();
					},
				});
			}
		},
	});
	/**Fin de formulario */
	/**Cerrar modal */
	function CierraPopup() {
		$(".cerrarModal").click(); //Esto simula un click sobre el botón close de la modal, por lo que no se debe preocupar por qué clases agregar o qué clases sacar.
		$(".modal-backdrop").remove(); //eliminamos el backdrop del modal
	}

	/**Fin Document */
	/**------------------------------------------------------------------------------------- */
	/**Inicializando Select */
	$(".js-select-basic-singles-catalogos").select2({
		width: "resolve",
		dropdownAutoWidth: true,
		theme: "bootstrap4",
		dropdownCssClass: "myFont",
	});
	/**------------------------------------------------------------------------------------- */
});
