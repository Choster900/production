$(document).ready(function () {

    $(document).on("input", ".rdo-input", function (e) {
        let data ={
            tabla: $(this).attr("data-tabla-name"),
            id: $(this).attr("data-id"),
            value: $(this).val(),
            campo: $(this).attr("data-name"),
            tipo: parametros[5]
        }
        $.ajax({
            type: "POST",
            url: base_url + "Calidad/Auditorias/update_detalle_reporte",
            data: data,
            success: function (response) {
            }
        });
    });
    

});