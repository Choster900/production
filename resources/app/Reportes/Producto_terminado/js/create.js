$(document).ready(function () {

	$(document).on("click", "#agregar_1", function () {//agregando contenido al modal / reporte
		$.ajax({
			type: "POST",
			url: base_url + "Reportes/Producto_terminado/append_to",
			data: { codigo: $(this).attr("role") },
			success: function (response) {
				$("tbody#contenido").append(response);
			},

		});
	});

	$(document).on("click", "#agregar_2", function () { //agregando detalle al modal / reporte
		$.ajax({
			type: "POST",
			url: base_url + "Reportes/Producto_terminado/appent_to_2",
			data: { codigo: $(this).attr("role") },
			success: function (response) {
				var numero = $("#first_detalle").attr("rowspan");
				$("#first_detalle").attr("rowspan", numero + 1);
				$("tbody#detalle").append(response);
			},
		});
	});
	$(document).on('click', '#crear_nuevo_documento', function () { //creando un nuevo reporte
		$.ajax({
			type: "POST",
			url: base_url + "Reportes/Producto_terminado/insertar_producto_terminado",
			success: function (response) {
				$("#contenedor_tabla_principal").empty()
				$("#contenedor_tabla_principal").append(response);

				//Seteamos los datos a vacios para que no tenga datos llenos al momento de llenar el documento
				let id_producto_terminado = $("button#agregar_1").attr("role")

				$("#numero_corrugados").attr("name", id_producto_terminado);
				$("#numero_tarimas").attr("name", id_producto_terminado);
				$("input[name=selector]").attr("role", id_producto_terminado);
				$("#cliente").val("");
				$("#ot").val("");
				$("#numero_tarimas").val("");
				$("#numero_corrugados").val("");
				$("#nombre_area_recibe").val("");
				$("input#to_print").prop("checked", false);
				$("input[name=selector]").prop("checked", false);
				$("input#to_print").val("1")
				$("input#nombre_produccion").val(nombre_usuario);
				$("#btnTransferir").show();
				document.getElementById("datos_extras").style.display = "none"
				bloquar_cuando("Abierto")
			}
		});
	});

	function bloquar_cuando(param) {
		if (rol_id != 1) {
			if (param === "Abierto") {
				$("div#global input").attr('readonly', false);
				$('input[name=selector]').attr("disabled", false);

			} else if (param === "Transferido") {
				$("div#global input").attr('readonly', true);
				$('input[name=selector]').attr("disabled", true);
			}
			else if (param === "Aprobado") {
				$("div#global input").attr('readonly', true);
				$('input[name=selector]').attr("disabled", true);

			}
			else if (param === "Rechazado") {
				$("div#global input").attr('readonly', false);
				$('input[name=selector]').attr("disabled", false);

			}
		}

	}

	
	vacio();
	function vacio() {
		setInterval(() => {
			$("td.pintado").each(function (index, element) {//PINTANDO TODOS LOS TD VACIOS
				if ($(this).text() != "") {
					$(this).css("background-color", "transparent");
				} else {
					$(this).css("background-color", "#fdfd96");
				}
			});
			$("textarea.pintado").each(function (index, element) {//PINTANDO TODOS LOS TEXT AREA VACIO
				if ($(this).val() != "") {
					$(this).parents("td").css("background-color", "transparent");
				} else {
					$(this).parents("td").css("background-color", "#fdfd96");
				}
			});
			$("input.pintado").each(function (index, element) {//PINTANDO TODOS LOS INPUT VACIO
				if ($(this).val() != "") {
					$(this).parents("td").css("background-color", "transparent");
					$(this).css("background-color", "transparent");

				} else {
					$(this).parents("td").css("background-color", "#fdfd96");
					$(this).css("background-color", "#fdfd96");
				}
			});

			$("span#select2-area_entrega-container").each(function (index, element) {//PINTANDO SOLO EL SELEC DE AREA ENTREGA
				if ($(this).attr("title") != "Entrega") {
					$(this).css("background-color", "transparent");
				} else {
					$(this).css("background-color", "#fdfd96");
				}
			});
			$("span#select2-area_recibe-container").each(function (index, element) {//PINTANDO SOLO EL SELEC DE AREA VACIO
				if ($(this).attr("title") != "Recibe") {
					$(this).css("background-color", "transparent");
				} else {
					$(this).css("background-color", "#fdfd96");
				}
			});
			$("span#select2--container").each(function (index, element) {//PINTANDO SOLO EL SELEC DE AREA VACIO
				if ($(this).attr("title") != "Maquinas") {
					$(this).css("background-color", "transparent");
				} else {
					$(this).css("background-color", "#fdfd96");
				}
			});


		}, 100)

	}
});
