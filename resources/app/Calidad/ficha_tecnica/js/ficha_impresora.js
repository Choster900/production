$(document).ready(function () {
	$("input").attr("disabled", true);
	$(".agregar-tintas").attr("disabled", true);
	$(".agregar-impresion-cambios").attr("disabled", true);

	if ($(".estado_ficha").attr("id") == "Cerrado") {
		document.getElementById("editar").style.display = "none";
		var boton = document.getElementsByClassName("cerrar_ficha");
		$(boton).hide();
		toastr["warning"]("La ficha Actual esta cerrada")

	}
	toastr.options = {
		"closeButton": true,
		"debug": true,
		"newestOnTop": false,
		"progressBar": true,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}

	rol_id == 6 ? '' : rol_id == 1 ? '' : $(".cerrar_ficha").hide();
	rol_id == 6 ? '' : rol_id == 1 ? '' : $("#editar").hide();


	$("#editar").click(function (e) {
		Swal.fire({
			icon: "warning",
			text: "Al editar la ficha la version de modificara",
			showDenyButton: true,
			confirmButtonText: "Editar",
			denyButtonText: `No Editar`,
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				Swal.fire({
					icon: "success",
					text: "Hecho, Los campos han sido habilitados",
					showConfirmButton: false,
					timer: 1500,
				});
				var data = {
					ID: $(".codigo_del_doc").attr("id"),
					version: $(".version_del_doc").attr("id"),
					tipo_ficha: "impresora",
				};
				$(".version_del_doc").text(parseInt(data.version) + 1);
				$.ajax({
					type: "POST",
					url: base_url + "calidad/ficha_tecnica/update_version",
					data: data,
					success: function (response) {
						console.log(response);
					},
				});
				$("input").attr("disabled", false);
				$(".agregar-tintas").attr("disabled", false);
				$(".agregar-impresion-cambios").attr("disabled", false);
				$("#editar").attr("disabled", true);
			} else if (result.isDenied) {
				Swal.fire("Changes are not saved", "", "info");
			}
		});
	});

	$(".cerrar_ficha").click(function (e) {
		Swal.fire({
			icon: "warning",
			text: "Al cerrar la ficha no se podrá hacer ningún cambio",
			showDenyButton: true,
			confirmButtonText: "Editar",
			denyButtonText: `No Editar`,
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				Swal.fire({
					icon: "success",
					text: "Hecho, Los campos han sido habilitados",
					showConfirmButton: false,
					timer: 1500,
				});
				var data = {
					tipo: "impresora",
					ID: $(this).attr("id"),
				};
				document.getElementById("editar").style.display = "none";
				var boton = document.getElementsByClassName("cerrar_ficha");
				$(boton).hide();
				$.ajax({
					type: "POST",
					url: base_url + "calidad/ficha_tecnica/cerrar_ficha",
					data: data,
					success: function (response) {
						console.log(response);
					},
				});

			} else if (result.isDenied) {
				Swal.fire("Changes are not saved", "", "info");
			}
		});
	});

	//aqui se hace el update a la ficha xd
	$("input.input_ficha_impresora").on("input", function (e) {
		var codigo = $(this).attr("name"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("id"); // campo a modificar por ejemplo nombre
		var value = $(this).val(); //el valor del campo

		var data = {
			id_ficha_tecnica: codigo,
			campos_a_modificar: campo,
			valor_a_enviar: value,
			tipo_ficha: "impresora",
		};
		console.log(data);
		$.ajax({
			type: "POST",
			url: base_url + "calidad/ficha_tecnica/update_ficha",
			data: data,
			success: function (response) {
				console.log(response);
			},
		});
	});

	// PARA SUBIR ARCHIVOS - Con nombre y fecha /////////////////////////////////////////////////

	// IMAGEN //
	$("input.upload_ficha_impresora").on("input", function (e) {
		var codigo = $(this).attr("name"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("id"); // campo a modificar por ejemplo nombre
		var file = e.target.files[0]; //

		var data = new FormData();
		data.append("url", file);
		data.append("id_archivo", codigo);
		data.append("campos_a_modificar", campo);
		data.append("valor_a_enviar", file);

		console.log(data);
		$.ajax({
			type: "POST",
			url: base_url + "calidad/ficha_tecnica/guardar_archivo_impresora",
			data: data,
			processData: false,
        	contentType: false,
			success: function (response) {
				console.log(response);
			},
		});
		data.forEach(function(value, key) {
			console.log(key + ': ' + value);
		 });
	});

	// PDF //
	$("input.uploadPDF_ficha_impresora").on("input", function (e) {
		var codigo = $(this).attr("name"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("id"); // campo a modificar por ejemplo nombre
		var file = e.target.files[0]; //

		var data = new FormData();
		data.append("pdf", file);
		data.append("id_archivo", codigo);
		data.append("campos_a_modificar", campo);

		console.log(data);
		$.ajax({
			type: "POST",
			url: base_url + "calidad/ficha_tecnica/guardar_archivoPDF_impresora",
			data: data,
			processData: false,
        	contentType: false,
			success: function (response) {
				console.log(response);
			},
		});
		data.forEach(function(value, key) {
			console.log(key + ': ' + value);
		 });
	});

	// NOMBRE & FECHA //
	$("input.upload_nombre_archivo").on("input", function (e) {
		var codigo = $(this).attr("name"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("id"); // campo a modificar por ejemplo nombre
		var value = $(this).val(); //el valor del campo

		var data = {
			id_archivo: codigo,
			campos_a_modificar: campo,
			valor_a_enviar: value,
		};
		console.log(data);
		$.ajax({
			type: "POST",
			url: base_url + "calidad/ficha_tecnica/guardar_nombre_archivo_impresora",
			data: data,
			success: function (response) {
				console.log(response);
			},
		});
	});
	///////////////////////////////////////////////////////////////////////////////////////

	// Comprobar cuando cambia un checkbox para actualizar tarea realizada
	$("input[type=checkbox]").on("change", function () {
		//con esto basicmante se acualiza el registro para el checkbox de realizADO
		let realizado = "";
		let id = $(this).attr("id");
		//var tipo = $(this).attr("type");
		let referencia = document.querySelector("#" + id + "").dataset.referenciaim;

		if ($(this).is(":checked")) {
			realizado = "SI";
		} else {
			realizado = "NO";
		}
		var codigo = $(this).attr("role"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("name"); // campo a modificar por ejemplo nombre
		console.log("Atributos campos" + campo);


		if (referencia == "formulacion-impris") {
			//----------------------------------------------------------------
			let campos2 = document.querySelector("#" + id + "").dataset.campo;
			console.log("Atributos campos" + campos2);
			var data = {
				id_imprim: campo,
				campos: campos2,
				value: realizado,
			};

			$.ajax({
				type: "POST",
				url: base_url + "calidad/ficha_tecnica/update_form_imprim",
				data: data,
				success: function (response) {
					console.log(response);
				},
			});


			//----------------------------------------------------------------
		} else {
			var data = {
				id_ficha_tecnica: codigo,
				campos_a_modificar: campo,
				valor_a_enviar: realizado,
				tipo_ficha: "impresora",
			};
			console.log(data);

			$.ajax({
				type: "POST",
				url: base_url + "calidad/ficha_tecnica/update_ficha",
				data: data,
				success: function (response) {
					console.log(response);
				},
			});
		}

	});

	$("input[type=radio]").on("change", function () {
		//con esto basicmante se acualiza el registro para el checkbox de realizADO
		let realizado = "";
		if ($(this).val() === "SI") {
			realizado = "SI";
		} else {
			realizado = "NO";
		}
		var codigo = $(this).attr("role"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("name"); // campo a modificar por ejemplo nombre

		var data = {
			id_ficha_tecnica: codigo,
			campos_a_modificar: campo,
			valor_a_enviar: realizado,
			tipo_ficha: "impresora",
		};
		console.log(data);

		$.ajax({
			type: "POST",
			url: base_url + "calidad/ficha_tecnica/update_ficha",
			data: data,
			success: function (response) {
				console.log(response);
			},
		});
	});

	$("input.formulacion_tinta").on("input", function (e) {
		var codigo = $(this).attr("name");
		var campo = $(this).attr("id");
		var value = $(this).val();

		var data = {
			id_tinta: codigo,
			campos: campo,
			value: value,
		};

		$.ajax({
			type: "POST",
			url: base_url + "calidad/ficha_tecnica/update_form_tinta",
			data: data,
			success: function (response) {
				console.log(response);
			},
		});
	});

	$(".agregar-tintas").click(function (e) {
		e.preventDefault();
		var filas = $("table#tintas tr").last();

		var datos = {
			id_ficha: $(this).attr("id"),
		};
		Swal.fire({
			icon: "warning",
			text: "Al crear una nueva formulación no se podrá eliminar",
			showDenyButton: true,
			confirmButtonText: "Crear",
			denyButtonText: `No Gracias`,
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				jQuery.extend({
					//agragamos nuevo registro a la tabla junto con el append
					getValues: function (url) {
						var result = null;
						$.ajax({
							url:
								base_url +
								"calidad/ficha_tecnica/insertar_formulaciones_tintas",
							type: "post",
							data: datos,
							async: false, //importante para hacer la variable global
							success: function (data) {
								result = data;
							},
						});
						return result;
					},
				});
				var results = $.getValues("url string"); //como hacer una variable global de una respuesta de ajax

				$(filas).before(
					"<tr>" +
					'<td rowspan="7" class="align-middle mx-auto"><input type="text" class="w-100 text-center formulacion_tintas_news_new" placeholder="Escribe aqui" name="' +
					results +
					'" id="pintado" value=""></td>' +
					'<td rowspan="7" class="align-middle mx-auto"><input type="text" class="w-100 text-center formulacion_tintas_news_new" placeholder="Escribe aqui" name="' +
					results +
					'" id="referencia" value=""></td>' +
					"<tr>" +
					'<td rowspan="2" class="align-middle">L=<input type="text" class="w-75 formulacion_tintas_news_new" name="' +
					results +
					'" id="cie_L" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="descripcion_1" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="proveedor_1" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="porcentaje_tinta_1" value=""></td>' +
					"</tr>" +
					"<tr>" +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="descripcion_2" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="proveedor_2" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="porcentaje_tinta_2" value=""></td>' +
					"</tr>" +
					"<tr>" +
					'<td rowspan="2" class="align-middle">a=<input type="text" class="w-75 formulacion_tintas_news_new" name="' +
					results +
					'" id="cie_A" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="descripcion_3" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="proveedor_3" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="porcentaje_tinta_3" value=""></td>' +
					"</tr>" +
					"<tr>" +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="descripcion_4" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="proveedor_4" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="porcentaje_tinta_4" value=""></td>' +
					"</tr>" +
					"<tr>" +
					'<td rowspan="2" class="align-middle">b=<input type="text" class="w-75 formulacion_tintas_news_new" name="' +
					results +
					'" id="cie_B" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="descripcion_5" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="proveedor_5" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="porcentaje_tinta_5" value=""></td>' +
					"</tr>" +
					"<tr>" +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="descripcion_6" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' +
					results +
					'" id="proveedor_6" value=""></td>' +
					'<td><input type="text" class="w-100 formulacion_tintas_news_new" name="' + results + '" id="porcentaje_tinta_6" value=""></td>' + "</tr>" +
					"</tr>"
				);

				$("input.formulacion_tintas_news_new").on("input", function (e) {
					var codigo = $(this).attr("name");
					var campo = $(this).attr("id");
					var value = $(this).val();

					var data = {
						id_tinta: codigo,
						campos: campo,
						value: value,
					};

					$.ajax({
						type: "POST",
						url: base_url + "calidad/ficha_tecnica/update_form_tinta",
						data: data,
						success: function (response) {
							console.log(response);
						},
					});
				});
			} else if (result.isDenied) {
				Swal.fire("Changes are not saved", "", "info");
			}
		});
	});

	///////////////////////////////////////////////////////////////////////////////////////////////////

	//       Este sera la funcion de duplicar la tabla especificaciones de impresion

	//////////////////////////////////////////////////////////////////////////////////////////////////

	$("input.formulacion_imprim").on("input", function (e) {
		var codigo = $(this).attr("name");
		var campo = $(this).attr("id");
		var value = $(this).val();
		var tipo = $(this).attr("type");

		var data = {
			id_imprim: codigo,
			campos: campo,
			value: value,
		};
		console.log("Linea 414");
		if (tipo != "checkbox") {
			$.ajax({
				type: "POST",
				url: base_url + "calidad/ficha_tecnica/update_form_imprim",
				data: data,
				success: function (response) {
					console.log(response);

				},
			});

		}

	});

	$(".agregar-impresion-cambios").click(function (e) {
		e.preventDefault();
		var filas = $("table#tabla_imprim tr").last();

		var datos = {
			id_ficha: $(this).attr("id"),
		};
		Swal.fire({
			icon: "warning",
			text: "Al crear una nueva formulación no se podrá eliminar",
			showDenyButton: true,
			confirmButtonText: "Crear",
			denyButtonText: `No Gracias`,
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				jQuery.extend({
					//agragamos nuevo registro a la tabla junto con el append
					getValues: function (url) {
						var result = null;
						$.ajax({
							url:
								base_url +
								"calidad/ficha_tecnica/insertar_formulaciones_imprims",
							type: "post",
							data: datos,
							async: false, //importante para hacer la variable global
							success: function (data) {
								result = data;
							},
						});
						return result;
					},
				});
				var results = $.getValues("url string"); //como hacer una variable global de una respuesta de ajax

				$(filas).after(
					'<tr class="text-center, text-light">' +
					'<td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="2">Secuencia y colores</td>' +
					'<td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="1">Plancha</td>' +
					'<td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="5">Maquina</td>' +
					'<td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="7">COLOR</td>' +
					'</tr>' +
					'<tr class="text-center">' +
					'<td colspan="2" rowspan="2" class="pintado" style="width: 200px; padding: 10px;font-size: 5pt;">' +
					'<label class="form-check-label" for="AutoPaso" style="color: black;font-size: 10pt">PASO</label> <br> <br>' +
					'&nbsp;' +
					'&nbsp;' +
					'&nbsp;' +
					'&nbsp;' +
					'&nbsp;' +

					'<input class="form-check-input formulacion_imprims_news_new" type="checkbox" name="' +
					results +
					'" id="tiro_paso_11_alt-'+results+'" value="SI" value="<?php echo $value->tiro_paso_1_alt ?>" data-campo="tiro_paso_1_alt" data-referenciaim="formulacion-impris">' +
					'<label class="form-check-label" for="tiro_paso_11_alt-'+results+'" style="color: black;font-size: 7pt">TIRO</label>' +

					'&nbsp;' +
					'&nbsp;' +
					'&nbsp;' +
					'&nbsp;' +
					'&nbsp;' +

					'<input class="form-check-input formulacion_imprims_news_new" type="checkbox"name="' +
					results +
					'" id="retiro_11_clon-'+results+'" value="SI" value="<?php echo $value->retiro_1_clon ?>" data-campo="retiro_1_clon" data-referenciaim="formulacion-impris" >' + 
					'<label class="form-check-label" for="retiro_11_clon-'+results+'" style="color: black;font-size: 7pt">RETIRO</label> </td>' +

					'<td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Angulo<br>de color</span></td>' +
					'<td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Presion</span></td>' +
					'<td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Variante<br>de<br>flujo</span></td>' +
					'<td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Rodillo<br>entintador</span></td>' +
					'<td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Distribucion<br>lateral</span></td>' +
					'<td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Tomador<br>de<br>tinta</span></td>' +
					'</tr>' +
					'<tr class="text-center" style="padding: 0 0;">' +
					'<td class="pintado" style="font-size: 5pt;padding: 0 10px"><span style="font-size: 8pt;">Densidad STD</span></td>' +
					'<td class="pintado" style="font-size: 5pt;padding: 0 10px"><span style="font-size: 8pt;">% vueltas</span></td>' +
					'<td class="pintado" style="font-size: 5pt;padding: 0 10px"><span style="font-size: 8pt;">% Agua</span></td>' +
					'</tr>' +
					'<tr>' +
					'<td class="unidad" style=" padding: 0;"><span style="padding-left: 7px;">Unidad 1:</span></td>' +
					'<td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tiro_unidad_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="angulo_color1_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="presion_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="variante_flujo_1_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="rodillo_entintador_1_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="distribucion1_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tomador_tinta_1_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="densidad_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="vueltas_1_1" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="agua_1" value=""></td>' +
					'</tr>' +
					'<tr>' +
					'<td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 2:</span></td>' +
					'<td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tiro_unidad_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="angulo_color1_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="presion_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="variante_flujo_1_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="rodillo_entintador_1_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="distribucion1_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tomador_tinta_1_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="densidad_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="vueltas_1_2" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="agua_2" value=""></td>' +
					'</tr>' +
					'<tr>' +
					'<td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 3:</span></td>' +
					'<td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tiro_unidad_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="angulo_color1_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="presion_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="variante_flujo_1_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="rodillo_entintador_1_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="distribucion1_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tomador_tinta_1_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="densidad_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="vueltas_1_3" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="agua_3" value=""></td>' +
					'</tr>' +
					'<tr>' +
					'<td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 4:</span></td>' +
					'<td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tiro_unidad_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="angulo_color1_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="presion_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="variante_flujo_1_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="rodillo_entintador_1_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="distribucion1_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tomador_tinta_1_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="densidad_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="vueltas_1_4" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="agua_4" value=""></td>' +
					'</tr>' +
					'<tr>' +
					'<td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 5:</span></td>' +
					'<td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tiro_unidad_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="angulo_color1_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="presion_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="variante_flujo_1_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="rodillo_entintador_1_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="distribucion1_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 _news_new" name="' +
					results +
					'" id="tomador_tinta_1_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="densidad_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="vueltas_1_5" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="agua_5" value=""></td>' +
					'</tr>' +
					'<tr>' +
					'<td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 6:</span></td>' +
					'<td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tiro_unidad_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="angulo_color1_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="presion_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="variante_flujo_1_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="rodillo_entintador_1_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="distribucion1_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="tomador_tinta_1_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="densidad_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="vueltas_1_6" value=""></td>' +
					'<td style="font-size: 7pt; padding: 7px;" ><input type="text" class="w-100 formulacion_imprims_news_new" name="' +
					results +
					'" id="agua_6" value=""></td>' +
					'</tr>'
				);

				$("input.formulacion_imprims_news_new").on("input", function (e) {

					let id = $(this).attr("id")
					console.log(id);
					//let modulo = document.querySelector("#" + id + "").dataset.modulo;
					var tipo = $(this).attr("type");

					var codigo = $(this).attr("name");
					var campo = (tipo == "checkbox") ? document.getElementById(id + "").dataset.campo : $(this).attr("id");
					//var value = $(this).val();
					var value = (tipo == "checkbox") ? (  $(this).is(":checked")? "SI":"NO") :$(this).val();
					var data = {
						id_imprim: codigo,
						campos: campo,
						value: value,
					};
					console.log("Linea 709");
					$.ajax({
						type: "POST",
						url: base_url + "calidad/ficha_tecnica/update_form_imprim",
						data: data,
						success: function (response) {
							console.log(response);
						},
					});
				});
			} else if (result.isDenied) {
				Swal.fire("Changes are not saved", "", "info");
			}
		});
	});

});
