<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">VT</span>
        <button class="popup button-info" onclick="vt()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="vt">VT = VARIACION DE TONO: No conformidad con tono segun parametros
aprobados en maquina y/o diferencia entre impresion y muestra adjunta
de color /ya sea producto proporcionado por el cliente, producto de tiraje
anterior o plotter aprobado por el cliente.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group13" type="radio" id="radio38" value="A" <?php echo ($impresion_proceso[0]->prod_imp_01 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_01">
    <label class="form-check-label" for="radio38">Ok</label>
    <input class="form-check-input rdo-input" name="group13" type="radio" id="radio39" value="B" <?php echo ($impresion_proceso[0]->prod_imp_01 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_01">
    <label class="form-check-label" for="radio39">NO</label>
    <input class="form-check-input rdo-input" name="group13" type="radio" id="radio40" value="C" <?php echo ($impresion_proceso[0]->prod_imp_01 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_01">
    <label class="form-check-label" for="radio40">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">RB</span>
        <button class="popup button-info" onclick="rb()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="rb">RB = REGISTRO DE BARNIZ: Área con o sin recubrimiento de barniz, el cual
esta especificada en orden de produccion, muestra adjunta o arte
aprobado.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group14" type="radio" id="radio41" value="A" <?php echo ($impresion_proceso[0]->prod_imp_02 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_02">
    <label class="form-check-label" for="radio41">Ok</label>
    <input class="form-check-input rdo-input" name="group14" type="radio" id="radio42" value="B" <?php echo ($impresion_proceso[0]->prod_imp_02 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_02">
    <label class="form-check-label" for="radio42">NO</label>
    <input class="form-check-input rdo-input" name="group14" type="radio" id="radio43" value="C" <?php echo ($impresion_proceso[0]->prod_imp_02 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_02">
    <label class="form-check-label" for="radio43">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">DB</span>
        <button class="popup button-info" onclick="db()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="db">BD = BARNIZ DEFICIENTE: Mal acabado de barniz como rayones, manchas
y vetas causadas por alta viscosidad de barniz, materia prima, mantillas
dañadas o falta de limpieza de rodillos.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group15" type="radio" id="radio44" value="A" <?php echo ($impresion_proceso[0]->prod_imp_03 == "A" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_03">
    <label class="form-check-label" for="radio44">Ok</label>
    <input class="form-check-input rdo-input" name="group15" type="radio" id="radio45" value="B" <?php echo ($impresion_proceso[0]->prod_imp_03 == "B" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_03">
    <label class="form-check-label" for="radio45">NO</label>
    <input class="form-check-input rdo-input" name="group15" type="radio" id="radio46" value="C" <?php echo ($impresion_proceso[0]->prod_imp_03 == "C" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_03">
    <label class="form-check-label" for="radio46">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">GH</span>
        <button class="popup button-info" onclick="gh()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="gh">GH = GOLPE DE HULE: Faltante y/o deficiencia de llenado en 1 o mas
cuerpos de impreison sea tinta o barniz generado por daños en
complemento de mantilla o mantillas con golpe causado por pliegos rotos
o parones de maquina.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group16" type="radio" id="radio47" value="A" <?php echo ($impresion_proceso[0]->prod_imp_04 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_04">
    <label class="form-check-label" for="radio47">Ok</label>
    <input class="form-check-input rdo-input" name="group16" type="radio" id="radio48" value="B" <?php echo ($impresion_proceso[0]->prod_imp_04 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_04">
    <label class="form-check-label" for="radio48">NO</label>
    <input class="form-check-input rdo-input" name="group16" type="radio" id="radio49" value="C" <?php echo ($impresion_proceso[0]->prod_imp_04 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_04">
    <label class="form-check-label" for="radio49">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">BS</span>
        <button class="popup button-info" onclick="bs()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="bs">BS = BASURAS: Area circular o concaba (de tamaño pequeño de 1mm a
15mm aproximadamente) con faltante y/o deficiencia de llenado de tinta
causada por cristalizacion de tinta, desprendimiento de fibra (caolin) de
material, y/o *mota de rodillo (*Aplicable a sistema de impresion sin agua
Maquina MO ).</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio17" type="radio" id="radio50" value="A" <?php echo ($impresion_proceso[0]->prod_imp_05 == "A" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_05">
    <label class="form-check-label" for="radio50">Ok</label>
    <input class="form-check-input rdo-input" name="radio17" type="radio" id="radio51" value="B" <?php echo ($impresion_proceso[0]->prod_imp_05 == "B" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_05">
    <label class="form-check-label" for="radio51">NO</label>
    <input class="form-check-input rdo-input" name="radio17" type="radio" id="radio52" value="C" <?php echo ($impresion_proceso[0]->prod_imp_05 == "C" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_05">
    <label class="form-check-label" for="radio52">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">RE</span>
        <button class="popup button-info" onclick="re()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="re">RE = REPINTE: Desprendimiento de tinta causado debido a problemas de
secado de Maquina, Deficiencia de aplicación de talco o niveles altos de
porcentajes de agua.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio18" type="radio" id="radio53" value="A" <?php echo ($impresion_proceso[0]->prod_imp_06 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_06">
    <label class="form-check-label" for="radio53">Ok</label>
    <input class="form-check-input rdo-input" name="radio18" type="radio" id="radio54" value="B" <?php echo ($impresion_proceso[0]->prod_imp_06 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_06">
    <label class="form-check-label" for="radio54">NO</label>
    <input class="form-check-input rdo-input" name="radio18" type="radio" id="radio55" value="C" <?php echo ($impresion_proceso[0]->prod_imp_06 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_06">
    <label class="form-check-label" for="radio55">NA</label>
</div>

<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">MM/MR</span>
        <button class="popup button-info" onclick="mm_mr()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="mm_mr">MN/MR = MANCHA Y MARCAS: Concentradas en un area determinada y
en algunas ocasiones mobibles causadas por deficiencia de rodillos, mal
manejo o limpieza de planchas y falta de limpieza de contras de barniz.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group19" type="radio" id="radio56" value="A" <?php echo ($impresion_proceso[0]->prod_imp_07 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_07">
    <label class="form-check-label" for="radio56">Ok</label>
    <input class="form-check-input rdo-input" name="group19" type="radio" id="radio57" value="B" <?php echo ($impresion_proceso[0]->prod_imp_07 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_07">
    <label class="form-check-label" for="radio57">NO</label>
    <input class="form-check-input rdo-input" name="group19" type="radio" id="radio58" value="C" <?php echo ($impresion_proceso[0]->prod_imp_07 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_07">
    <label class="form-check-label" for="radio58">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">R</span>
        <button class="popup button-info" onclick="r()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="r">R = RAYON: Causado por roce en partes de maquina o rayon en plancha
de impresión.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio20" type="radio" id="radio59" value="A" <?php echo ($impresion_proceso[0]->prod_imp_08 == "A" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_08">
    <label class="form-check-label" for="radio59">Ok</label>
    <input class="form-check-input rdo-input" name="radio20" type="radio" id="radio60" value="B" <?php echo ($impresion_proceso[0]->prod_imp_08 == "B" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_08">
    <label class="form-check-label" for="radio60">NO</label>
    <input class="form-check-input rdo-input" name="radio20" type="radio" id="radio61" value="C" <?php echo ($impresion_proceso[0]->prod_imp_08 == "C" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_08">
    <label class="form-check-label" for="radio61">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">FR</span>
        <button class="popup button-info" onclick="fr()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="fr">FR = FALLADO DE REGISTRO:Mala colocacion de colores visualizado en las
guias de color durante la impresión registro de tiro y retiro asi como
registro de guias de pinza (laterales) y cola (jalón) de impresión.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio21" type="radio" id="radio62" value="A" <?php echo ($impresion_proceso[0]->prod_imp_09 == "A" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_09">
    <label class="form-check-label" for="radio62">Ok</label>
    <input class="form-check-input rdo-input" name="radio21" type="radio" id="radio63" value="B" <?php echo ($impresion_proceso[0]->prod_imp_09 == "B" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_09">
    <label class="form-check-label" for="radio63">NO</label>
    <input class="form-check-input rdo-input" name="radio21" type="radio" id="radio64" value="C" <?php echo ($impresion_proceso[0]->prod_imp_09 == "C" ? 'checked' : '') ?>  data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_09">
    <label class="form-check-label" for="radio64">NA</label>
</div>

<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">E/V</span>
        <button class="popup button-info" onclick="e_v()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="e_v">E/V = ENGRASE Y VELO: Mancha de gran tamaño de manera lineal en
diferentes areas del pliego causadas por falta de agua, Mala preparacion
de agua o mala regulacion de rodillos.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="group22" type="radio" id="radio65" value="A" <?php echo ($impresion_proceso[0]->prod_imp_10 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_10">
    <label class="form-check-label" for="radio65">Ok</label>
    <input class="form-check-input rdo-input" name="group22" type="radio" id="radio66" value="B" <?php echo ($impresion_proceso[0]->prod_imp_10 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_10">
    <label class="form-check-label" for="radio66">NO</label>
    <input class="form-check-input rdo-input" name="group22" type="radio" id="radio67" value="C" <?php echo ($impresion_proceso[0]->prod_imp_10 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_10">
    <label class="form-check-label" for="radio67">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">F.T/T.B</span>
        <button class="popup button-info" onclick="f_t_t_b()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="f_t_t_b">F.T./T.B. = FALTANTE DE TEXTO / TEXTO BORROSO: Faltante de texto
debido a problemas de arte y o problemas con presiones.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio23" type="radio" id="radio68" value="A" <?php echo ($impresion_proceso[0]->prod_imp_11 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_11">
    <label class="form-check-label" for="radio68">Ok</label>
    <input class="form-check-input rdo-input" name="radio23" type="radio" id="radio69" value="B" <?php echo ($impresion_proceso[0]->prod_imp_11 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_11">
    <label class="form-check-label" for="radio69">NO</label>
    <input class="form-check-input rdo-input" name="radio23" type="radio" id="radio70" value="C" <?php echo ($impresion_proceso[0]->prod_imp_11 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_11">
    <label class="form-check-label" for="radio70">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">DOB</span>
        <button class="popup button-info" onclick="dob()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="dob"> DOB = DOBLADO: Proceso realizado para la verificacion de la secuencia de
numeracion de paginas en un pliego (Proceso especifico para documentos
y revistas que pasaran al proceso de doblado).</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio24" type="radio" id="radio71" value="A" <?php echo ($impresion_proceso[0]->prod_imp_12 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_12">
    <label class="form-check-label" for="radio71">Ok</label>
    <input class="form-check-input rdo-input" name="radio24" type="radio" id="radio72" value="B" <?php echo ($impresion_proceso[0]->prod_imp_12 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_12">
    <label class="form-check-label" for="radio72">NO</label>
    <input class="form-check-input rdo-input" name="radio24" type="radio" id="radio73" value="C" <?php echo ($impresion_proceso[0]->prod_imp_12 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_12">
    <label class="form-check-label" for="radio73">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">PSC</span>
        <button class="popup button-info" onclick="psc()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="psc">PSC = PLANCHA SEGÚN COLOR: Colocacion de planchas según color
solicitado. Verificable en barra cromatica de producto o en parte inferior
de plancha.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio25" type="radio" id="radio74" value="A"  <?php echo ($impresion_proceso[0]->prod_imp_13 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_13">
    <label class="form-check-label" for="radio74">Ok</label>
    <input class="form-check-input rdo-input" name="radio25" type="radio" id="radio75" value="B"  <?php echo ($impresion_proceso[0]->prod_imp_13 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_13">
    <label class="form-check-label" for="radio75">NO</label>
    <input class="form-check-input rdo-input" name="radio25" type="radio" id="radio76" value="C"  <?php echo ($impresion_proceso[0]->prod_imp_13 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_13">
    <label class="form-check-label" for="radio76">NA</label>
</div>
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">OTR</span>
        <button class="popup button-info" onclick="otr()">
            <img src="/produccion2/resources/generales/img/icons/Info.png" class="img-info">
            <span class="popuptext" id="otr">OTR = OTROS: Otros defectos no mencionados.</span>
        </button>
    </div>
    <input class="form-check-input rdo-input" name="radio26" type="radio" id="radio77" value="A" <?php echo ($impresion_proceso[0]->prod_imp_14 == "A" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_14">
    <label class="form-check-label" for="radio77">Ok</label>
    <input class="form-check-input rdo-input" name="radio26" type="radio" id="radio78" value="B" <?php echo ($impresion_proceso[0]->prod_imp_14 == "B" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_14">
    <label class="form-check-label" for="radio78">NO</label>
    <input class="form-check-input rdo-input" name="radio26" type="radio" id="radio79" value="C" <?php echo ($impresion_proceso[0]->prod_imp_14 == "C" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?=$impresion_proceso[0]->id?>" data-name="prod_imp_14">
    <label class="form-check-label" for="radio79">NA</label>
</div>
<script>
    function vt() {
        var popup = document.getElementById("vt");
        popup.classList.toggle("show");
    }

    function rb() {
        var popup = document.getElementById("rb");
        popup.classList.toggle("show");
    }

    function db() {
        var popup = document.getElementById("db");
        popup.classList.toggle("show");
    }
    function gh() {
        var popup = document.getElementById("gh");
        popup.classList.toggle("show");
    }

    function bs() {
        var popup = document.getElementById("bs");
        popup.classList.toggle("show");
    }

    function re() {
        var popup = document.getElementById("re");
        popup.classList.toggle("show");
    }
    function mm_mr() {
        var popup = document.getElementById("mm_mr");
        popup.classList.toggle("show");
    }

    function r() {
        var popup = document.getElementById("r");
        popup.classList.toggle("show");
    }

    function fr() {
        var popup = document.getElementById("fr");
        popup.classList.toggle("show");
    }

    function e_v() {
        var popup = document.getElementById("e_v");
        popup.classList.toggle("show");
    }
    function f_t_t_b() {
        var popup = document.getElementById("f_t_t_b");
        popup.classList.toggle("show");
    }

    function dob() {
        var popup = document.getElementById("dob");
        popup.classList.toggle("show");
    }

    function psc() {
        var popup = document.getElementById("psc");
        popup.classList.toggle("show");
    }
    function otr() {
        var popup = document.getElementById("otr");
        popup.classList.toggle("show");
    }
</script>