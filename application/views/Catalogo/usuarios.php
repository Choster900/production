<div class="contenedor">
    <section class="section my-5 pb-5">
        <div class="container-fluid page-maquinas">
            <div class="row">
                <div class="col-sm-12 col-lg-9"></div>
                <div class="col-sm-12 col-lg-3">
                    <button type="button" id="btnAgregarDocumento" style="right: 0;float:right;" class="btn btn-xs crear mx-auto botones" data-toggle="modal" data-target="#exampleModalLong">
                        <img src="<?php echo base_url() ?>resources/generales/img/icons/Maquina.png" alt="crear">
                        <span>Crear <?php echo $boton ?></span>
                    </button>
                </div>
            </div>
            <div class="row">
                <!-- table -->
                <div class="table-responsive">

                    <table id="tabla_catalogos" class="table table-striped display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100%; border-collapse: collapse">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Rol</th>
                                <th></th>
                            </tr>
                        </thead>
                        <thead id="thead_filtros" style="text-align: center;">
                            <tr>
                                <th><input type="text" class="tabla"></th>
                                <th><input type="text" class="tabla"></th>
                                <th><input type="text" class="tabla"></th>
                                <th><input type="text" class="tabla"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- table -->
            </div>
        </div>
    </section>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="maquinas" data-table="maquinas" data-id="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="new-state"></span><span class="new-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input class="form-control form-control" type="text" id="usuario" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input class="form-control form-control" type="text" id="nombre" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Contraseña</label>
                        <input class="form-control form-control" type="password" id="contrasena" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select class="js-select-basic-singles-catalogos" id="rol" data-validetta="required">
                            <option value="" id="first"></option>
                            <?php foreach ($rol as $key => $value) { ?>
                                <option value="<?= $value->ID ?>"> <?= $value->rolname ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning botones" data-dismiss="modal" id="cerrarModal">Cerrar</button>
                    <button type="submit" class="btn btn-success botones opcion" data-opcion=""><span class="new-state"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="modificarUsuario" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="modificarUsuarioM" data-table="modificarUsuarioM" data-id="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="new-state"></span><span class="new-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="id_usuariom">
                    </div>

                    <div class="form-group">
                        <label for="usuariom">Usuario</label>
                        <input class="form-control form-control" type="text" id="usuariom" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="nombrem">Nombre</label>
                        <input class="form-control form-control" type="text" id="nombrem" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="rolm">Rol</label>
                        <select class="js-select-basic-singles-catalogos" id="rolm" data-validetta="required">
                            <option value="" id="first"></option>
                            <?php foreach ($rol as $key => $value) { ?>
                                <option value="<?= $value->ID ?>"> <?= $value->rolname ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning botones" data-dismiss="modal" id="cerrarModal2">Cerrar</button>
                    <button type="submit" class="btn btn-success botones opcion" data-opcion=""><span class="new-state"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal Contra-->
<div class="modal fade" id="modificarContra-modal" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="modificarContra" data-table="modificarContra" data-id="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="new-state"></span><span class="new-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="id_usuariocontra">
                    </div>

                    <div class="form-group">
                        <label for="contra1">Ingrese Contraseña</label>
                        <input class="form-control form-control" type="password" id="contra1" name="pass1" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="contra2">Repita Contraseña</label>
                        <input class="form-control form-control" type="password" id="contra2" name="pass2" data-validetta="required">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning botones" data-dismiss="modal" id="cerrarModal3">Cerrar</button>
                    <button type="submit" class="btn btn-success botones opcion" data-opcion="" id="btn-contra" disabled="true" ><span class="new-state"></span></button>
                    <button type="button" class="btn btn-danger botones opcion" onclick="mostrarContrasena()"><span class="contrasena">Mostrar</span> contraseña</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script src="<?php echo base_url("resources/app/catalogo/usuarios/js/show.js"); ?>"></script>
<script>
    function mostrarContrasena() {
        var tipo = document.getElementById("contra1");
        var tipo2 = document.getElementById("contra2");
        if (tipo.type == "password") {
            tipo.type = "text";
            tipo2.type = "text";
        } else {
            tipo.type = "password";
            tipo2.type = "password";
        }
    }

    var pass1 = $('[name=pass1]');
    var pass2 = $('[name=pass2]');
    var confirmacion = "Las contraseñas si coinciden";
    var negacion = "No coinciden las contraseñas";
    var vacio = "La contraseña no puede estar vacía";
    var span = $('<span></span>').insertAfter(pass2);
    span.hide();

    function coincidePassword() {
        var valor1 = pass1.val();
        var valor2 = pass2.val();
        //muestro el span
        span.show().removeClass();
        //condiciones dentro de la función
        if (valor1 != valor2) {
            span.text(negacion).addClass('negacion');
            $("#btn-contra").prop("disabled", true);
        }
        if (valor1.length == 0 || valor1 == "") {
            span.text(vacio).addClass('negacion');
            $("#btn-contra").prop("disabled", true);
        }

        if (valor1.length != 0 && valor1 == valor2) {
            span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
            $("#btn-contra").prop("disabled", false);
        }
    }

    //ejecuto la función al soltar la tecla
    pass2.keyup(function() {
        coincidePassword();
    });

    pass1.keyup(function() {
        coincidePassword();
    });
</script>