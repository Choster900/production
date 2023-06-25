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
                                <th>Maquina</th>
                                <th>Código-Tablero</th>
                                <th>Lista</th>
                                <th>Labels</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <thead id="thead_filtros" style="text-align: center;">
                            <tr>
                                <th><input type="text" class="tabla"></th>
                                <th><input type="text" class="tabla"></th>
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
                        <label for="nombre_maquina">Maquina</label>
                        <select class="js-select-basic-singles-catalogos" id="nombre_maquina" data-validetta="required">
                            <option value="" id="first"></option>
                            <?php foreach ($maquinas as $key => $value) { ?>
                                <option value="<?= $value->codigo_maquina ?>"> <?= $value->codigo_maquina ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="codigo_tablero">Codigo Tablero</label>
                        <input class="form-control form-control" type="text" id="codigo_tablero" data-validetta="required">
                    </div>


                    <!-- Acordion -->
                    <style>
                        .z-depth-1 {
                            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 1%), 0 2px 11px 0 rgb(0 0 0 / 1%);
                        }

                        .accordion .card .car-tittle {
                            border-bottom: 0;
                            padding: 1rem 1.5rem;
                            background: #1F3558;
                        }

                        .accordion .card .car-tittle a {
                            color: white;
                        }

                        .card {
                            margin-top: 1px;
                            /* margin-bottom: -45px; */
                        }

                        /*.seccion-checkbox {
                            background-color: rgba(31, 53, 88, 0.2);
                            font-size: 8pt;
                            border-radius: 17px;
                            border: white 10px solid;
                            padding-bottom: 10px;
                        }

                        .seccion-checkbox h5 {
                            padding-top: 10px;

                        }*/
                    </style>

                    <div class="accordion z-depth-1" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <!-- Accordion  Impresion  -->
                        <div class="card">
                            <div class="card-header car-tittle" role="tab" id="headingOne">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="mb-0" class="title-area">Listas</h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                                <div class="card-body" id="">
                                    <div class="seccion-checkbox col-lg-12 col-md-12 mb-12">
                                        <div class="form-group">
                                            <label for="list_terminado">Terminado</label>
                                            <input class="form-control form-control" type="text" id="list_terminado">
                                        </div>
                                        <div class="form-group">
                                            <label for="list_planificado">Planificado</label>
                                            <input class="form-control form-control" type="text" id="list_planificado">
                                        </div>
                                        <div class="form-group">
                                            <label for="list_suspendida">Suspendida</label>
                                            <input class="form-control form-control" type="text" id="list_suspendida">
                                        </div>
                                        <div class="form-group">
                                            <label for="label_4">Proceso</label>
                                            <input class="form-control form-control" type="text" id="list_proceso">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // Fin de Impresion -->


                            <!--Acordion Label de Trello -->
                            <div class="card">
                                <div class="card-header car-tittle" role="tab" id="headingTwo">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5 class="mb-0">Label</h5>
                                    </a>
                                </div>

                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                                    <div class="card-body" id="div-trello-label">
                                        <div class="seccion-checkbox col-lg-12 col-md-12 mb-12">
                                            <div class="form-group">
                                                <input type="hidden" id="id_trello">
                                            </div>
                                            <div class="form-group">
                                                <label for="codigo_producto">Código Producto</label>
                                                <input class="form-control form-control" type="text" id="codigo_producto">
                                            </div>
                                            <div class="form-group">
                                                <label for="label_2">Label 2</label>
                                                <input class="form-control form-control" type="text" id="label_2">
                                            </div>
                                            <div class="form-group">
                                                <label for="label_3">Label 3</label>
                                                <input class="form-control form-control" type="text" id="label_3">
                                            </div>
                                            <div class="form-group">
                                                <label for="label_4">Label 4</label>
                                                <input class="form-control form-control" type="text" id="label_4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // Acordion Label de Trello   -->
                        </div>
                    </div>
                    <!-- Acordion -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning botones" data-dismiss="modal" id="cerrarModal">Cerrar</button>
                    <button type="submit" class="btn btn-success botones opcion" data-opcion=""><span class="new-state"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo base_url("resources/app/catalogo/trello/css/style.css"); ?>"></script>
<script src="<?php echo base_url("resources/app/catalogo/trello/js/show.js"); ?>"></script>