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


<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">BT</span>
        <button class="popup button-info" onclick="btProceso()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="btProceso">BT = BOLSA DE TRABAJO: Debe encontrarse aprobada por
                planificación, calidad y producción, Asi como tener la OTA y OT debe
                contener todos los elementos necesarios (Montaje, Dobles de
                pliegos, cantidad de pliegos a imprimir, etc,) y estar firmada.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group1" type="radio" id="radio1" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_01">
    <label class="form-check-label" for="radio1">Ok</label>
    <input class="form-check-input rdo-input" name="group1" type="radio" id="radio2" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_01">
    <label class="form-check-label" for="radio2">NO</label>
    <input class="form-check-input rdo-input" name="group1" type="radio" id="radio3" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_01">
    <label class="form-check-label" for="radio3">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">MEC</span>
        <button class="popup button-info" onclick="mec_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="mec_proceo">MEC = MECANICO: Muestra Adjunta con o sin impresión de el
                armado del producto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group2" type="radio" id="radio4" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_02">
    <label class="form-check-label" for="radio4">Ok</label>
    <input class="form-check-input rdo-input" name="group2" type="radio" id="radio5" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_02">
    <label class="form-check-label" for="radio5">NO</label>
    <input class="form-check-input rdo-input" name="group2" type="radio" id="radio6" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_02">
    <label class="form-check-label" for="radio6">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">LEC</span>
        <button class="popup button-info" onclick="lec_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="lec_proceo">LEC = LECTURA DE ARTE: Comparación de texto e imágenes
                aprobado por el cliente o ejecutivo contra texto e imágenes
                impresas.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group3" type="radio" id="radio7" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_03">
    <label class="form-check-label" for="radio7">Ok</label>
    <input class="form-check-input rdo-input" name="group3" type="radio" id="radio8" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_03">
    <label class="form-check-label" for="radio8">NO</label>
    <input class="form-check-input rdo-input" name="group3" type="radio" id="radio9" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_03">
    <label class="form-check-label" for="radio9">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">FT</span>
        <button class="popup button-info" onclick="ft_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ft_proceo">FT = FICHA TECNICA: Hoja de información que permite comparar los
                distintos parámetros de impresión, la misma solo aplicable para
                producto de caja y viñetas que sea reimpresión exacta o producto
                con cambio de arte que solo implique cambio de texto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group4" type="radio" id="radio10" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_04">
    <label class="form-check-label" for="radio10">Ok</label>
    <input class="form-check-input rdo-input" name="group4" type="radio" id="radio11" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_04">
    <label class="form-check-label" for="radio11">NO</label>
    <input class="form-check-input rdo-input" name="group4" type="radio" id="radio12" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_04">
    <label class="form-check-label" for="radio12">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">GDC</span>
        <button class="popup button-info" onclick="gdc_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="gdc_proceo">GDC = GUIA DE COLOR: Muestra o cartilla de color que es utilizada
                para la comparacion de tonalidades de producto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group5" type="radio" id="radio13" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_05">
    <label class="form-check-label" for="radio13">Ok</label>
    <input class="form-check-input rdo-input" name="group5" type="radio" id="radio14" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_05">
    <label class="form-check-label" for="radio14">NO</label>
    <input class="form-check-input rdo-input" name="group5" type="radio" id="radio15" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_05">
    <label class="form-check-label" for="radio15">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">CAL</span>
        <button class="popup button-info" onclick="cal_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="cal_proceo">CAL = CALIBRE: Grosor de material según especificaciones de orden
                de producción, arte aprobado y/o mecánico adjunto..</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group6" type="radio" id="radio16" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_06">
    <label class="form-check-label" for="radio16">Ok</label>
    <input class="form-check-input rdo-input" name="group6" type="radio" id="radio17" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_06">
    <label class="form-check-label" for="radio17">NO</label>
    <input class="form-check-input rdo-input" name="group6" type="radio" id="radio18" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_06">
    <label class="form-check-label" for="radio18">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">CONT</span>
        <button class="popup button-info" onclick="cont_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="cont_proceo">CONT = CONTAMINACION: Contaminacion distintos tipos de
                productos o de lotes distintos de producto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group7" type="radio" id="radio19" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_07 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_07">
    <label class="form-check-label" for="radio19">Ok</label>
    <input class="form-check-input rdo-input" name="group7" type="radio" id="radio20" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_07 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_07">
    <label class="form-check-label" for="radio20">NO</label>
    <input class="form-check-input rdo-input" name="group7" type="radio" id="radio21" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_07 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_07">
    <label class="form-check-label" for="radio21">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">A.F</span>
        <button class="popup button-info" onclick="af_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="af_proceo">A.F = ARANQUE DE FIBRA: Para comprobar aderencia de pegamento
                en la caja, se debe realizar en el momento de inicio de produccion..</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group8" type="radio" id="radio22" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_08 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_08">
    <label class="form-check-label" for="radio22">Ok</label>
    <input class="form-check-input rdo-input" name="group8" type="radio" id="radio23" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_08 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_08">
    <label class="form-check-label" for="radio23">NO</label>
    <input class="form-check-input rdo-input" name="group8" type="radio" id="radio24" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_08 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_08">
    <label class="form-check-label" for="radio24">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">ADC</span>
        <button class="popup button-info" onclick="adc_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="adc_proceo">ADC = ADHESIVO CORRECTO: Uso de pegamento según las
                utilizaciones o el tipo de material.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group9" type="radio" id="radio25" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_09 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_09">
    <label class="form-check-label" for="radio25">Ok</label>
    <input class="form-check-input rdo-input" name="group9" type="radio" id="radio26" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_09 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_09">
    <label class="form-check-label" for="radio26">NO</label>
    <input class="form-check-input rdo-input" name="group9" type="radio" id="radio27" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_09 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_09">
    <label class="form-check-label" for="radio27">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">VCB</span>
        <button class="popup button-info" onclick="vcb_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="vcb_proceo"> VCB = VERIFICACION DE CODIGO DE BARRA: Se verifica que código de
                barra concuerde con arte aprobado además que los dígitos aprobados
                sean los mismos.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group10" type="radio" id="radio28" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_10 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_10">
    <label class="form-check-label" for="radio28">Ok</label>
    <input class="form-check-input rdo-input" name="group10" type="radio" id="radio29" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_10 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_10">
    <label class="form-check-label" for="radio29">NO</label>
    <input class="form-check-input rdo-input" name="group10" type="radio" id="radio30" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_10 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_10">
    <label class="form-check-label" for="radio30">NA</label>
</div>

<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">UC</span>
        <button class="popup button-info" onclick="uc_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="uc_proceo">UC = UNIDADES POR CORRUGADO: Unidades faltantes en corrugado
                debido error de empaque de personal.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group11" type="radio" id="radio31" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_11 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_11">
    <label class="form-check-label" for="radio31">Ok</label>
    <input class="form-check-input rdo-input" name="group11" type="radio" id="radio32" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_11 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_11">
    <label class="form-check-label" for="radio32">NO</label>
    <input class="form-check-input rdo-input" name="group11" type="radio" id="radio33" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_11 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_11">
    <label class="form-check-label" for="radio33">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">CI</span>
        <button class="popup button-info" onclick="ci_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ci_proceo"> CI = CORRUGADO IDENTIFICADO: Corrugado identificado con una
                parte del producto ademas de la viñeta con cantidad de producto
                por corrugado.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group12" type="radio" id="radio34" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_12 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_12">
    <label class="form-check-label" for="radio34">Ok</label>
    <input class="form-check-input rdo-input" name="group12" type="radio" id="radio35" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_12 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_12">
    <label class="form-check-label" for="radio35">NO</label>
    <input class="form-check-input rdo-input" name="group12" type="radio" id="radio36" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_12 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_12">
    <label class="form-check-label" for="radio36">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">CS</span>
        <button class="popup button-info" onclick="cs_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="cs_proceo">CS = CORRUGADO SELLADO: Corrugado completamente sellado y no
                despegado.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group13" type="radio" id="radio37" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_13 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_13">
    <label class="form-check-label" for="radio37">Ok</label>
    <input class="form-check-input rdo-input" name="group13" type="radio" id="radio38" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_13 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_13">
    <label class="form-check-label" for="radio38">NO</label>
    <input class="form-check-input rdo-input" name="group13" type="radio" id="radio39" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_13 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_13">
    <label class="form-check-label" for="radio39">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">TP</span>
        <button class="popup button-info" onclick="tp_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="tp_proceo"> TP = TARIMA PLASTIFICADA: Para producto que se a realizado la
                impresión y se requiere de un tiempo de secado o se suspende</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group14" type="radio" id="radio40" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_14 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_14">
    <label class="form-check-label" for="radio40">Ok</label>
    <input class="form-check-input rdo-input" name="group14" type="radio" id="radio41" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_14 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_14">
    <label class="form-check-label" for="radio41">NO</label>
    <input class="form-check-input rdo-input" name="group14" type="radio" id="radio42" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_14 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_14">
    <label class="form-check-label" for="radio42">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">IP</span>
        <button class="popup button-info" onclick="ip_proceo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ip_proceo">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por
                parte de los operadores de máquinas a tarimas de producto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group15" type="radio" id="radio43" value="A" <?php echo ($pegadora_proceso[0]->proc_pega_15 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_15">
    <label class="form-check-label" for="radio43">Ok</label>
    <input class="form-check-input rdo-input" name="group15" type="radio" id="radio44" value="B" <?php echo ($pegadora_proceso[0]->proc_pega_15 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_15">
    <label class="form-check-label" for="radio44">NO</label>
    <input class="form-check-input rdo-input" name="group15" type="radio" id="radio45" value="C" <?php echo ($pegadora_proceso[0]->proc_pega_15 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_pega_15">
    <label class="form-check-label" for="radio45">NA</label>
</div>
<script>
    // Cuando el usuario cliclea el <div>, el popup se abre
    function btProceso() {
        var popup = document.getElementById("btProceso");
        popup.classList.toggle("show");
    }

    function mec_proceo() {
        var popup = document.getElementById("mec_proceo");
        popup.classList.toggle("show");
    }

    function lec_proceo() {
        var popup = document.getElementById("lec_proceo");
        popup.classList.toggle("show");
    }

    function ft_proceo() {
        var popup = document.getElementById("ft_proceo");
        popup.classList.toggle("show");
    }

    function gdc_proceo() {
        var popup = document.getElementById("gdc_proceo");
        popup.classList.toggle("show");
    }

    function cal_proceo() {
        var popup = document.getElementById("cal_proceo");
        popup.classList.toggle("show");
    }

    function cont_proceo() {
        var popup = document.getElementById("cont_proceo");
        popup.classList.toggle("show");
    }

    function af_proceo() {
        var popup = document.getElementById("af_proceo");
        popup.classList.toggle("show");
    }

    function adc_proceo() {
        var popup = document.getElementById("adc_proceo");
        popup.classList.toggle("show");
    }

    function vcb_proceo() {
        var popup = document.getElementById("vcb_proceo");
        popup.classList.toggle("show");
    }

    function uc_proceo() {
        var popup = document.getElementById("uc_proceo");
        popup.classList.toggle("show");
    }

    function ci_proceo() {
        var popup = document.getElementById("ci_proceo");
        popup.classList.toggle("show");
    }

    function cs_proceo() {
        var popup = document.getElementById("cs_proceo");
        popup.classList.toggle("show");
    }

    function tp_proceo() {
        var popup = document.getElementById("tp_proceo");
        popup.classList.toggle("show");
    }
    function ip_proceo() {
        var popup = document.getElementById("ip_proceo");
        popup.classList.toggle("show");
    }
</script>