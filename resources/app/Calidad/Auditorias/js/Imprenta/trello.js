$(document).ready(function () {
    $(".input_buscar_ot").change(function (e) {
        let id_trello = $("#txtIdTrello").val();
        let maquina = $("#slcMaquina").val();

        if (id_trello != "" && maquina != "") {
            $.ajax({
                type: "POST",
                url: base_url + "Get_trello",
                data: { maquina: maquina },
                success: function (response) {
                    var datos = JSON.parse(response);
                    axios.get("https://api.trello.com/1/boards/" + datos[0].codigoBoard + "/cards?key=" + key_trello + "&token=" + token_trello + "")//La key_trello y token_trello esta definida en el footer del sistema, no buscar en el mismo documento
                        .then((res) => {
                            for (let i = 0; i < res.data.length; i++) {
                                const element = res.data[i];
                                if (element["idShort"] == id_trello) {
                                    let descrip_tarjeta = element["name"].split("-");
                                    var producto = ""

                                    if (descrip_tarjeta[descrip_tarjeta.length - 3].match(/.*CAMBIOS.*/)) {
                                        producto = descrip_tarjeta[descrip_tarjeta.length - 4];                    
                                    } else {
                                        producto = descrip_tarjeta[descrip_tarjeta.length - 3];                    
                                    }
                                    $("#txtProducto").val(producto);

                                    let dataToSet = {
                                        id:$("#btnGetPreviousInfo").attr("data-id"),
                                        id_trello:$("#txtIdTrello").val(),
                                        producto:producto,
                                        maquinas:$("#slcMaquina").val(),
                                        ot:descrip_tarjeta[0],//En la posicion 0 esta la ot d etrello
                                        tabla:"detalle_fcc011"

                                    }
                                    console.log(dataToSet);
                                    $.ajax({
                                        type: "POST",
                                        url: base_url + "Calidad/auditorias/update_detalle",
                                        data: dataToSet,
                                        success: function (response) {
                                            }
                                    });
                                } 
                            }
                        })
                        .catch((err) => {
                            console.error(err);
                        });
                },
            });
        } else {
            toastr["error"]("ID trello no ingresado", "ERROR");
        }
    });

});