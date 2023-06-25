$(document).ready(function () {

	$("input").attr("disabled", true);

	if ($(".estado_ficha").attr("id") == "Cerrado") {
		document.getElementById("editar").style.display = "none";
		var boton = document.getElementsByClassName("cerrar_ficha");
		$(boton).hide();
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
					tipo_ficha: "troqueladora",
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
					tipo: "troqueladora",
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
	$("input.input_ficha_troqueladoras").on("input", function (e) {
		var codigo = $(this).attr("name"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("id"); // campo a modificar por ejemplo nombre
		var value = $(this).val(); //el valor del campo

		var data = {
			id_ficha_tecnica: codigo,
			campos_a_modificar: campo,
			valor_a_enviar: value,
			tipo_ficha: "troqueladora",
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
	$("input.upload_ficha_troqueladora").on("input", function (e) {
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
			url: base_url + "calidad/ficha_tecnica/guardar_archivo_troqueladora",
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
	$("input.uploadPDF_ficha_troqueladora").on("input", function (e) {
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
			url: base_url + "calidad/ficha_tecnica/guardar_archivoPDF_troqueladora",
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
			url: base_url + "calidad/ficha_tecnica/guardar_nombre_archivo_troqueladora",
			data: data,
			success: function (response) {
				console.log(response);
			},
		});
	});
	///////////////////////////////////////////////////////////////////////////////////////

	$("textarea.input_ficha_troqueladoras").on("input", function (e) {
		var codigo = $(this).attr("name"); // esto es un numero entero por ejemplo //15
		var campo = $(this).attr("id"); // campo a modificar por ejemplo nombre
		var value = $(this).val(); //el valor del campo

		var data = {
			id_ficha_tecnica: codigo,
			campos_a_modificar: campo,
			valor_a_enviar: value,
			tipo_ficha: "troqueladora",
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

	$("input[type=checkbox]").on("change", function () {
		//con esto basicmante se acualiza el registro para el checkbox de realizADO
		let realizado = "";
		if ($(this).is(":checked")) {
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
			tipo_ficha: "troqueladora",
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

	$("input[type=radio]").on("change", function () {
		//con esto basicmante se acualiza el registro para el checkbox de realizADO
		let realizado = "";
		if ($(this).val() === "SI") {
			realizado = "SI";
		} else {
			realizado = "NO";
		}
		var campo = $(this).attr("name"); // esto es un numero entero por ejemplo //15
		var codigo = $(this).attr("role"); // campo a modificar por ejemplo nombre

		var data = {
			id_ficha_tecnica: codigo,
			campos_a_modificar: campo,
			valor_a_enviar: realizado,
			tipo_ficha: "troqueladora",
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
});