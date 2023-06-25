<style>
    table thead th {
        font-weight: bold;
    }
</style>
<button type="button" id="agregar_1" role="<?= $contenido_producto_terminado[0]->id_producto ?>" <?php echo ($contenido_producto_terminado[0]->estado == "Transferido" ? 'disabled' : ($contenido_producto_terminado[0]->estado == "Aprobado" ? 'disabled' : '')) ?> style="float: right;margin-right:-67px;margin-top:10px; font-size: 25px; color: white; padding: 0 10px;" class="btn btn-git agregar-tintas botones">+</button>

<table id="crear-procucto">
    <thead>
        <th id="cantidad">Cantidad</th>
        <th id="trello">ID Trello</th>
        <th id="maquina">Maquina</th>
        <th id="codigo_producto">Cod. producto</th>
        <th id="descripcion-trello" style="width:275px">Descripcion Trello</th>
        <th id="producto">Producto</th>
    </thead>
    <tbody id="contenido">
        <?php foreach ($contenido_producto_terminado as $key => $values) { ?>
            <?php if ($this->session->userdata("id_rol") == 1) { ?>
                <tr id="contenido">
                    <td id="cantidad" name="cantidad" contenteditable="false" style="background-color: transparent;">
                        <input type="text" class="w-100 producto_terminado_contenido_cantidad pintado" style="background-color:transparent;border:none;height:38px;text-align:center" value="<?= $values->cantidad ?>" id="cantidad" name="<?= $values->id ?>" placeholder="Sin comas">
                    </td>
                    <td id="trello" name="<?= $values->cantidad ?>" class="pintado producto_terminado_contenido" contenteditable="true" style="background-color: transparent;"><?= $values->id_trello ?></td>
                    <td id="maquina" contenteditable="false" style="background-color: transparent;">
                        <select class="js-select-basic-single-pt-modal select_maquina" id="" name="<?= $values->id ?>" style="font-size: 8pt;width: 100%">
                            <!-- MAQUINA -->
                            <option value="">Maquinas</option>
                            <?php foreach ($maquinas as $key => $value) { ?>
                                <option value="<?= $value->codigo_maquina ?>" <?php echo ($value->codigo_maquina == $values->maquina) ? 'selected' : ' '; ?>> <?= $value->codigo_maquina ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td id="codigo_producto" name="codigo_producto" contenteditable="false" style="background-color: transparent;">
                        <input type="text" class="w-100 producto_terminado_contenido_codigo " style="background-color:transparent;border:none;height:38px;text-align:center" value="<?= $values->codigo_producto ?>" id="codigo_producto" name="<?= $values->id ?>" placeholder="">
                    </td>
                    <td id="descripcion_trello" name="descripcion_trello" class="" contenteditable="false" style="background-color: transparent;">
                        <?= $values->descripcion_trello ?>
                    </td>
                    <td id="producto" name="producto" class="value_per_visit" contenteditable="false" style="background-color: transparent;">
                        <textarea id="producto" name="<?= $values->id ?>" class="pintado textarea_contenido" style="background-color: transparent;text-align:center;height:140px; padding: 10px"><?= $values->producto ?></textarea>
                    </td>
                </tr>
            <?php } else { ?>
                <tr id="contenido">
                    <td id="cantidad" name="cantidad" contenteditable="false" style="background-color: transparent;">
                        <input type="text" <?php echo ($values->estado == "Transferido" ? 'disabled' : ($values->estado == "Aprobado" ? 'disabled' : '')) ?> class="w-100 producto_terminado_contenido_cantidad pintado" style="background-color:transparent;border:none;height:38px;text-align:center" value="<?= $values->cantidad ?>" id="cantidad" name="<?= $values->id ?>" placeholder="Sin comas">
                    </td>
                    <td id="trello" name="<?= $values->cantidad ?>" <?php echo ($values->estado == "Transferido" ? 'disabled' : ($values->estado == "Aprobado" ? 'disabled' : '')) ?> class="pintado producto_terminado_contenido" contenteditable="true" style="background-color: transparent;"><?= $values->id_trello ?></td>
                    <td id="maquina" class="pintado" contenteditable="false" style="background-color: transparent;">
                        <select class="js-select-basic-single-pt-modal select_maquina" id="" <?php echo ($values->estado == "Transferido" ? 'disabled' : ($values->estado == "Aprobado" ? 'disabled' : '')) ?> name="<?= $values->id ?>" style="font-size: 8pt;width: 100%">
                            <!-- MAQUINA -->
                            <option value="">Maquinas</option>
                            <?php foreach ($maquinas as $key => $value) { ?>
                                <option value="<?= $value->codigo_maquina ?>" <?php echo ($value->codigo_maquina == $values->maquina) ? 'selected' : ' '; ?>> <?= $value->codigo_maquina ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td id="codigo_producto" name="codigo_producto" contenteditable="false" style="background-color: transparent;">
                        <input type="text" <?php echo ($values->estado == "Transferido" ? 'disabled' : ($values->estado == "Aprobado" ? 'disabled' : '')) ?> class="w-100 producto_terminado_contenido_codigo" style="background-color:transparent;border:none;height:38px;text-align:center" value="<?= $values->codigo_producto ?>" id="codigo_producto" name="<?= $values->id ?>" placeholder="">
                    </td>
                    <td id="descripcion_trello" name="descripcion_trello" class="" contenteditable="false" style="background-color: transparent;">
                        <?= $values->descripcion_trello ?>
                    </td>
                    <td id="producto" name="producto" class="value_per_visit" contenteditable="false" style="background-color: transparent;">
                        <textarea id="producto" name="<?= $values->id ?>" <?php echo ($values->estado == "Transferido" ? 'disabled' : ($values->estado == "Aprobado" ? 'disabled' : '')) ?> class="pintado textarea_contenido" style="background-color: transparent;text-align:center;height:140px; padding: 10px"><?= $values->producto ?></textarea>
                    </td>
                </tr>
            <?php  } ?>

        <?php } ?>
    </tbody>
    <tbody>
        <tr>
            <td contenteditable="false" style="padding: 7px 0 ;">Área que Entrega</td>
            <td colspan="5" contenteditable="false" style="padding: 7px 0 ;">Detalle</td>
        </tr>
        <tr>
            <td name="" id="">
                <?php if ($this->session->userdata("id_rol") == 1) { ?>
                    <select class="js-select-basic-single-pt-modal areas" id="area_entrega" name="<?= $contenido_producto_terminado[0]->id_producto ?>" style="font-size: 8pt;">
                        <!-- AREA QUE ENTREGA -->
                        <option value="">Entrega</option>
                        <?php foreach ($areas as $key => $value) { ?>
                            <option value="<?= $value->nombre ?>" <?php echo ($producto_terminado[0]->area_entrega == $value->nombre) ? 'selected' : ' '; ?>> <?= $value->nombre ?></option>
                        <?php } ?>
                    </select>
                <?php } else { ?>
                    <select class="js-select-basic-single-pt-modal areas" id="area_entrega" name="<?= $contenido_producto_terminado[0]->id_producto ?>" <?php echo ($contenido_producto_terminado[0]->estado == "Transferido" ? 'disabled' : ($contenido_producto_terminado[0]->estado == "Aprobado" ? 'disabled' : '')) ?> style="font-size: 8pt;">
                        <!-- AREA QUE ENTREGA -->
                        <option value="">Entrega</option>
                        <?php foreach ($areas as $key => $value) { ?>
                            <option value="<?= $value->nombre ?>" <?php echo ($producto_terminado[0]->area_entrega == $value->nombre) ? 'selected' : ' '; ?>> <?= $value->nombre ?></option>
                        <?php } ?>xml_error_string
                    </select>
                <?php } ?>


            </td>
            <td colspan="2" contenteditable="false">Bultos</td>
            <td contenteditable="false" colspan="3">Peso</td>
        </tr>
    </tbody>
    <tbody id="detalle">
        <tr>
            <td contenteditable="false" id="first_detalle" rowspan="<?= count($detalle_producto_terminado) + 1 ?>">Área que Recibe</td>
        </tr>
        <?php foreach ($detalle_producto_terminado as $key => $value) { ?>

            <?php if ($this->session->userdata("id_rol") == 1) { ?>
                <tr>
                    <td style="display: none; background-color: transparent;" id="id" class="pintado" contenteditable="false"><?= $value->id ?></td>
                    <td colspan="2" class="pintado" contenteditable="false" style="background-color: transparent;">
                        <textarea name="<?= $value->id ?>" id="detalle_bultos" cols="30" rows="3" class="pintado textarea_detalle" style="background-color: transparent;"><?= $value->detalle_bultos ?></textarea>
                    </td>
                    <td colspan="3" class="pintado" contenteditable="false" style="background-color: transparent;">
                        <textarea name="<?= $value->id ?>" id="detalle_peso" cols="30" rows="3" class="pintado textarea_detalle" style="background-color: transparent;"><?= $value->detalle_peso ?></textarea>
                    </td>
                </tr>
            <?php } else { ?>
                <tr>
                    <td style="display: none; background-color: transparent;" id="id" class="pintado" contenteditable="false"><?= $value->id ?></td>
                    <td colspan="2" class="pintado" contenteditable="false" style="background-color: transparent;">
                        <textarea name="<?= $value->id ?>" <?php echo ($contenido_producto_terminado[0]->estado == "Transferido" ? 'disabled' : ($contenido_producto_terminado[0]->estado == "Aprobado" ? 'disabled' : '')) ?> id="detalle_bultos" cols="30" rows="3" class="pintado textarea_detalle" style="background-color: transparent;"><?= $value->detalle_bultos ?></textarea>
                    </td>
                    <td colspan="3" class="pintado" contenteditable="false" style="background-color: transparent;">
                        <textarea name="<?= $value->id ?>" <?php echo ($contenido_producto_terminado[0]->estado == "Transferido" ? 'disabled' : ($contenido_producto_terminado[0]->estado == "Aprobado" ? 'disabled' : '')) ?> id="detalle_peso" cols="30" rows="3" class="pintado textarea_detalle" style="background-color: transparent;"><?= $value->detalle_peso ?></textarea>
                    </td>
                </tr>
            <?php } ?>

        <?php } ?>
    </tbody>

    <tbody>
        <tr>
            <td>
                <?php if ($this->session->userdata("id_rol") == 1) { ?>
                    <select class="js-select-basic-single-pt-modal areas" id="area_recibe" name="<?= $contenido_producto_terminado[0]->id_producto ?>">
                        <option value="">Recibe</option>
                        <?php
                        $area_e = array(2 => "Logística", 3  => "Bodega");
                        foreach ($area_e as $key => $value) { ?>
                            <option value="<?= $value ?>" <?php echo ($producto_terminado[0]->area_recibe == $value) ? 'selected' : ' '; ?>><?= $value ?></option>
                        <?php } ?>
                    </select>
                <?php } else { ?>
                    <select class="js-select-basic-single-pt-modal areas" id="area_recibe" <?php echo ($contenido_producto_terminado[0]->estado == "Transferido" ? 'disabled' : ($contenido_producto_terminado[0]->estado == "Aprobado" ? 'disabled' : '')) ?> name="<?= $contenido_producto_terminado[0]->id_producto ?>">
                        <option value="">Recibe</option>
                        <?php
                        $area_e = array(2 => "Logística", 3  => "Bodega");
                        foreach ($area_e as $key => $value) { ?>
                            <option value="<?= $value ?>" <?php echo ($producto_terminado[0]->area_recibe == $value) ? 'selected' : ' '; ?>><?= $value ?></option>
                        <?php } ?>
                    </select>
                <?php } ?>
            </td>
            <td colspan="2" contenteditable="false"></td>
            <td contenteditable="false" colspan="3"></td>

        </tr>
        <tr id="esconder">
            <td contenteditable="false"></td>
            <td colspan="3" contenteditable="false"></td>
        </tr>
        <tr>
            <?php if ($this->session->userdata("id_rol") == 1) { ?>
                <td style="padding: 10px;" contenteditable="false">Número de entrega:</td>
                <td name="numero_entrega" colspan="5" class="value_per_visit" contenteditable="false" style="padding: 10px;background-color: transparent;">
                    <textarea style="padding: 0 0;font-size: 10pt; width: 500px; background-color: transparent; text-align: center;" name="<?= $contenido_producto_terminado[0]->id_producto ?>" id="numero_entrega" cols="30" rows="3" class="pintado text_area_inputs" style="background-color: transparent;"><?= $contenido_producto_terminado[0]->numero_entrega ?></textarea>
                </td>
            <?php } else { ?>
                <td style="padding: 10px;" contenteditable="false">Número de entrega:</td>
                <td name="numero_entrega" colspan="5" class="value_per_visit" contenteditable="false" style="padding: 10px;background-color: transparent;">
                    <textarea <?php echo ($contenido_producto_terminado[0]->estado == "Transferido" ? 'disabled' : ($contenido_producto_terminado[0]->estado == "Aprobado" ? 'disabled' : '')) ?> style="padding: 0 0;font-size: 10pt; width: 500px; background-color: transparent; text-align: center;" name="<?= $contenido_producto_terminado[0]->id_producto ?>" id="numero_entrega" cols="30" rows="3" class="pintado text_area_inputs" style="background-color: transparent;"><?= $contenido_producto_terminado[0]->numero_entrega ?></textarea>
                </td>

            <?php } ?>
        </tr>
    </tbody>
</table>

<button type="button" id="agregar_2" <?php echo ($contenido_producto_terminado[0]->estado == "Transferido" ? 'disabled' : ($contenido_producto_terminado[0]->estado == "Aprobado" ? 'disabled' : '')) ?> role="<?= $contenido_producto_terminado[0]->id_producto ?>" style="float: right;margin-right:-67px;margin-top:-198px; font-size: 25px; color: white; padding: 0 10px;" class="btn btn-git agregar-tintas botones">+</button>

<script>
    $('.js-select-basic-single-pt-modal').select2({
        width: 'resolve',
        dropdownAutoWidth: true,
        theme: "bootstrap4",
        dropdownCssClass: "myFont",
    });
</script>