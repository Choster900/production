$(document).ready(function () {


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

    $("#crear_detalle_reporte").click(function (e) {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/crear_detalle_reporte",
            data: {
                id_reporte_aud_fcc012: parametros[6],
                tipo: parametros[5],
            },
            success: function (detalle_reporte_id) {
                mostrar_contenido({ codigo: detalle_reporte_id, tipo: parametros[5] });
                $.ajax({
                    type: "POST",
                    url: base_url + "Calidad/Auditorias/get_reportes",
                    data: { id: detalle_reporte_id,tipo: parametros[5] },
                    success: function (response) {
                        let datos = JSON.parse(response);
                        console.log(datos);
                        datos[0].hora != null ? $("#txtTiempo").val(datos[0].hora) : $("#txtTiempo").val("");
                        $("#slcOperador").attr("data-id",datos[0].id)
                        $("#txtObservaciones").attr("data-id",datos[0].id)

                        $("#txtObservaciones").val("")
                        $("#txtProducto").val("")
                        $("#txtIdTrello").val("")
                    }
                });

            }
        });
    });


});