<style>
    .div-img-test {
        display: inline-block;

        padding: 5px
    }

    .demo-text {
        clear: left;
        text-align: right;
        vertical-align: middle;
        line-height: 25px;
        font-size: 15pt;
    }

    .glyphicon {
        display: inline-block;
        vertical-align: top;
    }

    .img-info {
        width: 25px;
        cursor: pointer;
    }

    .button-info {
        background-color: transparent;
        border: none;
    }

    /* Contenedor del popup */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    /* pop-up actual */
    .popup .popuptext {
        visibility: hidden;
        width: 189px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        /* bottom: 125%; */
        /* left: 50%; */
        margin-left: 14px;
        /* margin-bottom: 180px; */
        margin-top: -4px;
    }


    /* Muestra del Pop-up*/


    .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 13px;
        left: -4px;
        margin-left: -6px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent #555 transparent transparent;
    }

    /* Cambio para mostrar/ocultar el contenedor del pop-up */
    .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s
    }

    /* Animación del pop-up */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<!--Troquelado -->
<div class="card-header car-tittle" role="tab" id="headingOne">
    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h5 class="mb-0" class="title-area">Troquelado</h5>
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
                <div class="row card-body" id="div-proceso-impresino">

                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">BT</span>
                            <button class="popup button-info" onclick="bt_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="bt_proceso_tro">BT = BOLSA DE TRABAJO: Debe encontrarse aprobada por planificación,
                                    calidad y producción, Asi como tener la OTA y OT debe contener todos los
                                    elementos necesarios (Montaje, Dobles de pleigos, cantidad de pliegos a
                                    imprimir, etc,) y estar firmada.</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group1" type="radio" id="radio1" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_01">
                        <label class="form-check-label" for="radio1">Ok</label>
                        <input class="form-check-input rdo-input" name="group1" type="radio" id="radio2" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_01">
                        <label class="form-check-label" for="radio2">NO</label>
                        <input class="form-check-input rdo-input" name="group1" type="radio" id="radio3" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_01">
                        <label class="form-check-label" for="radio3">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">ART / PLO</span>
                            <button class="popup button-info" onclick="art_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="art_proceso_tro">ART/PLO = ARTE O PLOTTER: Impresión colocada por diseño (Que según el
                                    caso) es la referencia de color y el arte. La muestra plotter es el color más
                                    cercana a la impresión en maquina offset. Y el arte aprobado es un muestra
                                    con impresión digital la cual solo hace referencia a el texto que contiene
                                    (Nota: La muestra digital "Arte aprobado puede ser referencia de color ver
                                    OTA")</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group2" type="radio" id="radio4" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_02">
                        <label class="form-check-label" for="radio4">Ok</label>
                        <input class="form-check-input rdo-input" name="group2" type="radio" id="radio5" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_02">
                        <label class="form-check-label" for="radio5">NO</label>
                        <input class="form-check-input rdo-input" name="group2" type="radio" id="radio6" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_02">
                        <label class="form-check-label" for="radio6">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">F</span>
                            <button class="popup button-info" onclick="f_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="f_proceso_tro">F = FIBRA: Durante proceso de troquelado la fibra del producto no debe
                                    presentar arranque (aplica a las areas donde el producto tiene corte arranque
                                    puede ser en area impresa o de reverso de material)</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group3" type="radio" id="radio7" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_03">
                        <label class="form-check-label" for="radio7">Ok</label>
                        <input class="form-check-input rdo-input" name="group3" type="radio" id="radio8" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_03">
                        <label class="form-check-label" for="radio8">NO</label>
                        <input class="form-check-input rdo-input" name="group3" type="radio" id="radio9" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_03">
                        <label class="form-check-label" for="radio9">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">AP</span>
                            <button class="popup button-info" onclick="ap_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="ap_proceso_tro">AP = ARMADO DE PIEZA: Realizar armado de pieza de produccion durante la
                                    inspeccion para asegurar que producto cierre el fondo automatico, candado
                                    (gabilanes) y que el mismo no este pestañudo.</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group4" type="radio" id="radio10" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_04">
                        <label class="form-check-label" for="radio10">Ok</label>
                        <input class="form-check-input rdo-input" name="group4" type="radio" id="radio11" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_04">
                        <label class="form-check-label" for="radio11">NO</label>
                        <input class="form-check-input rdo-input" name="group4" type="radio" id="radio12" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_04">
                        <label class="form-check-label" for="radio12">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">MEC</span>
                            <button class="popup button-info" onclick="mec_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="mec_proceso_tro">MEC = MECANICO: Muestra Adjunta con o sin impresión del armado del
                                    producto para verificar armado de caja lineal, fondo automatico y/o medidas
                                    del mismo.</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group5" type="radio" id="radio13" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_05">
                        <label class="form-check-label" for="radio13">Ok</label>
                        <input class="form-check-input rdo-input" name="group5" type="radio" id="radio14" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_05">
                        <label class="form-check-label" for="radio14">NO</label>
                        <input class="form-check-input rdo-input" name="group5" type="radio" id="radio15" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_05">
                        <label class="form-check-label" for="radio15">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">HT</span>
                            <button class="popup button-info" onclick="ht_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="ht_proceso_tro">HT = HUELLA DE TROQUEL: Impresión en papel vegetal o acetato que permite
                                    visualizar los cortes y dobleces de producto que deben ser troquelado.
                                    Permite verificar cualquier falla de medidas o distribucion en el troquel..</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group6" type="radio" id="radio16" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_06">
                        <label class="form-check-label" for="radio16">Ok</label>
                        <input class="form-check-input rdo-input" name="group6" type="radio" id="radio17" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_06">
                        <label class="form-check-label" for="radio17">NO</label>
                        <input class="form-check-input rdo-input" name="group6" type="radio" id="radio18" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_06">
                        <label class="form-check-label" for="radio18">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">MSC</span>
                            <button class="popup button-info" onclick="msc_proceso_trp()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="msc_proceso_trp">MSC = MATRIS SEGÚN CALIBRE: Se compara con cuadro de matrices para
                                    verificar que se utilizen las matrices adecuadas según el calibre de material.</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group7" type="radio" id="radio19" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_07 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_07">
                        <label class="form-check-label" for="radio19">Ok</label>
                        <input class="form-check-input rdo-input" name="group7" type="radio" id="radio20" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_07 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_07">
                        <label class="form-check-label" for="radio20">NO</label>
                        <input class="form-check-input rdo-input" name="group7" type="radio" id="radio21" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_07 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_07">
                        <label class="form-check-label" for="radio21">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">TP</span>
                            <button class="popup button-info" onclick="tp_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="tp_proceso_tro">TP = TARIMA PLASTIFICADA: Para producto que se han impresión y se

                                    requiere de un tiempo de secado o se suspende proceso de producción.</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group8" type="radio" id="radio22" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_08 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_08">
                        <label class="form-check-label" for="radio22">Ok</label>
                        <input class="form-check-input rdo-input" name="group8" type="radio" id="radio23" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_08 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_08">
                        <label class="form-check-label" for="radio23">NO</label>
                        <input class="form-check-input rdo-input" name="group8" type="radio" id="radio24" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_08 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_08">
                        <label class="form-check-label" for="radio24">NA</label>
                    </div>
                    <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                        <div class="div-img-test col-12">
                            <span class="demo-text">IP</span>
                            <button class="popup button-info" onclick="ip_proceso_tro()">
                                <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                <span class="popuptext" id="ip_proceso_tro">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                    operadores de máquinas a tarimas de producto.</span>
                            </button>
                        </div>
                        <input class="form-check-input rdo-input" name="group9" type="radio" id="radio25" value="A" <?php echo ($troquelado_proceso[0]->proc_tro_09 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_09">
                        <label class="form-check-label" for="radio25">Ok</label>
                        <input class="form-check-input rdo-input" name="group9" type="radio" id="radio26" value="B" <?php echo ($troquelado_proceso[0]->proc_tro_09 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_09">
                        <label class="form-check-label" for="radio26">NO</label>
                        <input class="form-check-input rdo-input" name="group9" type="radio" id="radio27" value="C" <?php echo ($troquelado_proceso[0]->proc_tro_09 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_tro_09">
                        <label class="form-check-label" for="radio27">NA</label>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="producto">
                    <a data-toggle="collapse" href="#collapseproducto" aria-expanded="false" aria-controls="collapseproducto" style="color: black;">
                        <h5 class="mb-0">Producto</h5>
                    </a>
                </div>
                <div id="collapseproducto" class="collapse" role="tabpanel" aria-labelledby="producto" data-parent="#accordionExs">
                    <div class="row card-body" id="div-producto-producto">
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">FR</span>
                                <button class="popup button-info" onclick="fr_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="fr_producto_tro">FR = FALLADO DE REGISTRO:Mala colocacion de troquelado(troquel no cae
                                        según arte aprobado), debido a problemas con guia (jalón) de maquina,
                                        fallado de registro de impresión o problemas con diseño.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group10" type="radio" id="radio28" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_01">
                            <label class="form-check-label" for="radio28">Ok</label>
                            <input class="form-check-input rdo-input" name="group10" type="radio" id="radio29" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_01">
                            <label class="form-check-label" for="radio29">NO</label>
                            <input class="form-check-input rdo-input" name="group10" type="radio" id="radio30" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_01">
                            <label class="form-check-label" for="radio30">NA</label>
                        </div>

                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">C</span>
                                <button class="popup button-info" onclick="c_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="c_producto_tro">C = CUADRATURA: Verificacion de producto que sus lados sean según
                                        especificaciones de arte, que en fondo automatico no presente agujeros
                                        mayores a 1 mm.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group11" type="radio" id="radio31" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_02">
                            <label class="form-check-label" for="radio31">Ok</label>
                            <input class="form-check-input rdo-input" name="group11" type="radio" id="radio32" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_02">
                            <label class="form-check-label" for="radio32">NO</label>
                            <input class="form-check-input rdo-input" name="group11" type="radio" id="radio33" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_02">
                            <label class="form-check-label" for="radio33">NA</label>
                        </div>

                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">RV</span>
                                <button class="popup button-info" onclick="rv_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="rv_producto_tro">RV = REVENTADO: Producto reventado o estallado debido a basura en la
                                        matriz, material contra el hilo, tipo de calibre y tipo de matriz, plecas altas,
                                        excesiva presion.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group12" type="radio" id="radio34" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_03">
                            <label class="form-check-label" for="radio34">Ok</label>
                            <input class="form-check-input rdo-input" name="group12" type="radio" id="radio35" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_03">
                            <label class="form-check-label" for="radio35">NO</label>
                            <input class="form-check-input rdo-input" name="group12" type="radio" id="radio36" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_03">
                            <label class="form-check-label" for="radio36">NA</label>
                        </div>

                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">FS</span>
                                <button class="popup button-info" onclick="fs_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="fs_producto_tro">FS = FALTANTE DE SISA: No se coloca matriz o durante proceso de
                                        produccion matriz se despega.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group13" type="radio" id="radio37" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_04">
                            <label class="form-check-label" for="radio37">Ok</label>
                            <input class="form-check-input rdo-input" name="group13" type="radio" id="radio38" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_04">
                            <label class="form-check-label" for="radio38">NO</label>
                            <input class="form-check-input rdo-input" name="group13" type="radio" id="radio39" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_04">
                            <label class="form-check-label" for="radio39">NA</label>
                        </div>

                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">SD</span>
                                <button class="popup button-info" onclick="sd_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="sd_producto_tro">SD = SISA DEFINIDA: Verificacion de que sisa este marcada y que durante el
                                        dobles de sisa no se dificulte el armado (debido a desgaste de la sisa).</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group14" type="radio" id="radio40" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_05">
                            <label class="form-check-label" for="radio40">Ok</label>
                            <input class="form-check-input rdo-input" name="group14" type="radio" id="radio41" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_05">
                            <label class="form-check-label" for="radio41">NO</label>
                            <input class="form-check-input rdo-input" name="group14" type="radio" id="radio42" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_05">
                            <label class="form-check-label" for="radio42">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">PER</span>
                                <button class="popup button-info" onclick="per_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="per_producto_tro">PER = PERFORADO: (Area que puede retirarse de un producto por medio de
                                        presion manual) Perforado definido, facil de cortar pero no debe ser debil en
                                        todo el producto que se pegue a maquina .</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group15" type="radio" id="radio43" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_06">
                            <label class="form-check-label" for="radio43">Ok</label>
                            <input class="form-check-input rdo-input" name="group15" type="radio" id="radio44" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_06">
                            <label class="form-check-label" for="radio44">NO</label>
                            <input class="form-check-input rdo-input" name="group15" type="radio" id="radio45" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_06">
                            <label class="form-check-label" for="radio45">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">RAL</span>
                                <button class="popup button-info" onclick="ral_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="ral_producto_tro">RAL = REALZADO: No pasado, letra o imagen definida y registrado.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group16" type="radio" id="radio46" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_07 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_07">
                            <label class="form-check-label" for="radio46">Ok</label>
                            <input class="form-check-input rdo-input" name="group16" type="radio" id="radio47" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_07 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_07">
                            <label class="form-check-label" for="radio47">NO</label>
                            <input class="form-check-input rdo-input" name="group16" type="radio" id="radio48" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_07 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_07">
                            <label class="form-check-label" for="radio48">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">FOIL</span>
                                <button class="popup button-info" onclick="foil_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="foil_producto_tro">FOIL = FOIL: Anclaje de foil, Centrado y ubicación del mismo, color de foil</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group17" type="radio" id="radio49" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_08 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_08">
                            <label class="form-check-label" for="radio49">Ok</label>
                            <input class="form-check-input rdo-input" name="group17" type="radio" id="radio50" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_08 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_08">
                            <label class="form-check-label" for="radio50">NO</label>
                            <input class="form-check-input rdo-input" name="group17" type="radio" id="radio51" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_08 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_08">
                            <label class="form-check-label" for="radio51">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">PC</span>
                                <button class="popup button-info" onclick="pc_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="pc_producto_tro">PC = PEGADO DE CORTE: Áreas de corte de troquelado no debe presentar
                                        union solo en área de amares.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group18" type="radio" id="radio52" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_09 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_09">
                            <label class="form-check-label" for="radio52">Ok</label>
                            <input class="form-check-input rdo-input" name="group18" type="radio" id="radio53" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_09 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_09">
                            <label class="form-check-label" for="radio53">NO</label>
                            <input class="form-check-input rdo-input" name="group18" type="radio" id="radio54" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_09 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_09">
                            <label class="form-check-label" for="radio54">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">RVA</span>
                                <button class="popup button-info" onclick="rva_producto_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="rva_producto_tro">RVA = REBAVA: Causado debido a que pegado de corte.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group19" type="radio" id="radio55" value="A" <?php echo ($troquelado_proceso[0]->prod_tro_10 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_10">
                            <label class="form-check-label" for="radio55">Ok</label>
                            <input class="form-check-input rdo-input" name="group19" type="radio" id="radio56" value="B" <?php echo ($troquelado_proceso[0]->prod_tro_10 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_10">
                            <label class="form-check-label" for="radio56">NO</label>
                            <input class="form-check-input rdo-input" name="group19" type="radio" id="radio57" value="C" <?php echo ($troquelado_proceso[0]->prod_tro_10 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_tro_10">
                            <label class="form-check-label" for="radio57">NA</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- // Fin de Troquelado -->


<!-- Guillotina -->
<div class="card">
    <div class="card-header car-tittle" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 class="mb-0">Guillotina.</h5>
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
                    <div class="row card-body" id="div-proceso-barniz">
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">BT / SLC</span>
                                <button class="popup button-info" onclick="bt_proceso_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="bt_proceso_bar">BT = BOLSA DE TRABAJO: Debe encontrarse aprobada por planificación,
                                        calidad y producción, Asi como tener la OTA y OT debe contener todos los
                                        elementos necesarios (Montaje, Dobles de pleigos, cantidad de pliegos a
                                        imprimir, etc,) y estar firmada.

                                        SLC = SOLICITUD DE CORTE: Expecificaciones de corte y tipo de material a
                                        utilizar.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group20" type="radio" id="radio58" value="A" <?php echo ($troquelado_proceso[0]->proc_gillo_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_01">
                            <label class="form-check-label" for="radio58">Ok</label>
                            <input class="form-check-input rdo-input" name="group20" type="radio" id="radio59" value="B" <?php echo ($troquelado_proceso[0]->proc_gillo_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_01">
                            <label class="form-check-label" for="radio59">NO</label>
                            <input class="form-check-input rdo-input" name="group20" type="radio" id="radio60" value="C" <?php echo ($troquelado_proceso[0]->proc_gillo_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_01">
                            <label class="form-check-label" for="radio60">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">ESC</span>
                                <button class="popup button-info" onclick="esc_proceso_tro()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="esc_proceso_tro">ESC = ESCUADRA: Materia prima no cuente con desnivelacion de uno o varios
                                        de sus lados.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group21" type="radio" id="radio61" value="A" <?php echo ($troquelado_proceso[0]->proc_gillo_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_02">
                            <label class="form-check-label" for="radio61">Ok</label>
                            <input class="form-check-input rdo-input" name="group21" type="radio" id="radio62" value="B" <?php echo ($troquelado_proceso[0]->proc_gillo_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_02">
                            <label class="form-check-label" for="radio62">NO</label>
                            <input class="form-check-input rdo-input" name="group21" type="radio" id="radio63" value="C" <?php echo ($troquelado_proceso[0]->proc_gillo_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_02">
                            <label class="form-check-label" for="radio63">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">MCOR</span>
                                <button class="popup button-info" onclick="mcor_proceso_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="mcor_proceso_bar">MCOR = MAL CORTADO: Producto con rebaba de material debio a filo de
                                        cuchillas, medidas incorrecta.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group22" type="radio" id="radio64" value="A" <?php echo ($troquelado_proceso[0]->proc_gillo_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_03">
                            <label class="form-check-label" for="radio64">Ok</label>
                            <input class="form-check-input rdo-input" name="group22" type="radio" id="radio65" value="B" <?php echo ($troquelado_proceso[0]->proc_gillo_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_03">
                            <label class="form-check-label" for="radio65">NO</label>
                            <input class="form-check-input rdo-input" name="group22" type="radio" id="radio66" value="C" <?php echo ($troquelado_proceso[0]->proc_gillo_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_03">
                            <label class="form-check-label" for="radio66">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">GC</span>
                                <button class="popup button-info" onclick="cg_proceso_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="cg_proceso_bar">GC = GUIA DE CORTE: Guia de corte colocada para ayudar a el operario a
                                        realizar los cortes según medidas solicitadas, en caso que no se encuentren la
                                        medida sera basada a muestras adjunta o arte aprobado.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group23" type="radio" id="radio67" value="A" <?php echo ($troquelado_proceso[0]->proc_gillo_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_04">
                            <label class="form-check-label" for="radio67">Ok</label>
                            <input class="form-check-input rdo-input" name="group23" type="radio" id="radio68" value="B" <?php echo ($troquelado_proceso[0]->proc_gillo_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_04">
                            <label class="form-check-label" for="radio68">NO</label>
                            <input class="form-check-input rdo-input" name="group23" type="radio" id="radio69" value="C" <?php echo ($troquelado_proceso[0]->proc_gillo_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_04">
                            <label class="form-check-label" for="radio69">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">CE</span>
                                <button class="popup button-info" onclick="ce_proceso_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="ce_proceso_bar">Sin descripcion</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group24" type="radio" id="radio70" value="A" <?php echo ($troquelado_proceso[0]->proc_gillo_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_05">
                            <label class="form-check-label" for="radio70">Ok</label>
                            <input class="form-check-input rdo-input" name="group24" type="radio" id="radio71" value="B" <?php echo ($troquelado_proceso[0]->proc_gillo_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_05">
                            <label class="form-check-label" for="radio71">NO</label>
                            <input class="form-check-input rdo-input" name="group24" type="radio" id="radio72" value="C" <?php echo ($troquelado_proceso[0]->proc_gillo_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_05">
                            <label class="form-check-label" for="radio72">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">IP</span>
                                <button class="popup button-info" onclick="ip_proceso_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="ip_proceso_bar">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                        operadores de máquinas a tarimas de producto.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group25" type="radio" id="radio73" value="A" <?php echo ($troquelado_proceso[0]->proc_gillo_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_06">
                            <label class="form-check-label" for="radio73">Ok</label>
                            <input class="form-check-input rdo-input" name="group25" type="radio" id="radio74" value="B" <?php echo ($troquelado_proceso[0]->proc_gillo_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_06">
                            <label class="form-check-label" for="radio74">NO</label>
                            <input class="form-check-input rdo-input" name="group25" type="radio" id="radio75" value="C" <?php echo ($troquelado_proceso[0]->proc_gillo_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="proc_gillo_06">
                            <label class="form-check-label" for="radio75">NA</label>
                        </div>
                    </div>
                </div>
                <div class="card-header" role="tab" id="producto-barniz">
                    <a data-toggle="collapse" href="#collapseproducto-barniz" aria-expanded="false" aria-controls="collapseproducto-barniz" style="color: black;">
                        <h5 class="mb-0">Producto</h5>
                    </a>
                </div>
                <div id="collapseproducto-barniz" class="collapse " role="tabpanel" aria-labelledby="producto-barniz" data-parent="#accordionExs1">
                    <div class="row card-body" id="div-producto-barniz">
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">MED</span>
                                <button class="popup button-info" onclick="med_producto_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="med_producto_bar">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                        operadores de máquinas a tarimas de producto.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group26" type="radio" id="radio76" value="A" <?php echo ($troquelado_proceso[0]->prod_gillo_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_01">
                            <label class="form-check-label" for="radio76">Ok</label>
                            <input class="form-check-input rdo-input" name="group26" type="radio" id="radio77" value="B" <?php echo ($troquelado_proceso[0]->prod_gillo_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_01">
                            <label class="form-check-label" for="radio77">NO</label>
                            <input class="form-check-input rdo-input" name="group26" type="radio" id="radio78" value="C" <?php echo ($troquelado_proceso[0]->prod_gillo_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_01">
                            <label class="form-check-label" for="radio78">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">CAL</span>
                                <button class="popup button-info" onclick="cal_producto_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="cal_producto_bar">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                        operadores de máquinas a tarimas de producto.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group27" type="radio" id="radio79" value="A" <?php echo ($troquelado_proceso[0]->prod_gillo_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_02">
                            <label class="form-check-label" for="radio79">Ok</label>
                            <input class="form-check-input rdo-input" name="group27" type="radio" id="radio80" value="B" <?php echo ($troquelado_proceso[0]->prod_gillo_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_02">
                            <label class="form-check-label" for="radio80">NO</label>
                            <input class="form-check-input rdo-input" name="group27" type="radio" id="radio81" value="C" <?php echo ($troquelado_proceso[0]->prod_gillo_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_02">
                            <label class="form-check-label" for="radio81">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">AN</span>
                                <button class="popup button-info" onclick="an_producto_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="an_producto_bar">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                        operadores de máquinas a tarimas de producto.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group28" type="radio" id="radio82" value="A" <?php echo ($troquelado_proceso[0]->prod_gillo_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_03">
                            <label class="form-check-label" for="radio82">Ok</label>
                            <input class="form-check-input rdo-input" name="group28" type="radio" id="radio83" value="B" <?php echo ($troquelado_proceso[0]->prod_gillo_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_03">
                            <label class="form-check-label" for="radio83">NO</label>
                            <input class="form-check-input rdo-input" name="group28" type="radio" id="radio84" value="C" <?php echo ($troquelado_proceso[0]->prod_gillo_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_03">
                            <label class="form-check-label" for="radio84">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">LA</span>
                                <button class="popup button-info" onclick="la_producto_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="la_producto_bar">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                        operadores de máquinas a tarimas de producto.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group29" type="radio" id="radio85" value="A" <?php echo ($troquelado_proceso[0]->prod_gillo_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_04">
                            <label class="form-check-label" for="radio85">Ok</label>
                            <input class="form-check-input rdo-input" name="group29" type="radio" id="radio86" value="B" <?php echo ($troquelado_proceso[0]->prod_gillo_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_04">
                            <label class="form-check-label" for="radio86">NO</label>
                            <input class="form-check-input rdo-input" name="group29" type="radio" id="radio87" value="C" <?php echo ($troquelado_proceso[0]->prod_gillo_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_04">
                            <label class="form-check-label" for="radio87">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">SC</span>
                                <button class="popup button-info" onclick="sc_producto_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="sc_producto_bar">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                        operadores de máquinas a tarimas de producto.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group30" type="radio" id="radio88" value="A" <?php echo ($troquelado_proceso[0]->prod_gillo_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_05">
                            <label class="form-check-label" for="radio88">Ok</label>
                            <input class="form-check-input rdo-input" name="group30" type="radio" id="radio89" value="B" <?php echo ($troquelado_proceso[0]->prod_gillo_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_05">
                            <label class="form-check-label" for="radio89">NO</label>
                            <input class="form-check-input rdo-input" name="group30" type="radio" id="radio90" value="C" <?php echo ($troquelado_proceso[0]->prod_gillo_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_05">
                            <label class="form-check-label" for="radio90">NA</label>
                        </div>
                        <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                            <div class="div-img-test col-12">
                                <span class="demo-text">OTR</span>
                                <button class="popup button-info" onclick="otr_producto_bar()">
                                    <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
                                    <span class="popuptext" id="otr_producto_bar">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los
                                        operadores de máquinas a tarimas de producto.</span>
                                </button>
                            </div>
                            <input class="form-check-input rdo-input" name="group31" type="radio" id="radio91" value="A" <?php echo ($troquelado_proceso[0]->prod_gillo_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_06">
                            <label class="form-check-label" for="radio91">Ok</label>
                            <input class="form-check-input rdo-input" name="group31" type="radio" id="radio92" value="B" <?php echo ($troquelado_proceso[0]->prod_gillo_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_06">
                            <label class="form-check-label" for="radio92">NO</label>
                            <input class="form-check-input rdo-input" name="group31" type="radio" id="radio93" value="C" <?php echo ($troquelado_proceso[0]->prod_gillo_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="prod_gillo_06">
                            <label class="form-check-label" for="radio93">NA</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--\. Guillotina. -->

<!-- Accordion Tirpo de Impresion -->
<div class="card">
    <!-- Card header -->
    <div class="card-header car-tittle" role="tab" id="headingFour">
        <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
            <h5 class="mb-0">Tipo de troquelador</h5>
        </a>
    </div>
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
        <div class="row card-body" id="div-tipo-impresion">
            <div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
                <div class="div-img-test col-12">
                    <span class="demo-text">Tipo troquelado</span>
                </div>
                <input class="form-check-input rdo-input" name="group31" type="radio" id="radio94" value="1" <?php echo ($troquelado_proceso[0]->tipo_troquelado == "1" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="tipo_troquelado">
                <label class="form-check-label" for="radio94">Proceso</label>
                <input class="form-check-input rdo-input" name="group31" type="radio" id="radio95" value="0" <?php echo ($troquelado_proceso[0]->tipo_troquelado == "0" ? 'checked' : '') ?> data-tabla-name="detalle_fcc012" data-id="<?= $troquelado_proceso[0]->id ?>" data-name="tipo_troquelado">
                <label class="form-check-label" for="radio95">Arreglo</label>
            </div>
        </div>
    </div>
</div>
<!--// Accordion Tirpo de Impresion -->



<script>
    /* -----------------------------------------------PROCESO TROQUELADO------------------------------------------------------- */
    function bt_proceso_tro() {
        var popup = document.getElementById("bt_proceso_tro");
        popup.classList.toggle("show");
    }

    function art_proceso_tro() {
        var popup = document.getElementById("art_proceso_tro");
        popup.classList.toggle("show");
    }

    function f_proceso_tro() {
        var popup = document.getElementById("f_proceso_tro");
        popup.classList.toggle("show");
    }

    function ap_proceso_tro() {
        var popup = document.getElementById("ap_proceso_tro");
        popup.classList.toggle("show");
    }

    function mec_proceso_tro() {
        var popup = document.getElementById("mec_proceso_tro");
        popup.classList.toggle("show");
    }

    function ht_proceso_tro() {
        var popup = document.getElementById("ht_proceso_tro");
        popup.classList.toggle("show");
    }

    function msc_proceso_trp() {
        var popup = document.getElementById("msc_proceso_trp");
        popup.classList.toggle("show");
    }

    function tp_proceso_tro() {
        var popup = document.getElementById("tp_proceso_tro");
        popup.classList.toggle("show");
    }

    function ip_proceso_tro() {
        var popup = document.getElementById("ip_proceso_tro");
        popup.classList.toggle("show");
    }
    /* -----------------------------------------------PRODUCTO TROQUELADO------------------------------------------------------- */
    function fr_producto_tro() {
        var popup = document.getElementById("fr_producto_tro");
        popup.classList.toggle("show");
    }

    function c_producto_tro() {
        var popup = document.getElementById("c_producto_tro");
        popup.classList.toggle("show");
    }

    function rv_producto_tro() {
        var popup = document.getElementById("rv_producto_tro");
        popup.classList.toggle("show");
    }

    function fs_producto_tro() {
        var popup = document.getElementById("fs_producto_tro");
        popup.classList.toggle("show");
    }

    function sd_producto_tro() {
        var popup = document.getElementById("sd_producto_tro");
        popup.classList.toggle("show");
    }

    function per_producto_tro() {
        var popup = document.getElementById("per_producto_tro");
        popup.classList.toggle("show");
    }

    function ral_producto_tro() {
        var popup = document.getElementById("ral_producto_tro");
        popup.classList.toggle("show");
    }

    function foil_producto_tro() {
        var popup = document.getElementById("foil_producto_tro");
        popup.classList.toggle("show");
    }

    function pc_producto_tro() {
        var popup = document.getElementById("pc_producto_tro");
        popup.classList.toggle("show");
    }

    function rva_producto_tro() {
        var popup = document.getElementById("rva_producto_tro");
        popup.classList.toggle("show");
    }
    /* -----------------------------------------------PROCESO GUILLOTINA------------------------------------------------------- */
    function bt_proceso_bar() {
        var popup = document.getElementById("bt_proceso_bar");
        popup.classList.toggle("show");
    }

    function esc_proceso_tro() {
        var popup = document.getElementById("esc_proceso_tro");
        popup.classList.toggle("show");
    }

    function mcor_proceso_bar() {
        var popup = document.getElementById("mcor_proceso_bar");
        popup.classList.toggle("show");
    }

    function cg_proceso_bar() {
        var popup = document.getElementById("cg_proceso_bar");
        popup.classList.toggle("show");
    }

    function ce_proceso_bar() {
        var popup = document.getElementById("ce_proceso_bar");
        popup.classList.toggle("show");
    }

    function ip_proceso_bar() {
        var popup = document.getElementById("ip_proceso_bar");
        popup.classList.toggle("show");
    }
    /* -----------------------------------------------PRODUCTO GUILLOTINA------------------------------------------------------- */
    function med_producto_bar() {
        var popup = document.getElementById("med_producto_bar");
        popup.classList.toggle("show");
    }

    function cal_producto_bar() {
        var popup = document.getElementById("cal_producto_bar");
        popup.classList.toggle("show");
    }

    function an_producto_bar() {
        var popup = document.getElementById("an_producto_bar");
        popup.classList.toggle("show");
    }

    function la_producto_bar() {
        var popup = document.getElementById("la_producto_bar");
        popup.classList.toggle("show");
    }

    function sc_producto_bar() {
        var popup = document.getElementById("sc_producto_bar");
        popup.classList.toggle("show");
    }

    function otr_producto_bar() {
        var popup = document.getElementById("otr_producto_bar");
        popup.classList.toggle("show");
    }
</script>