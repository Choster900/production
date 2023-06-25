$(document).ready(function () {
    $("#btnCrearDocumento").click(function (e) {
        if ($("#turno_to_document").val() != "") {
            $.ajax({
                type: "POST",
                url: base_url+ "Calidad/Auditorias/crear_reporte",
                data: {
                    turno: $("#turno_to_document").val(),
                    tipo: $("#tipo_document").val()
                },
                success: function (response) {
                    window.location.href = base_url + "calidad/auditorias/detalle_auditoria/" + response
                }
            });
        } else {
            alert("isEMpty")
        }
    });
});