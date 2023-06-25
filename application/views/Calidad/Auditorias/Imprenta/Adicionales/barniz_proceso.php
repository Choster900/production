<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">BT</span>
        <button class="popup button-info" onclick="bt2()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="bt2">BT = BOLSA DE TRABAJO: Debe encontrarse aprobada por planificación,
                calidad y producción, Asi como tener la OTA y OT debe contener todos
                los elementos necesarios (Montaje, Dobles de pliegos, cantidad de
                pliegos a imprimir, etc,) y estar firmada.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio27" type="radio" id="radio80" value="A" <?php echo ($impresion_proceso[0]->proc_bar_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_01">
    <label class="form-check-label" for="radio80">Ok</label>
    <input class="form-check-input rdo-input" name="radio27" type="radio" id="radio81" value="B" <?php echo ($impresion_proceso[0]->proc_bar_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_01">
    <label class="form-check-label" for="radio81">NO</label>
    <input class="form-check-input rdo-input" name="radio27" type="radio" id="radio82" value="C" <?php echo ($impresion_proceso[0]->proc_bar_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_01">
    <label class="form-check-label" for="radio82">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">CB</span>
        <button class="popup button-info" onclick="cb()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="cb">CB = CURADO DE BARNIZ: Verificacion de quemado de lamparas UV.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio28" type="radio" id="radio83" value="A" <?php echo ($impresion_proceso[0]->proc_bar_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_02">
    <label class="form-check-label" for="radio83">Ok</label>
    <input class="form-check-input rdo-input" name="radio28" type="radio" id="radio84" value="B" <?php echo ($impresion_proceso[0]->proc_bar_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_02">
    <label class="form-check-label" for="radio84">NO</label>
    <input class="form-check-input rdo-input" name="radio28" type="radio" id="radio85" value="C" <?php echo ($impresion_proceso[0]->proc_bar_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_02">
    <label class="form-check-label" for="radio85">NA</label>
</div>

<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">PCB</span>
        <button class="popup button-info" onclick="pcb1()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="pcb1">¡PCB = PRUEBA DE CURADO DE BARNIZ: Se realiza mediante solvente y un
isopo</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group29" type="radio" id="radio86" value="A" <?php echo ($impresion_proceso[0]->proc_bar_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_03">
    <label class="form-check-label" for="radio86">Ok</label>
    <input class="form-check-input rdo-input" name="group29" type="radio" id="radio87" value="B" <?php echo ($impresion_proceso[0]->proc_bar_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_03">
    <label class="form-check-label" for="radio87">NO</label>
    <input class="form-check-input rdo-input" name="group29" type="radio" id="radio88" value="C" <?php echo ($impresion_proceso[0]->proc_bar_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_03">
    <label class="form-check-label" for="radio88">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">IP</span>
        <button class="popup button-info" onclick="ip1()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ip1">IP= IDENTIFICACION DE PRODUCTO: Colocación de viñetas por parte de
los operadores de máquinas a tarimas de producto terminado.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group30" type="radio" id="radio89" value="A" <?php echo ($impresion_proceso[0]->proc_bar_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_04">
    <label class="form-check-label" for="radio89">Ok</label>
    <input class="form-check-input rdo-input" name="group30" type="radio" id="radio90" value="B" <?php echo ($impresion_proceso[0]->proc_bar_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_04">
    <label class="form-check-label" for="radio90">NO</label>
    <input class="form-check-input rdo-input" name="group30" type="radio" id="radio91" value="C" <?php echo ($impresion_proceso[0]->proc_bar_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_04">
    <label class="form-check-label" for="radio91">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">TP</span>
        <button class="popup button-info" onclick="tp1()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="tp1">TP= TARIMA PLASTIFICADAS: Tarima plastificada según tiempo de
proceso siguiente. Si es material bond y no se utilizara debe plastificarse.</span>
        </button>   
    </div>
    <input class="form-check-input rdo-input" name="radio31" type="radio" id="radio92" value="A" <?php echo ($impresion_proceso[0]->proc_bar_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_05">
    <label class="form-check-label" for="radio92">Ok</label>
    <input class="form-check-input rdo-input" name="radio31" type="radio" id="radio93" value="B" <?php echo ($impresion_proceso[0]->proc_bar_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_05">
    <label class="form-check-label" for="radio93">NO</label>
    <input class="form-check-input rdo-input" name="radio31" type="radio" id="radio94" value="C" <?php echo ($impresion_proceso[0]->proc_bar_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_bar_05">
    <label class="form-check-label" for="radio94">NA</label>
</div>


<script>
    function bt2() {
        var popup = document.getElementById("bt2");
        popup.classList.toggle("show");
    }

    function cb() {
        var popup = document.getElementById("cb");
        popup.classList.toggle("show");
    }

    function pcb1() {
        var popup = document.getElementById("pcb1");
        popup.classList.toggle("show");
    }

    function ip1() {
        var popup = document.getElementById("ip1");
        popup.classList.toggle("show");
    }
    
    function tp1() {
        var popup = document.getElementById("tp1");
        popup.classList.toggle("show");
    }


</script>