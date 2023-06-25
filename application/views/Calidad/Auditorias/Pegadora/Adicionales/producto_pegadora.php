<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">C</span>
        <button class="popup button-info" onclick="c_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="c_producto">C = CUADRATURA: Verificar el armado de la pieza que no se reviente el
fondo automatico o pegue lineal no este forzado y la misma caja cierre.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group16" type="radio" id="radio46" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_01">
    <label class="form-check-label" for="radio46">Ok</label>
    <input class="form-check-input rdo-input" name="group16" type="radio" id="radio47" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_01">
    <label class="form-check-label" for="radio47">NO</label>
    <input class="form-check-input rdo-input" name="group16" type="radio" id="radio48" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_01">
    <label class="form-check-label" for="radio48">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">DESP</span>
        <button class="popup button-info" onclick="desp_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="desp_producto">DESP = DESPEGADO: Producto sin pega o con pega cristalizada.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group17" type="radio" id="radio49" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_02">
    <label class="form-check-label" for="radio49">Ok</label>
    <input class="form-check-input rdo-input" name="group17" type="radio" id="radio50" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_02">
    <label class="form-check-label" for="radio50">NO</label>
    <input class="form-check-input rdo-input" name="group17" type="radio" id="radio51" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_02">
    <label class="form-check-label" for="radio51">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">MD / MP</span>
        <button class="popup button-info" onclick="mdmp_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="mdmp_producto">MD/MP = MAL DOBLADO/MAL PEGADO: Producto con arrugas en
laterales o en fondo automatico/Producto Mal pegado torcido o
desnivelado</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group18" type="radio" id="radio52" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_03 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_03">
    <label class="form-check-label" for="radio52">Ok</label>
    <input class="form-check-input rdo-input" name="group18" type="radio" id="radio53" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_03 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_03">
    <label class="form-check-label" for="radio53">NO</label>
    <input class="form-check-input rdo-input" name="group18" type="radio" id="radio54" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_03 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_03">
    <label class="form-check-label" for="radio54">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">PEST</span>
        <button class="popup button-info" onclick="pest_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="pest_producto">PEST = PESTAÑUDA: Al armar caja area de pege de linea recta esta salida
de la escuadra de la misma.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group19" type="radio" id="radio55" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_04">
    <label class="form-check-label" for="radio55">Ok</label>
    <input class="form-check-input rdo-input" name="group19" type="radio" id="radio56" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_04">
    <label class="form-check-label" for="radio56">NO</label>
    <input class="form-check-input rdo-input" name="group19" type="radio" id="radio57" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_04">
    <label class="form-check-label" for="radio57">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">EX</span>
        <button class="popup button-info" onclick="ex_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ex_producto">GDC = GUIA DE COLOR: Muestra o cartilla de color que es utilizada
                para la comparacion de tonalidades de producto.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group20" type="radio" id="radio58" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_05 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_05">
    <label class="form-check-label" for="radio58">Ok</label>
    <input class="form-check-input rdo-input" name="group20" type="radio" id="radio59" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_05 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_05">
    <label class="form-check-label" for="radio59">NO</label>
    <input class="form-check-input rdo-input" name="group20" type="radio" id="radio60" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_05 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_05">
    <label class="form-check-label" for="radio60">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">R</span>
        <button class="popup button-info" onclick="r_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="r_producto">R = RAYON: Causado por roce en partes de maquina que realizan roces en
producto o rayon de e impresión.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group21" type="radio" id="radio61" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_06">
    <label class="form-check-label" for="radio61">Ok</label>
    <input class="form-check-input rdo-input" name="group21" type="radio" id="radio62" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_06">
    <label class="form-check-label" for="radio62">NO</label>
    <input class="form-check-input rdo-input" name="group21" type="radio" id="radio63" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_06">
    <label class="form-check-label" for="radio63">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">RT</span>
        <button class="popup button-info" onclick="rt_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="rt_producto">RT = ROTO: Debido a proceso de pegado en maquina o proceso de des-
troquelado (desbasurado).</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group22" type="radio" id="radio64" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_07 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_07">
    <label class="form-check-label" for="radio64">Ok</label>
    <input class="form-check-input rdo-input" name="group22" type="radio" id="radio65" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_07 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_07">
    <label class="form-check-label" for="radio65">NO</label>
    <input class="form-check-input rdo-input" name="group22" type="radio" id="radio66" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_07 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_07">
    <label class="form-check-label" for="radio66">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">MC</span>
        <button class="popup button-info" onclick="mc_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="mc_producto">MC = MAL CONTADO: Unidades Faltante en conteo de maquina.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group23" type="radio" id="radio67" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_08 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_08">
    <label class="form-check-label" for="radio67">Ok</label>
    <input class="form-check-input rdo-input" name="group23" type="radio" id="radio68" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_08 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_08">
    <label class="form-check-label" for="radio68">NO</label>
    <input class="form-check-input rdo-input" name="group23" type="radio" id="radio69" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_08 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_08">
    <label class="form-check-label" for="radio69">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">VT</span>
        <button class="popup button-info" onclick="vt_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="vt_producto">VT = VARIACION DE TONO: No conformidad con tono segun parametros
aprobados en OK de arranque en maquna, muestra adjunta en la orden o
cartila de color.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group24" type="radio" id="radio70" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_09 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_09">
    <label class="form-check-label" for="radio70">Ok</label>
    <input class="form-check-input rdo-input" name="group24" type="radio" id="radio71" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_09 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_09">
    <label class="form-check-label" for="radio71">NO</label>
    <input class="form-check-input rdo-input" name="group24" type="radio" id="radio72" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_09 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_09">
    <label class="form-check-label" for="radio72">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">RE</span>
        <button class="popup button-info" onclick="re_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="re_producto">RE = REPINTE: Desprendimiento de tinta debido a mal secado de
impresión.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group25" type="radio" id="radio73" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_10 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_10">
    <label class="form-check-label" for="radio73">Ok</label>
    <input class="form-check-input rdo-input" name="group25" type="radio" id="radio74" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_10 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_10">
    <label class="form-check-label" for="radio74">NO</label>
    <input class="form-check-input rdo-input" name="group25" type="radio" id="radio75" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_10 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_10">
    <label class="form-check-label" for="radio75">NA</label>
</div>

<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">E/V</span>
        <button class="popup button-info" onclick="ev_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="ev_producto">E/V = ENGRASE Y VELO: Mancha de gran tamaño en distinta areas de
producto causada debido a problemas de impresión..</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group26" type="radio" id="radio76" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_11 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_11">
    <label class="form-check-label" for="radio76">Ok</label>
    <input class="form-check-input rdo-input" name="group26" type="radio" id="radio77" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_11 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_11">
    <label class="form-check-label" for="radio77">NO</label>
    <input class="form-check-input rdo-input" name="group26" type="radio" id="radio78" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_11 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_11">
    <label class="form-check-label" for="radio78">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">BS</span>
        <button class="popup button-info" onclick="bs_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="bs_producto"> BS = BASURAS: Area circular o concaba (de tamaño pequeño de 1mm a
15mm aproximadamente) con faltante y/o deficiencia de llenado de tinta
causada por impresión.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group27" type="radio" id="radio79" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_12 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_12">
    <label class="form-check-label" for="radio79">Ok</label>
    <input class="form-check-input rdo-input" name="group27" type="radio" id="radio80" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_12 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_12">
    <label class="form-check-label" for="radio80">NO</label>
    <input class="form-check-input rdo-input" name="group27" type="radio" id="radio81" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_12 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_12">
    <label class="form-check-label" for="radio81">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">FR</span>
        <button class="popup button-info" onclick="fr_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="fr_producto">FR = FALLADO DE REGISTRO: Mala impresión o mal troquelado.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group28" type="radio" id="radio82" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_13 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_13">
    <label class="form-check-label" for="radio82">Ok</label>
    <input class="form-check-input rdo-input" name="group28" type="radio" id="radio83" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_13 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_13">
    <label class="form-check-label" for="radio83">NO</label>
    <input class="form-check-input rdo-input" name="group28" type="radio" id="radio84" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_13 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_13">
    <label class="form-check-label" for="radio84">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">RV</span>
        <button class="popup button-info" onclick="rv_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="rv_producto">RV = REVENTADO: Area con deficencia en sisado lo que causa que al
doblarse presente reventado en alguna area de dobles.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group29" type="radio" id="radio85" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_14 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_14">
    <label class="form-check-label" for="radio85">Ok</label>
    <input class="form-check-input rdo-input" name="group29" type="radio" id="radio86" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_14 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_14">
    <label class="form-check-label" for="radio86">NO</label>
    <input class="form-check-input rdo-input" name="group29" type="radio" id="radio87" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_14 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_14">
    <label class="form-check-label" for="radio87">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">SC</span>
        <button class="popup button-info" onclick="sc_producto()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="sc_producto">SC = SUCIO: Suciedad o grasa de maquina.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group30" type="radio" id="radio88" value="A" <?php echo ($pegadora_proceso[0]->prod_pega_15 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_15">
    <label class="form-check-label" for="radio88">Ok</label>
    <input class="form-check-input rdo-input" name="group30" type="radio" id="radio89" value="B" <?php echo ($pegadora_proceso[0]->prod_pega_15 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_15">
    <label class="form-check-label" for="radio89">NO</label>
    <input class="form-check-input rdo-input" name="group30" type="radio" id="radio90" value="C" <?php echo ($pegadora_proceso[0]->prod_pega_15 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="prod_pega_15">
    <label class="form-check-label" for="radio90">NA</label>
</div>
<script>
    // Cuando el usuario cliclea el <div>, el popup se abre
    function c_producto() {
        var popup = document.getElementById("c_producto");
        popup.classList.toggle("show");
    }

    function desp_producto() {
        var popup = document.getElementById("desp_producto");
        popup.classList.toggle("show");
    }

    function mdmp_producto() {
        var popup = document.getElementById("mdmp_producto");
        popup.classList.toggle("show");
    }

    function pest_producto() {
        var popup = document.getElementById("pest_producto");
        popup.classList.toggle("show");
    }

    function ex_producto() {
        var popup = document.getElementById("ex_producto");
        popup.classList.toggle("show");
    }

    function r_producto() {
        var popup = document.getElementById("r_producto");
        popup.classList.toggle("show");
    }

    function rt_producto() {
        var popup = document.getElementById("rt_producto");
        popup.classList.toggle("show");
    }

    function mc_producto() {
        var popup = document.getElementById("mc_producto");
        popup.classList.toggle("show");
    }

    function vt_producto() {
        var popup = document.getElementById("vt_producto");
        popup.classList.toggle("show");
    }

    function re_producto() {
        var popup = document.getElementById("re_producto");
        popup.classList.toggle("show");
    }

    function ev_producto() {
        var popup = document.getElementById("ev_producto");
        popup.classList.toggle("show");
    }

    function bs_producto() {
        var popup = document.getElementById("bs_producto");
        popup.classList.toggle("show");
    }

    function fr_producto() {
        var popup = document.getElementById("fr_producto");
        popup.classList.toggle("show");
    }

    function rv_producto() {
        var popup = document.getElementById("rv_producto");
        popup.classList.toggle("show");
    }
    function sc_producto() {
        var popup = document.getElementById("sc_producto");
        popup.classList.toggle("show");
    }
</script>