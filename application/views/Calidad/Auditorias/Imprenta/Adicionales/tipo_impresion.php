
<div class="seccion-checkbox col-lg-4 col-md-12 mb-4">
    <div class="div-img-test col-12">
        <span class="demo-text">Tipo de impresion</span>
    </div>
    <input class="form-check-input rdo-input" name="radio38" type="radio" id="radio120" value="1" <?php echo ($impresion_proceso[0]->tipo_impresion == "1" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="tipo_impresion">
    <label class="form-check-label" for="radio120">Tiro</label>
    <input class="form-check-input rdo-input" name="radio38" type="radio" id="radio121" value="0" <?php echo ($impresion_proceso[0]->tipo_impresion == "0" ? 'checked' : '') ?> data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="tipo_impresion">
    <label class="form-check-label" for="radio121">Retiro</label>
</div>

