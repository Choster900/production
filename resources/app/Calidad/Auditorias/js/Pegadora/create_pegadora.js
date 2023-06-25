$(document).ready(function () {

    const mostrar_seccion_proceso_pegadora = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_proceso",
            data: param,
            success: function (response) {
                $("div#div-proceso-impresino").empty();
                $("div#div-proceso-impresino").append(response);
            }
        });
    }
    const mostrar_seccion_producto_pegadora = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_producto",
            data: param,
            success: function (response) {
                $("div#div-producto-producto").empty();
                $("div#div-producto-producto").append(response);
            }
        });
    }

    const mostrar_seccion_convertidora = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_proceso_segunda_seccion",
            data: param,
            success: function (response) {
                $("div#div-proceso-convertidora").empty();
                $("div#div-proceso-convertidora").append(response);
            }
        });
    }
    const mostrar_seccion_barniz_producto = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_producto_segunda_seccion",
            data: param,
            success: function (response) {
                $("div#div-producto-convertidora").empty();
                $("div#div-producto-convertidora").append(response);
            }
        });
    }
    const tipo_pegado = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_tipos",
            data: param,
            success: function (response) {
                $("div#div-tipo-pegado").empty();
                $("div#div-tipo-pegado").append(response);
            }
        });
    }

    $("#crear_detalle_reporte").click(function (e) {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/crear_detalle_reporte",
            data: {
                id_reporte_aud_fcc013: parametros[6],
                tipo: parametros[5],
            },
            success: function (detalle_reporte_id) {
                console.log(detalle_reporte_id);

                let id = detalle_reporte_id;
                mostrar_seccion_proceso_pegadora({ codigo: id, tipo: parametros[5] });
                mostrar_seccion_producto_pegadora({ codigo: id, tipo: parametros[5] });
                mostrar_seccion_convertidora({ codigo: id, tipo: parametros[5] });
                mostrar_seccion_barniz_producto({ codigo: id, tipo: parametros[5] });
                tipo_pegado({ codigo: id, tipo: parametros[5] });
                
                $.ajax({
                    type: "POST",
                    url: base_url + "Calidad/Auditorias/get_reportes",
                    data: { id: detalle_reporte_id,tipo: parametros[5] },
                    success: function (response) {
                        let datos = JSON.parse(response);

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