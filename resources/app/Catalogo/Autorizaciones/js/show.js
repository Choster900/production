$(".form-check-input").change(function() {
    //let modulo = $(".form-check-input").dataset.modulo;
    //let modulo  = document.querySelector(".form-check-input").dataset.modulo;
    let id = $(this).attr("id")
    console.log(id);
    let modulo = document.querySelector("#" + id + "").dataset.modulo;
    let submodulo = document.querySelector("#" + id + "").dataset.submodulo;
    let username = document.querySelector("#" + id + "").dataset.username;
    /* if($(this).is(':checked')){
         console.log("insertar");
     }else {
         console.log("eliminar");
     }*/
    alert(submodulo);
    alert(username);
    if ($(this).is(':checked')) {
        $.ajax({
            type: "POST",
            url: "setAutorizaciones",
            data: {
                id_submodulo: submodulo,
                id_usuario: username, 
            },
            success: function(response) {
                toastr["success"]("Autorizaciones", "Agregado");
            }
        });
    } else {
        $.ajax({
            type: "POST",
            url: "deleteAutorizaciones",
            data: {
                id_submodulo: submodulo,
                id_usuario: username, 
            },
            success: function(response) {
                toastr["success"]("Autorizaciones", "Eliminado");
            }
        });
    }
    //alert(id);
    //alert(modulo);
    //alert(submodulo);
    //alert(username);
    
});

$("table#tabla_catalogos").DataTable({
        bPaginate: true, //Ocultar paginación
        sDom: '<"top"fli>t<"bottom"p><"clear">f',
        bProcessing: true,
        bAutoWidth: true,
        searching: true,
        info: true,
        order: [[1, 'desc']],
        language: {//lenguaje - si no se configura esta parte por default muestra en ingles la iformacion
            decimal: "",
            emptyTable: "No hay registros",
            info: " _TOTAL_ registros",
            infoEmpty: "Mostrando desde el 0 al 0 del total de  0 registros",
            infoFiltered: "(Filtrados del total de _MAX_ registros)",
            infoPostFix: "",
            thousands: ",",
            lengthMenu: "",
            loadingRecords: "Cargando...",
            search: "Buscar:",
            zeroRecords: "No se ha encontrado nada  atraves de ese filtrado.",

            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending",
            },
        },

});