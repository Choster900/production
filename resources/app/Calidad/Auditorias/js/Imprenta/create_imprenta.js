$(document).ready(function () {
    const mostrar_seccion_impresion_proceso = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_proceso_impresora",
            data: { codigo: param },
            success: function (response) {
                $("div#div-proceso-impresino").empty();
                $("div#div-proceso-impresino").append(response);
            }
        });
    }
    const mostrar_seccion_impresion_producto = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_producto_impresora",
            data: { codigo: param },
            success: function (response) {
                $("div#div-producto-producto").empty();
                $("div#div-producto-producto").append(response);
            }
        });
    }

    const mostrar_valores_agua = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_valores_agua",
            data: { codigo: param },
            success: function (response) {
                $("div#div-variables-agua").empty();
                $("div#div-variables-agua").append(response);
            }
        });
    }
    const mostrar_seccion_barniz_proceso = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_proceso_barniz",
            data: { codigo: param },
            success: function (response) {
                $("div#div-proceso-barniz").empty();
                $("div#div-proceso-barniz").append(response);
            }
        });
    }
    const mostrar_seccion_barniz_producto = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_producto_barniz",
            data: { codigo: param },
            success: function (response) {
                $("div#div-producto-barniz").empty();
                $("div#div-producto-barniz").append(response);
            }
        });
    }

    const mostrar_seccion_tipo_impresion = (param) => {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/show_tipo_impresion",
            data: { codigo: param },
            success: function (response) {
                $("div#div-tipo-impresion").empty();
                $("div#div-tipo-impresion").append(response);
            }
        });
    }

    $("#crear_detalle_reporte").click(function (e) {
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/crear_detalle_reporte",
            data: {
                id_reporte_aud_fcc011: parametros[6],
                tipo: parametros[5],
            },
            success: function (detalle_reporte_id) {

                mostrar_seccion_impresion_proceso(detalle_reporte_id);
                mostrar_seccion_impresion_producto(detalle_reporte_id);
                mostrar_valores_agua(detalle_reporte_id);
                mostrar_seccion_barniz_proceso(detalle_reporte_id)
                mostrar_seccion_barniz_producto(detalle_reporte_id)
                mostrar_seccion_tipo_impresion(detalle_reporte_id)

                $.ajax({
                    type: "POST",
                    url: base_url + "Calidad/Auditorias/get_reportes",
                    data: { id: detalle_reporte_id, tipo: parametros[5]},
                    success: function (response) {
                        let datos = JSON.parse(response);
                        datos[0].hora != null ? $("#txtTiempo").val(datos[0].hora) : $("#txtTiempo").val("");
                        $("#slcOperador").attr("data-id",datos[0].id)
                        $("#btnGetPreviousInfo").attr("data-id", datos[0].id);
                        $("#txtObservaciones").attr("data-id",datos[0].id)

                        $("#txtTiempo").val("")
                        $("#txtObservaciones").val("")
                        $("#txtProducto").val("")
                        $("#txtIdTrello").val("")
                    }
                });
            }
        });
    });

    $(document).on("click", "#btnGetPreviousInfo", function (e) {
        let codigo_doc = $(this).attr("data-id")
        let maquinas = $("#slcMaquina").val()
        var key = ""
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/Get_valores_agua",
            data: { id_reporte_aud_fcc011: parametros[6], maquinas: maquinas },
            success: function (response) {
                var datos = JSON.parse(response);
                console.log(datos);
                for (let i = 0; i < datos.length; i++) {
                    if (codigo_doc == datos[i].id) {
                        console.log(datos[i]);
                        key = i
                    }
                }
                var llave = key - 1;
                if (llave >= 0) {
                    console.log(llave);

                    $("#txtPh")     .val(datos[llave].ph);//estos inputs son de la tabla de variables
                    $("#txtCond")   .val(datos[llave].cond);//buscar archivo que contanga tabla
                    $("#txtAlc")    .val(datos[llave].alc);//Tabla.php
                    $("#txtTem")    .val(datos[llave].tem);
                    $("#txtVis")    .val(datos[llave].vis); 
                    
                    let dataToSet = {
                        tabla: "detalle_fcc011",
                        id: codigo_doc,
                        ph: datos[llave].ph,
                        cond: datos[llave].cond,
                        alc: datos[llave].alc,
                        tem: datos[llave].tem,
                        vis: datos[llave].vis
                    }                   

                    $.ajax({
                        type: "POST",
                        url: base_url + "Calidad/auditorias/update_detalle",
                        data: dataToSet,
                        success: function (response) {
                            toastr["success"]("Valores recolecatados con exito", "Exito");
                        }
                    });
                }else{
                    toastr["warning"]("No existen valores previos de esta maquina", "Error - Datos vacios");
                }
            }
        });

    });
});