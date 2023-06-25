$(document).ready(function () {
	/* ---------------------------------------------------------------------------------------MOSTRAR VALORES EN TABLA --------------------------------------------------------------------------------------- */
	//Propiedades de datatable
	//mas informacion de las propuedades en la documentacion
	//todas las configraciones referencias por el ID  de la tabla - catalogos no tocar ID de la tabla
	getTable();
	function getTable() {
		var table = $("table#tabla_catalogos").DataTable({
			ajax: {
				method: "POST",
				url: "getTableUsuarios",
				complete: function (data) {},
			},
			columns: [
				{ data: "id" },
				{ data: "username" },
				{ data: "nombre" },
				{ data: "rolname" },
				{
					data: "id",
					render: function (id) {
						return (
							`<button id="` +
							id +
							`" type="button" class="btn ver_ficha botones btnModificarDocumento" style="background-color: #1f3558" data-toggle="modal" data-target="#modificarUsuario"> Ver <img src="` +
							ruta_server +
							`imgToServer/icons/Ver.png">
                               </button>
   
                               <button  id="` +
							id +
							`" class="eliminar btn btn-danger botones btnEliminarDocumento" style="background-color: red" id="btnEliminar">
                                   Eliminar <img src="` +
							ruta_server +
							`imgToServer/icons/Eliminar.png" alt="">
                               </button>
							 
							   <button  id="` +
							id +
							`" class="eliminar btn btn-danger botones btnModificarDocumento" style="background-color: red" data-toggle="modal" data-target="#modificarContra-modal" id="btnModificar">
                                   Contraseña <img src="` +
							ruta_server +
							`imgToServer/icons/Modificar.png" alt="" width="24" >
                               </button>
							   				 
							   `

							
						);
					},
				},
			],
			bPaginate: false, //Ocultar paginación
			sDom: '<"top"fli>t<"bottom"p><"clear">f',
			bProcessing: true,
			bAutoWidth: true,
			searching: true,
			info: true,
			order: [[2, "desc"]],
			language: {
				//lenguaje - si no se configura esta parte por default muestra en ingles la iformacion
				decimal: "",
				emptyTable: "No hay registros",
				info: " _TOTAL_ registros",
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
	/** BOTONES */
	/**BOTON AGREGAR, verificar el botón para llamar el modal. */
	/**Lee el ID del formulario  */

	/*let name_to_component = $("#maquinas").attr("data-table")
/*$(".new-name").text(name_to_component)*/

	$(".new-name").text("Usuario");

	$("#btnAgregarDocumento").click(function (e) {
		/**Agrega la información tanto al titulo y al botón */
		document.getElementById("maquinas").reset(); //borrando todos los campos
		$(".new-state").text("Agregar ");
		$(".opcion").attr("dat-opcion", "Agregar");
		//$("#codigo_operador").attr("disabled", false);
	});

	/** BOTON ELIMINAR  */
	$(document).on("click", ".btnEliminarDocumento", function () {
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
					url: "eliminarUsuario",
					data: { id: $(this).attr("id") },
					success: function (response) {
						$("#tabla_catalogos").dataTable().fnDestroy(); //borrando la informacion de la tabla
						getTable(); //volviendo a mostrar la tabla
					},
				});
			} else if (result.dismiss === Swal.DismissReason.cancel) {
				Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
			}
		});
	});

	/** BOTON MODIFICAR  */
	$(document).on("click", ".btnModificarDocumento", function () {
		$(".new-state").text("Modificar ");
		$(".opcion").attr("dat-opcion", "Modificar");
		$("#modificarUsuario").attr("data-id", $(this).attr("id"));
		//$("#codigo_operador").attr("disabled", true);

		$.ajax({
			type: "POST",
			url: "getTableUsuarios",
			data: { id: $(this).attr("id") },
			success: function (response) {
				console.log($(this).attr("id"));
				console.log(response);
				let datos = JSON.parse(response);
				//console.log("Tipo " + datos[0].tipo);

				console.log("Entrando");
				$("#id_usuariom").val(datos[0].id);
				$("#usuariom").val(datos[0].username);
				$("#nombrem").val(datos[0].nombre);

				$("#rolm").val(datos[0].id_rol).trigger("change");

				/*  $("#tipo[value=Operador]").attr("selected",);
				$("#tipo").trigger('change') */

				//$("#tipo[value=Operador]").attr("selected",true);
				//$("#usuario[value="+datos[0].username+"]").attr("selected",true);
				//$("#zona[value="+datos[0].zona+"]").attr("selected",true);
				//$(".js-select-basic-singles-catalogos").trigger('change')//propiedad de select2 para dejarlo en blanco
			},
			error: function (response) {
				console.log(response);
			},
		});
	});

	/** BOTON MODIFICAR  */
	$(document).on("click", ".btnModificarDocumento", function () {
		$(".new-state").text("Modificar ");
		$(".opcion").attr("dat-opcion", "Modificar");
		$("#modificarUsuario").attr("data-id", $(this).attr("id"));
		//$("#codigo_operador").attr("disabled", true);

		$.ajax({
			type: "POST",
			url: "getTableUsuarios",
			data: { id: $(this).attr("id") },
			success: function (response) {
				console.log($(this).attr("id"));
				console.log(response);
				let datos = JSON.parse(response);
				//console.log("Tipo " + datos[0].tipo);
				console.log("Entrando");
				$("#id_usuariocontra").val(datos[0].id);
			},
			error: function (response) {
				console.log(response);
			},
		});
	});

	/**FORMULARIO DE MAQUINA  */
	$("#maquinas").validetta({
		//validetta - valida que no existan campos vacios

		realTime: true,
		display: "inline",
		errorTemplateClass: "validetta-inline",
		onValid: function (event) {
			if ($(".opcion").attr("dat-opcion") == "Agregar") {
				let data = {
					username: $("#usuario").val(),
					nombre: $("#nombre").val(),
					id_rol: $("#rol").val(),
					contra2: $("#contrasena").val(),
				};
				event.preventDefault();
				$.ajax({
					type: "post",
					url: "agregarUsuario",
					data: data,
					success: function (response) {
						document.getElementById("maquinas").reset(); //borrando todos los campos
						$(".js-select-basic-singles-catalogos").trigger("change"); //propiedad de select2 para dejarlo en blanco
						toastr["success"](
							"Operador ha sido agregado con exito",
							"Agregado"
						); //alerta
						$("#tabla_catalogos").dataTable().fnDestroy(); //borrando la informacion de la tabla
						getTable(); //volviendo a mostrar la tabla
						CierraPopup();
					},
				});
			} else {
				let data = {
					id: $("#id_usuario").val(),
					username: $("#usuario").val(),
					id_rol: $("#rol").val(),
				};
				event.preventDefault();
				$.ajax({
					type: "post",
					url: "updateOperador",
					data: data,
					success: function (response) {
						CierraPopup();
						document.getElementById("maquinas").reset(); //borrando todos los campos
						$(".js-select-basic-singles-catalogos").trigger("change"); //propiedad de select2 para dejarlo en blanco
						toastr["success"](
							"Cierre ha sido modificada con exito",
							"Agregado"
						); //alerta
						$("#tabla_catalogos").dataTable().fnDestroy(); //borrando la informacion de la tabla
						getTable(); //volviendo a mostrar la tabla
					},
				});
			}
		},
	});

	$("#modificarUsuarioM").validetta({
		//validetta - valida que no existan campos vacios

		realTime: true,
		display: "inline",
		errorTemplateClass: "validetta-inline",
		onValid: function (event) {
			let data = {
				id: $("#id_usuariom").val(),
				username: $("#usuariom").val(),
				nombre: $("#nombrem").val(),
				id_rol: $("#rolm").val(),
			};
			event.preventDefault();
			$.ajax({
				type:"post",
				url: "updateUsuario",
				data:data ,
				success: function(response){
					console.log(response);
					document.getElementById("modificarUsuarioM").reset();
					$("#cerrarModal2").click(); 
					$(".js-select-basic-singles-catalogos").trigger("change");
					toastr["success"]("Usuario ha sido modificado con exito", "Agregado");
					$("#tabla_catalogos").dataTable().fnDestroy();			
					getTable();
				}

			});
		},
	});


	

	$("#modificarContra").validetta({
		//validetta - valida que no existan campos vacios

		realTime: true,
		display: "inline",
		errorTemplateClass: "validetta-inline",
		onValid: function (event) {
			let data = {
				id: $("#id_usuariocontra").val(),
				contra2: $("#contra2").val(),
			};
			event.preventDefault();
			$.ajax({
				type:"post",
				url: "updatePassword",
				data:data ,
				success: function(response){
					console.log(response);
					$("#cerrarModal3").click(); 
					document.getElementById("modificarContra").reset();
					//$(".js-select-basic-singles-catalogos").trigger("change");
					toastr["success"]("Contraseña ha sido modificado con exito", "Agregado");
					$("#tabla_catalogos").dataTable().fnDestroy();			
					getTable();
				}

			});
		},
	});

	function CierraPopup() {
		$("#cerrarModal").click(); //Esto simula un click sobre el botón close de la modal, por lo que no se debe preocupar por qué clases agregar o qué clases sacar.
		$(".modal-backdrop").remove(); //eliminamos el backdrop del modal
	}
});
