<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">MPC</span>
        <button class="popup button-info" onclick="mpc_convertidora_pro()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="mpc_convertidora_pro">MPC = MATERIA PRIMA CORRECTA: Tipo de material procesado según
                solicitud de corte..</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group37" type="radio" id="radio107" value="A" <?php echo ($pegadora_proceso[0]->prod_conver_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_01">
    <label class="form-check-label" for="radio107">Ok</label>
    <input class="form-check-input rdo-input" name="group37" type="radio" id="radio108" value="B" <?php echo ($pegadora_proceso[0]->prod_conver_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_01">
    <label class="form-check-label" for="radio108">NO</label>
    <input class="form-check-input rdo-input" name="group37" type="radio" id="radio109" value="C" <?php echo ($pegadora_proceso[0]->prod_conver_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_01">
    <label class="form-check-label" for="radio109">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">CAL</span>
        <button class="popup button-info" onclick="cal_convertidora_pro()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="cal_convertidora_pro">CAL =CALIBRE: Grosor de material según especificaciones de orden
                de producción, arte aprobado y/o mecánico adjunto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group38" type="radio" id="radio110" value="A" <?php echo ($pegadora_proceso[0]->prod_conver_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_02">
    <label class="form-check-label" for="radio110">Ok</label>
    <input class="form-check-input rdo-input" name="group38" type="radio" id="radio111" value="B" <?php echo ($pegadora_proceso[0]->prod_conver_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_02">
    <label class="form-check-label" for="radio111">NO</label>
    <input class="form-check-input rdo-input" name="group38" type="radio" id="radio112" value="C" <?php echo ($pegadora_proceso[0]->prod_conver_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_02">
    <label class="form-check-label" for="radio112">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">AN</span>
        <button class="popup button-info" onclick="an_convertidora_pro()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="an_convertidora_pro">AN= ANCHO: Ancho de material según solicitud de corte..</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group39" type="radio" id="radio113" value="A" <?php echo ($pegadora_proceso[0]->prod_conver_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_03">
    <label class="form-check-label" for="radio113">Ok</label>
    <input class="form-check-input rdo-input" name="group39" type="radio" id="radio114" value="B" <?php echo ($pegadora_proceso[0]->prod_conver_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_03">
    <label class="form-check-label" for="radio114">NO</label>
    <input class="form-check-input rdo-input" name="group39" type="radio" id="radio115" value="C" <?php echo ($pegadora_proceso[0]->prod_conver_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_03">
    <label class="form-check-label" for="radio115">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">LA</span>
        <button class="popup button-info" onclick="la_convertidora_pro()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="la_convertidora_pro">LA = LARGO: Largo de material según solicitud de corte.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group40" type="radio" id="radio116" value="A" <?php echo ($pegadora_proceso[0]->prod_conver_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_04">
    <label class="form-check-label" for="radio116">Ok</label>
    <input class="form-check-input rdo-input" name="group40" type="radio" id="radio117" value="B" <?php echo ($pegadora_proceso[0]->prod_conver_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_04">
    <label class="form-check-label" for="radio117">NO</label>
    <input class="form-check-input rdo-input" name="group40" type="radio" id="radio118" value="C" <?php echo ($pegadora_proceso[0]->prod_conver_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_04">
    <label class="form-check-label" for="radio118">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">R</span>
        <button class="popup button-info" onclick="r_convertidora_pro()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="r_convertidora_pro">R= RAYON: Causado por roce en partes de maquina que realizan roces en
                producto o rayon de e impresión.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group41" type="radio" id="radio119" value="A" <?php echo ($pegadora_proceso[0]->prod_conver_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_05">
    <label class="form-check-label" for="radio119">Ok</label>
    <input class="form-check-input rdo-input" name="group41" type="radio" id="radio120" value="B" <?php echo ($pegadora_proceso[0]->prod_conver_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_05">
    <label class="form-check-label" for="radio120">NO</label>
    <input class="form-check-input rdo-input" name="group41" type="radio" id="radio121" value="C" <?php echo ($pegadora_proceso[0]->prod_conver_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_05">
    <label class="form-check-label" for="radio121">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">OTR</span>
        <button class="popup button-info" onclick="otr_convertidora_pro()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="otr_convertidora_pro">OTR = OTROS: Otros defectos no mencionados.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group42" type="radio" id="radio122" value="A" <?php echo ($pegadora_proceso[0]->prod_conver_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_06">
    <label class="form-check-label" for="radio122">Ok</label>
    <input class="form-check-input rdo-input" name="group42" type="radio" id="radio123" value="B" <?php echo ($pegadora_proceso[0]->prod_conver_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_06">
    <label class="form-check-label" for="radio123">NO</label>
    <input class="form-check-input rdo-input" name="group42" type="radio" id="radio124" value="C" <?php echo ($pegadora_proceso[0]->prod_conver_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_conver_06">
    <label class="form-check-label" for="radio124">NA</label>
</div>

<script>
    // Cuando el usuario cliclea el <div>, el popup se abre
    function mpc_convertidora_pro() {
        var popup = document.getElementById("mpc_convertidora_pro");
        popup.classList.toggle("show");
    }

    function cal_convertidora_pro() {
        var popup = document.getElementById("cal_convertidora_pro");
        popup.classList.toggle("show");
    }

    function an_convertidora_pro() {
        var popup = document.getElementById("an_convertidora_pro");
        popup.classList.toggle("show");
    }

    function la_convertidora_pro() {
        var popup = document.getElementById("la_convertidora_pro");
        popup.classList.toggle("show");
    }

    function r_convertidora_pro() {
        var popup = document.getElementById("r_convertidora_pro");
        popup.classList.toggle("show");
    }

    function otr_convertidora_pro() {
        var popup = document.getElementById("otr_convertidora_pro");
        popup.classList.toggle("show");
    }
</script>