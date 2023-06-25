
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">Tipo de pegado</span>
    </div>
    <input class="form-check-input rdo-input" name="group43" type="radio" id="radio125" value="1" <?php echo ($pegadora_proceso[0]->tipo_pegado == "1" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="tipo_pegado">
    <label class="form-check-label" for="radio125">Proceso</label>
    <input class="form-check-input rdo-input" name="group43" type="radio" id="radio126" value="0" <?php echo ($pegadora_proceso[0]->tipo_pegado == "0" ? 'checked' : '') ?> data-tabla-name="detalle_fcc013" data-id="<?= $pegadora_proceso[0]->id ?>" data-name="tipo_pegado">
    <label class="form-check-label" for="radio126">Arreglo</label>
</div>

