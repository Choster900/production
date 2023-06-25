<div class="contenedor">
    <section class="section my-5 pb-5">
        <div class="row">
            <div class="col-sm-12 col-lg-9"></div>
            <div class="col-sm-12 col-lg-3">
                <button type="button" id="btnAgregarDocumento" style="right: 0;float:right;" class="btn btn-xs crear mx-auto botones" data-toggle="modal" data-target="#exampleModalLong">
                    <img src="<?php echo base_url() ?>resources/generales/img/icons/Maquina.png" alt="crear">
                    <span class="btn_nombre">AGREGAR MODULO</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <!-- Nav tabs -->
                <div class="tabs-wrapper">
                    <ul class="nav nav-tabs mt-2" id="ul_modulos">
                        <li class="nav-item">
                            <a class="nav-link waves-light active waves-effect waves-light todas_las_maquinas" data-toggle="tab" id="principal" href="#modulos" role="modulos">
                                Modulos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-light waves-effect waves-light todas_las_maquinas" data-toggle="tab" id="secundario" href="#submodulos" role="submodulos">
                                Submodulos
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <!--modulos-->
                    <div class="tab-pane fade " id="modulos" role="modulos">
                        <!-- table modulos-->
                        <div class="table-responsive">
                            <table id="tabla_modulo" class="table table-striped hover display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100% ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <thead id="thead_filtros" style="text-align: center;">
                                    <tr>
                                        <th><input type="text" class="tabla tabla_imprenta input_1" name="id_reporte" id="id_reporte_imprentas"></th>
                                        <th><input type="text" class="tabla tabla_imprenta input_2" name="fecha" id="fecha_imprentas"></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
                        </div>
                        <!-- table modulos-->
                    </div>
                    <!--/.modulos-->

                    <!--submodulos-->
                    <div class="tab-pane fade" id="submodulos" role="submodulos">
                        <!-- table submodulos-->
                        <div class="table-responsive">

                            <table id="tabla_submodulos" class="table table-striped display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100% ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Modulo</th>
                                        <th>Nombre</th>
                                        <th>Ruta</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <thead id="thead_filtros" style="text-align: center;">
                                    <tr>
                                        <th><input type="text" class="tabla tabla_troqueladora input_troqueladora_1" name="id_reporte" id="id_reporte_troqueladora"></th>
                                        <th><input type="text" class="tabla tabla_troqueladora input_troqueladora_2" name="fecha" id="fecha_troqueladora"></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>

                        </div>
                        <!-- table submodulos-->
                    </div>
                    <!--/.submodulos -->
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Modulo  -->
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
                        <input type="text" id="codigo" hidden>
                    </div>
                    <div class="form-group">
                        <label for="tipo_maquina">Nombre</label>
                        <input class="form-control form-control" type="text" id="nombre" data-validetta="required">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning botones cerrarModal" data-dismiss="modal" >Cerrar</button>
                    <button type="submit" class="btn btn-success botones opcion" data-opcion=""><span class="new-state"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Submodulo  -->
<div class="modal fade" id="exampleModalSubmodulo" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="submodulo" data-table="maquinas2" data-id="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="new-state"></span><span class="new-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nombre_submodulo">Nombre Submodulo</label>
                        <input class="form-control form-control" type="text" id="nombre_submodulo" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="modulo_submodulo">Modulo</label>
                        <select class="js-select-basic-singles-catalogos" id="modulo_submodulo" data-validetta="required">
                            <option value="" id="first"></option>
                            <?php foreach ($list_modulos as $key => $value) { ?>
                                <option value="<?= $value->id ?>"> <?= $value->modulo ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ruta_submodulo">Ruta</label>
                        <input class="form-control form-control" type="text" id="ruta_submodulo">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning botones cerrarModal" data-dismiss="modal" >Cerrar</button>
                    <button type="submit" class="btn btn-success botones opcion" data-opcion=""><span class="new-state"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>



<link rel="stylesheet" href="<?php echo base_url("resources/app/catalogo/modulos/css/style.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("resources/app/catalogo/modulos/js/show.js"); ?>"></script>