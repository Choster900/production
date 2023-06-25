<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">SLC</span>
        <button class="popup button-info" onclick="slc_convertidora()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="slc_convertidora">SLC = SOLICITUD DE CORTE: Expecificaciones de corte y tipo de material a utilizar.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group31" type="radio" id="107" value="A" <?php echo ($pegadora_proceso[0]->proc_conver_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_01">
    <label class="form-check-label" for="107">Ok</label>
    <input class="form-check-input rdo-input" name="group31" type="radio" id="108" value="B" <?php echo ($pegadora_proceso[0]->proc_conver_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_01">
    <label class="form-check-label" for="108">NO</label>
    <input class="form-check-input rdo-input" name="group31" type="radio" id="109" value="C" <?php echo ($pegadora_proceso[0]->proc_conver_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_01">
    <label class="form-check-label" for="109">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">BG</span>
        <button class="popup button-info" onclick="bg_convertidora()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="bg_convertidora">BG = BOBINA GOLPEADA: Undimiento o marcas en bobina causada por manejo de las misma o problemas de proveedor.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group32" type="radio" id="radio92" value="A" <?php echo ($pegadora_proceso[0]->proc_conver_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_02">
    <label class="form-check-label" for="radio92">Ok</label>
    <input class="form-check-input rdo-input" name="group32" type="radio" id="radio93" value="B" <?php echo ($pegadora_proceso[0]->proc_conver_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_02">
    <label class="form-check-label" for="radio93">NO</label>
    <input class="form-check-input rdo-input" name="group32" type="radio" id="radio94" value="C" <?php echo ($pegadora_proceso[0]->proc_conver_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_02">
    <label class="form-check-label" for="radio94">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">MO</span>
        <button class="popup button-info" onclick="mo_convertidora()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="mo_convertidora">MO = MAL OLOR: Mal olor de materia prima causada por humedad.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group33" type="radio" id="radio95" value="A" <?php echo ($pegadora_proceso[0]->proc_conver_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_03">
    <label class="form-check-label" for="radio95">Ok</label>
    <input class="form-check-input rdo-input" name="group33" type="radio" id="radio96" value="B" <?php echo ($pegadora_proceso[0]->proc_conver_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_03">
    <label class="form-check-label" for="radio96">NO</label>
    <input class="form-check-input rdo-input" name="group33" type="radio" id="radio97" value="C" <?php echo ($pegadora_proceso[0]->proc_conver_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_03">
    <label class="form-check-label" for="radio97">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">DE</span>
        <button class="popup button-info" onclick="de_convertidora()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="de_convertidora">DE = DELAMINADA: Material deslaminado debido a problemas con materia prima o Humedad.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group34" type="radio" id="radio98" value="A" <?php echo ($pegadora_proceso[0]->proc_conver_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_04">
    <label class="form-check-label" for="radio98">Ok</label>
    <input class="form-check-input rdo-input" name="group34" type="radio" id="radio99" value="B" <?php echo ($pegadora_proceso[0]->proc_conver_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_04">
    <label class="form-check-label" for="radio99">NO</label>
    <input class="form-check-input rdo-input" name="group34" type="radio" id="radio100" value="C" <?php echo ($pegadora_proceso[0]->proc_conver_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_04">
    <label class="form-check-label" for="radio100">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">TP</span>
        <button class="popup button-info" onclick="tp_convertidora()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="tp_convertidora">GDC = GUIA DE COLOR: Muestra o cartilla de color que es utilizada
                para la comparacion de tonalidades de producto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group35" type="radio" id="radio101" value="A" <?php echo ($pegadora_proceso[0]->proc_conver_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_05">
    <label class="form-check-label" for="radio101">Ok</label>
    <input class="form-check-input rdo-input" name="group35" type="radio" id="radio102" value="B" <?php echo ($pegadora_proceso[0]->proc_conver_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_05">
    <label class="form-check-label" for="radio102">NO</label>
    <input class="form-check-input rdo-input" name="group35" type="radio" id="radio103" value="C" <?php echo ($pegadora_proceso[0]->proc_conver_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_05">
    <label class="form-check-label" for="radio103">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">IP</span>
        <button class="popup button-info" onclick="ip_convertidora()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="r_producto">IP = IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de los operadores de máquinas a tarimas de producto..</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group36" type="radio" id="radio104" value="A" <?php echo ($pegadora_proceso[0]->proc_conver_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_06">
    <label class="form-check-label" for="radio104">Ok</label>
    <input class="form-check-input rdo-input" name="group36" type="radio" id="radio105" value="B" <?php echo ($pegadora_proceso[0]->proc_conver_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_06">
    <label class="form-check-label" for="radio105">NO</label>
    <input class="form-check-input rdo-input" name="group36" type="radio" id="radio106" value="C" <?php echo ($pegadora_proceso[0]->proc_conver_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="proc_conver_06">
    <label class="form-check-label" for="radio106">NA</label>
</div>

<script>
    // Cuando el usuario cliclea el <div>, el popup se abre
    function slc_convertidora() {
        var popup = document.getElementById("slc_convertidora");
        popup.classList.toggle("show");
    }

    function bg_convertidora() {
        var popup = document.getElementById("bg_convertidora");
        popup.classList.toggle("show");
    }

    function mo_convertidora() {
        var popup = document.getElementById("mo_convertidora");
        popup.classList.toggle("show");
    }

    function de_convertidora() {
        var popup = document.getElementById("de_convertidora");
        popup.classList.toggle("show");
    }

    function tp_convertidora() {
        var popup = document.getElementById("tp_convertidora");
        popup.classList.toggle("show");
    }

    function ip_convertidora() {
        var popup = document.getElementById("ip_convertidora");
        popup.classList.toggle("show");
    }
</script>