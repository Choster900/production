<div class="contenedor">
    <section class="section my-5 pb-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <table id="resumen" class="table table-bordered text-center p-0 mt-2">
                    <tbody>
                        <tr>
                            <td>AUDITOR<br /><?php echo $auditoria_info_general[0]->nombre  ?></td>
                            <td>FECHA<br /> <?php echo $auditoria_info_general[0]->fecha_reporte  ?></td>
                            <td>TURNO<br /> <?php echo $auditoria_info_general[0]->turno  ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">TOTAL : <?php echo count($detalle_auditoria)  ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 col-md-12 mb-4"></div>
            <div class="col-lg-2 col-md-12 mb-4">
                <button type="button" id="crear_detalle_reporte" class="btn btn-xs crear mx-auto botones" data-toggle="modal" data-target="#modal_auditoria">
                    <img src="<?php echo base_url() ?>resources/generales/img/icons/Maquina.png" alt="crear">
                    <span>Crear Linea</span>
                </button>
            </div>
        </div>


        <div class="row">
            <!-- table -->
            <div class="table-responsive">

                <table id="tabla_auditoria" class="table table-striped display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100%; border-collapse: collapse">
                    <thead>
                        <tr>
                            <th style="font-size: 8pt; width:10px;">ID</th>
                            <th style="font-size: 8pt; width:10px;">Id Trello</th>
                            <th style="font-size: 8pt; width:10px;">Ot</th>
                            <th style="font-size: 8pt;">Hora</th>
                            <th style="font-size: 8pt;">Producto</th>
                            <th style="font-size: 8pt;">Operador</th>
                            <th style="font-size: 8pt;">Maquina</th>
                            <th style="font-size: 8pt; width:10px;">
                                <span id="mostrar_todo" style="padding: 0;">
                                    <img src="<?php echo base_url("resources/generales/img/icons/actualizar.png"); ?>" alt="" height="20px">
                                </span>
                            </th>
                        </tr>
                    </thead>

                    <thead id="thead_filtros" style="text-align: center;">
                        <tr>
                            <th><input style="width: 60px;" type="text" class="tabla "></th><!-- ID -->
                            <th><input style="width: 60px;" type="text" class="tabla "></th><!-- ID TRELLO -->
                            <th><input style="width: 60px;" type="text" class="tabla "></th><!-- OT -->
                            <th><input style="width: 60px;" type="text" class="tabla "></th><!-- HORA -->
                            <th><input style="width: 100px;" type="text" class="tabla "></th><!-- PRODUCTO -->
                            <th><input style="width: 100px;" type="text" class="tabla "></th><!-- OPERADOR -->
                            <th>
                                <select class="js-select-basic-singles" style="font-size: 8pt;width: 100%">
                                    <!-- MAQUINA -->
                                    <option value="">Maquina</option>
                                    <?php foreach ($maquinas as $key => $value) { ?>
                                        <option value="<?= $value->codigo_maquina ?>"> <?= $value->codigo_maquina ?></option>
                                    <?php } ?>

                                </select>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
            <!-- table -->
        </div>
    </section>
</div>

<style>
    .input-tabla-reporte {
        background-color: rgba(31, 53, 88, 0.2);
        font-size: 12px;
        font-weight: bold;
        font-weight: bold;
        text-align: center;
    }

    .select2-container--bootstrap4 .select2-selection--single {
        height: calc(1.5em + -0.1rem + 10px) !important;
        background-color: rgba(31, 53, 88, 0.2);
    }
</style>

<!-- Central Modal Large Info-->
<div class="modal fade" id="modal_auditoria" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Auditoria de proceso y producto en proceso-OFSSET</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3 col-md-12 mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="background-color: rgba(31, 53, 88, 0.2);border-color: transparent;padding: 0;">
                                <img src="<?php echo base_url() ?>resources/generales/img/icons/Hora.png" alt="Hora" width="28px">
                            </span>
                            <input type="text" class="form-control input-tabla-reporte" id="txtTiempo" placeholder="" value="00:00:00" disabled>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 mb-4"></div>
                    <div class="col-lg-5 col-md-12 mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="background-color: transparent;border-color: transparent;">Operador</span>
                            <select class="js-select-basic-singles input-tabla-reporte rdo-input" id="slcOperador" style="font-size: 8pt; width: 100px;" data-tabla-name="detalle_fcc013" data-id="" data-name="operador">
                                <option value="Ninguno">Ninguno</option>
                                <?php foreach ($operadores as $key => $op) { ?>
                                    <option value="<?= $op->nombre_operador ?>">
                                        <?= $op->codigo_operador ?>-<?= $op->nombre_operador ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        Producto
                        <input type="text" class="form-control input-tabla-reporte" id="txtProducto" readonly>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4">
                        ID Trello
                        <input type="text" class="form-control input-tabla-reporte input_buscar_ot" id="txtIdTrello">
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        Máquina
                        <select class="js-select-basic-singles input-tabla-reporte input_buscar_ot" id="slcMaquina" style="font-size: 8pt; width: 200x;">
                            <option value="Ninguno">Ninguno</option>
                            <?php foreach ($maquinas as $key => $value) { ?>
                                <option value="<?= $value->codigo_maquina ?>"> <?= $value->codigo_maquina ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

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

                    .seccion-checkbox {
                        background-color: rgba(31, 53, 88, 0.2);
                        font-size: 8pt;
                        border-radius: 17px;
                        border: white 10px solid;
                        padding-bottom: 10px;
                    }

                    .seccion-checkbox h5 {
                        padding-top: 10px;

                    }
                </style>

                <div class="accordion z-depth-1" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <!-- Accordion  Impresion  -->

                    <div class="card">
                        <div class="card-header car-tittle" role="tab" id="headingOne">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0" class="title-area">Pegadora</h5>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header" role="tab" id="proceso">
                                        <a data-toggle="collapse" href="#collapseProceso" aria-expanded="false" aria-controls="collapseProceso" style="color: black;">
                                            <h5 class="mb-0">Proceso</h5>
                                        </a>
                                    </div>
                                    <div id="collapseProceso" class="collapse" role="tabpanel" aria-labelledby="proceso" data-parent="#accordionExs">
                                        <div class="row card-body" id="div-proceso-impresino"></div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="producto">
                                            <a data-toggle="collapse" href="#collapseproducto" aria-expanded="false" aria-controls="collapseproducto" style="color: black;">
                                                <h5 class="mb-0">Producto</h5>
                                            </a>
                                        </div>
                                        <div id="collapseproducto" class="collapse" role="tabpanel" aria-labelledby="producto" data-parent="#accordionExs">
                                            <div class="row card-body" id="div-producto-producto"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // Fin de Impresion -->

                        <!-- BARNIZ UV. -->
                        <div class="card">
                            <div class="card-header car-tittle" role="tab" id="headingThree">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0">Convertidora</h5>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="proceso-barniz">
                                            <a data-toggle="collapse" href="#collapseProceso-barniz" aria-expanded="false" aria-controls="collapseProceso-barniz" style="color: black;">
                                                <h5 class="mb-0">Proceso</h5>
                                            </a>
                                        </div>
                                        <div id="collapseProceso-barniz" class="collapse " role="tabpanel" aria-labelledby="proceso-barniz" data-parent="#accordionExs1">
                                            <div class="row card-body" id="div-proceso-convertidora"></div>
                                        </div>
                                        <div class="card-header" role="tab" id="producto-barniz">
                                            <a data-toggle="collapse" href="#collapseproducto-barniz" aria-expanded="false" aria-controls="collapseproducto-barniz" style="color: black;">
                                                <h5 class="mb-0">Producto</h5>
                                            </a>
                                        </div>
                                        <div id="collapseproducto-barniz" class="collapse " role="tabpanel" aria-labelledby="producto-barniz" data-parent="#accordionExs1">
                                            <div class="row card-body" id="div-producto-convertidora"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--\. BARNIZ UV. -->

                        <!-- Accordion Tirpo de Impresion -->
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header car-tittle" role="tab" id="headingFour">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0">Tipo de pegado</h5>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
                                <div class="row card-body" id="div-tipo-pegado"></div>
                            </div>
                        </div>
                        <!--// Accordion Tirpo de Impresion -->
                    </div>
                </div>
                <!--/.Content-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-4">

                        <input type="text" class="form-control rdo-input" style="background-color:transparent;border: none; border-bottom: 1px solid black ;height:38px;text-align:center" id="txtObservaciones" name="" placeholder="Observaciones de pegadora" data-tabla-name="detalle_fcc013" data-id="" data-name="observaciones">
                    </div>

                </div>
            </div>
        </div>
        <!-- Central Modal Large Info-->
    </div>
</div>
<link rel="stylesheet" href="<?php echo base_url("resources/app/Calidad/Auditorias/css/detalle_auditoria.css"); ?>">

<style>
    .myFont {
        font-size: 8pt;
    }
</style>
<script>
    $('.js-select-basic-singles').select2({
        width: 'resolve',
        dropdownAutoWidth: true,
        theme: "bootstrap4",
        dropdownCssClass: "myFont",
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    var url_analizada = /^(\w+):\/\/([^\/]+)([^]+)$/.exec(window.location);
    var parametros = url_analizada[3].split('/') //OBTENEMOS LOS PARAMETROS MAS IMPORTANTE [CODIGO_REPORTE,TIPO_REPORTE,CODIGO_MAQUINA]
</script>
<script src="<?php echo base_url("resources/app/Calidad/Auditorias/js/Pegadora/show_pegadora.js"); ?>"></script>
<script src="<?php echo base_url("resources/app/Calidad/Auditorias/js/Pegadora/create_pegadora.js"); ?>"></script>
<script src="<?php echo base_url("resources/app/Calidad/Auditorias/js/Pegadora/update_pegadora.js"); ?>"></script>
<script src="<?php echo base_url("resources/app/Calidad/Auditorias/js/Pegadora/trello.js"); ?>"></script>