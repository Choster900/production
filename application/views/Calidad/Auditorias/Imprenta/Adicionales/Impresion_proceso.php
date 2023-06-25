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
            <span class="popuptext" id="btProceso">BT = BOLSA DE TRABAJO: Debe encontrarse aprobada por planificación,
                calidad y producción, Asi como tener la OTA y OT debe contener todos
                los elementos necesarios (Montaje, Dobles de pliegos, cantidad de
                pliegos a imprimir, etc,) y estar firmada.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group1" type="radio" id="radio1" value="A" <?php echo ($impresion_proceso[0]->proc_imp_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_01">
    <label class="form-check-label" for="radio1">Ok</label>
    <input class="form-check-input rdo-input" name="group1" type="radio" id="radio2" value="B" <?php echo ($impresion_proceso[0]->proc_imp_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_01">
    <label class="form-check-label" for="radio2">NO</label>
    <input class="form-check-input rdo-input" name="group1" type="radio" id="radio3" value="C" <?php echo ($impresion_proceso[0]->proc_imp_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_01">
    <label class="form-check-label" for="radio3">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">RI</span>
        <button class="popup button-info" onclick="rt()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="rt">RI = REFERENCIA DE IMPRESIÓN: Muestra adjunta que sirve para comparar color.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group2" type="radio" id="radio4" value="A" <?php echo ($impresion_proceso[0]->proc_imp_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_02">
    <label class="form-check-label" for="radio4">Ok</label>
    <input class="form-check-input rdo-input" name="group2" type="radio" id="radio5" value="B" <?php echo ($impresion_proceso[0]->proc_imp_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_02">
    <label class="form-check-label" for="radio5">NO</label>
    <input class="form-check-input rdo-input" name="group2" type="radio" id="radio6" value="C" <?php echo ($impresion_proceso[0]->proc_imp_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_02">
    <label class="form-check-label" for="radio6">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">HT</span>
        <button class="popup button-info" onclick="ht()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ht">HT = HUELLA DE TROQUEL: Hoja que permite visualizar la forma de
                troquel para identificar un mal montaje de diseño ya sea del troquel o de
                la impresión.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group3" type="radio" id="radio7" value="A" <?php echo ($impresion_proceso[0]->proc_imp_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_03">
    <label class="form-check-label" for="radio7">Ok</label>
    <input class="form-check-input rdo-input" name="group3" type="radio" id="radio8" value="B" <?php echo ($impresion_proceso[0]->proc_imp_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_03">
    <label class="form-check-label" for="radio8">NO</label>
    <input class="form-check-input rdo-input" name="group3" type="radio" id="radio9" value="C" <?php echo ($impresion_proceso[0]->proc_imp_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_03">
    <label class="form-check-label" for="radio9">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">FT</span>
        <button class="popup button-info" onclick="ft()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ft">FT = FICHA TECNICA: Hoja de información que permite comparar los
                distintos parámetros de impresión, la misma solo aplicable para producto
                de caja y viñetas que sea reimpresión exacta o producto con cambio de
                arte que solo implique cambio de texto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group4" type="radio" id="radio10" value="A" <?php echo ($impresion_proceso[0]->proc_imp_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_04">
    <label class="form-check-label" for="radio10">Ok</label>
    <input class="form-check-input rdo-input" name="group4" type="radio" id="radio11" value="B" <?php echo ($impresion_proceso[0]->proc_imp_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_04">
    <label class="form-check-label" for="radio11">NO</label>
    <input class="form-check-input rdo-input" name="group4" type="radio" id="radio12" value="C" <?php echo ($impresion_proceso[0]->proc_imp_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_04">
    <label class="form-check-label" for="radio12">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">ART/PLO</span>
        <button class="popup button-info" onclick="app_plo()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="app_plo">ART/PLO = ARTE O PLOTTER: Impresión colocada por diseño (Que según
                el caso) puede ser la referencia de color y es la referencia de texto e
                imagen.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group5" type="radio" id="radio13" value="A" <?php echo ($impresion_proceso[0]->proc_imp_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_05">
    <label class="form-check-label" for="radio13">Ok</label>
    <input class="form-check-input rdo-input" name="group5" type="radio" id="radio14" value="B" <?php echo ($impresion_proceso[0]->proc_imp_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_05">
    <label class="form-check-label" for="radio14">NO</label>
    <input class="form-check-input rdo-input" name="group5" type="radio" id="radio15" value="C" <?php echo ($impresion_proceso[0]->proc_imp_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_05">
    <label class="form-check-label" for="radio15">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">MEC/DUM</span>
        <button class="popup button-info" onclick="mec_dum()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="mec_dum">MEC = MECANICO: Muestra Adjunta con o sin impresión de el armado del
                producto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group6" type="radio" id="radio16" value="A" <?php echo ($impresion_proceso[0]->proc_imp_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_06">
    <label class="form-check-label" for="radio16">Ok</label>
    <input class="form-check-input rdo-input" name="group6" type="radio" id="radio17" value="B" <?php echo ($impresion_proceso[0]->proc_imp_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_06">
    <label class="form-check-label" for="radio17">NO</label>
    <input class="form-check-input rdo-input" name="group6" type="radio" id="radio18" value="C" <?php echo ($impresion_proceso[0]->proc_imp_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_06">
    <label class="form-check-label" for="radio18">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">CAL</span>
        <button class="popup button-info" onclick="cal()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="cal">CAL = CALIBRE: Grosor de material según especificaciones de orden de
                producción, arte aprobado y mecánico adjunto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group7" type="radio" id="radio19" value="A" <?php echo ($impresion_proceso[0]->proc_imp_07 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_07">
    <label class="form-check-label" for="radio19">Ok</label>
    <input class="form-check-input rdo-input" name="group7" type="radio" id="radio20" value="B" <?php echo ($impresion_proceso[0]->proc_imp_07 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_07">
    <label class="form-check-label" for="radio20">NO</label>
    <input class="form-check-input rdo-input" name="group7" type="radio" id="radio21" value="C" <?php echo ($impresion_proceso[0]->proc_imp_07 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_07">
    <label class="form-check-label" for="radio21">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">LEC</span>
        <button class="popup button-info" onclick="lec()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="lec">LEC = LECTURA DE ARTE: Comparación de texto e imágenes aprobado por
                el cliente o ejecutivo contra texto e imágenes impresas.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group8" type="radio" id="radio22" value="A" <?php echo ($impresion_proceso[0]->proc_imp_08 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_08">
    <label class="form-check-label" for="radio22">Ok</label>
    <input class="form-check-input rdo-input" name="group8" type="radio" id="radio23" value="B" <?php echo ($impresion_proceso[0]->proc_imp_08 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_08">
    <label class="form-check-label" for="radio23">NO</label>
    <input class="form-check-input rdo-input" name="group8" type="radio" id="radio24" value="C" <?php echo ($impresion_proceso[0]->proc_imp_08 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_08">
    <label class="form-check-label" for="radio24">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">OKA</span>
        <button class="popup button-info" onclick="oka()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="oka">OKA = OK DE ARRANQUE: Aprobación de producción en maquina
                realizada por: supervisor de turno, jefe de planta o jefa de calidad.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group9" type="radio" id="radio25" value="A" <?php echo ($impresion_proceso[0]->proc_imp_09 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_09">
    <label class="form-check-label" for="radio25">Ok</label>
    <input class="form-check-input rdo-input" name="group9" type="radio" id="radio26" value="B" <?php echo ($impresion_proceso[0]->proc_imp_09 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_09">
    <label class="form-check-label" for="radio26">NO</label>
    <input class="form-check-input rdo-input" name="group9" type="radio" id="radio27" value="C" <?php echo ($impresion_proceso[0]->proc_imp_09 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_09">
    <label class="form-check-label" for="radio27">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">VCB</span>
        <button class="popup button-info" onclick="vcb()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="vcb"> VCB = VERIFICACION DE CODIGO DE BARRA: Se verifica que código de
                barra concuerde con arte aprobado además que los dígitos aprobados
                sean los mismos.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group10" type="radio" id="radio28" value="A" <?php echo ($impresion_proceso[0]->proc_imp_10 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_10">
    <label class="form-check-label" for="radio28">Ok</label>
    <input class="form-check-input rdo-input" name="group10" type="radio" id="radio29" value="B" <?php echo ($impresion_proceso[0]->proc_imp_10 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_10">
    <label class="form-check-label" for="radio29">NO</label>
    <input class="form-check-input rdo-input" name="group10" type="radio" id="radio30" value="C" <?php echo ($impresion_proceso[0]->proc_imp_10 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_10">
    <label class="form-check-label" for="radio30">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">VUES</span><!-- ESTE ES NUEVO ENTONCES SE AGREGAO CON EL NUMERO DE GRUPO CORRELATIVO Y EL ID CORRELATIVO -->
        <button class="popup button-info" onclick="vues()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="vues">VUES = VERIFICACION DE USO DE ESPECTRO: Uso de equipo por parte de
                operadores de máquinas por medio de archivo en Excel.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group37" type="radio" id="radio110" value="A" <?php echo ($impresion_proceso[0]->proc_imp_13 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_13">
    <label class="form-check-label" for="radio110">Ok</label>
    <input class="form-check-input rdo-input" name="group37" type="radio" id="radio111" value="B" <?php echo ($impresion_proceso[0]->proc_imp_13 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_13">
    <label class="form-check-label" for="radio111">NO</label>
    <input class="form-check-input rdo-input" name="group37" type="radio" id="radio112" value="C" <?php echo ($impresion_proceso[0]->proc_imp_13 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_13">
    <label class="form-check-label" for="radio112">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">IP</span>
        <button class="popup button-info" onclick="ip()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ip"> IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de
                los operadores de máquinas a tarimas de producto terminado. </span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group11" type="radio" id="radio31" value="A" <?php echo ($impresion_proceso[0]->proc_imp_11 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_11">
    <label class="form-check-label" for="radio31">Ok</label>
    <input class="form-check-input rdo-input" name="group11" type="radio" id="radio32" value="B" <?php echo ($impresion_proceso[0]->proc_imp_11 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_11">
    <label class="form-check-label" for="radio32">NO</label>
    <input class="form-check-input rdo-input" name="group11" type="radio" id="radio33" value="C" <?php echo ($impresion_proceso[0]->proc_imp_11 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_11">
    <label class="form-check-label" for="radio33">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">TMP</span>
        <button class="popup button-info" onclick="tmp()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="tmp"> T.M.P = TAMAÑO DE MATERIA PRIMA: El tamaño debe ser según la
                corbata de material o la colocacion de tamaño de material en montaje o
                solicitud de montaje. </span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group12" type="radio" id="radio35" value="A" <?php echo ($impresion_proceso[0]->proc_imp_12 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_12">
    <label class="form-check-label" for="radio35">Ok</label>
    <input class="form-check-input rdo-input" name="group12" type="radio" id="radio36" value="B" <?php echo ($impresion_proceso[0]->proc_imp_12 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_12">
    <label class="form-check-label" for="radio36">NO</label>
    <input class="form-check-input rdo-input" name="group12" type="radio" id="radio37" value="C" <?php echo ($impresion_proceso[0]->proc_imp_12 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_imp_12">
    <label class="form-check-label" for="radio37">NA</label>
</div>
<script>
    // Cuando el usuario cliclea el <div>, el popup se abre
    function btProceso() {
        var popup = document.getElementById("btProceso");
        popup.classList.toggle("show");
    }

    function rt() {
        var popup = document.getElementById("rt");
        popup.classList.toggle("show");
    }

    function ht() {
        var popup = document.getElementById("ht");
        popup.classList.toggle("show");
    }

    function ft() {
        var popup = document.getElementById("ft");
        popup.classList.toggle("show");
    }

    function app_plo() {
        var popup = document.getElementById("app_plo");
        popup.classList.toggle("show");
    }

    function mec_dum() {
        var popup = document.getElementById("mec_dum");
        popup.classList.toggle("show");
    }

    function cal() {
        var popup = document.getElementById("cal");
        popup.classList.toggle("show");
    }

    function lec() {
        var popup = document.getElementById("lec");
        popup.classList.toggle("show");
    }

    function oka() {
        var popup = document.getElementById("oka");
        popup.classList.toggle("show");
    }

    function vcb() {
        var popup = document.getElementById("vcb");
        popup.classList.toggle("show");
    }

    function ip() {
        var popup = document.getElementById("ip");
        popup.classList.toggle("show");
    }

    function tmp() {
        var popup = document.getElementById("tmp");
        popup.classList.toggle("show");
    }
    function vues() {
        var popup = document.getElementById("vues");
        popup.classList.toggle("show");
    }
</script>