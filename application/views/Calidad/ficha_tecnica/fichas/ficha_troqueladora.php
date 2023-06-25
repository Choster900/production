<style>
    .ficha-troquelado {
        box-sizing: border-box;
        width: 1200px;
        /*border: solid #5B6DCD 10px;*/
        padding: 5px;
    }
</style>
<div class="ficha-troquelado mx-auto container" id="reporteria">

    <div class="row m-0 p-0" id="inicio">
        <div class="col-2">
            <img src="<?php echo base_url("resources/generales/img/logoficha1.jpg"); ?>" class="img-fluid">
        </div>
        <div class="col-7 text-center">
            <div class="row">
                <div class="col-12 ">
                    <h4>RECOLECCION DE INFORMACIÓN</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>ESPECIFICA DEL PRODUCTO TROQUELADO</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    FECHA DE CREACIÓN: HOY
                </div>
                <div class="col-12">
                    VERSION: <span id="<?php echo $data[0]->version  ?>" class="version_del_doc" style="margin-right: 80px;"><?php echo $data[0]->version  ?></span> 
                    FICHA # <span id="<?php echo $data[0]->ID  ?>" class="codigo_del_doc"><?php echo $data[0]->ID  ?></span>
                    <span id="<?php echo $data[0]->estado  ?>" class="estado_ficha"></span>
                </div>
                <div class="col-12">
                    DEPARTAMENTO: CALIDAD
                </div>
                <div class="col-12">
                    CODIGO: F-CC-020-3
                </div>
            </div>
        </div>

    </div>

    <input type="hidden" value="<?php echo $data[0]->ID  ?>" name="ID" id="codigo_ficha">
    <input type="hidden" value="troqueladora" name="tipo_ficha" id="tipo_ficha">

    <div class="row m-0 p-0 especificaciones">
        <div class="col-12">
            ESPECIFICACIONES
        </div>

        <div class="row m-0 p-0 mx-auto">
            <div class="col-6">
                CLIENTE: <input type="text" class="w-75 input_ficha_troqueladoras" id="cliente" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->cliente  ?>">
            </div>
            <div class="col-6">
                PRODUCTO: <input type="text" class="w-75 input_ficha_troqueladoras" id="producto" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->producto  ?>">
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-4">
                TIPO DE PRODUCTO: <input type="text" class="w-50 input_ficha_troqueladoras" id="tipo_producto" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->tipo_producto  ?>">
            </div>
            <div class="col-4">
                FECHA: <input type="date" class="w-75 input_ficha_troqueladoras" id="fecha_creacion" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->fecha_creacion   ?>">
            </div>
            <div class="col-4">
                COD. PRODUCTO: <input type="text" class="w-50 input_ficha_troqueladoras" id="cod_producto" name="<?php echo $data[0]->ID ?>"  value="<?php echo $data[0]->cod_producto   ?>">
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-4">
                OT: <input type="text" class="w-75 input_ficha_troqueladoras" id="ot" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->ot ?>">
            </div>
            <div class="col-4">
                MAQUINA: <input type="text" class="w-75 input_ficha_troqueladoras" id="maquina" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->maquina  ?>">
            </div>
            <div class="col-4">
                OPERARIO: <input type="text" class="w-75 input_ficha_troqueladoras" id="operario" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->operario  ?>">
            </div>
        </div>
    </div>



    <table class="table w-100 mt-3">
        <tr class="text-center bg-black text-light ">
            <td colspan="2" class="border border-light" style="color: white;">ITEM</td>
            <td colspan="2" class="border border-light" style="color: white;">GENERALIDADES</td>
            <td colspan="2" class="border border-light"></td>
        </tr>
        <tbody>
            <tr>
                <td colspan="2" class="pintado">TIPO DE MATERIAL: <input type="text" class="w-50 input_ficha_troqueladoras" id="tipo_material" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->tipo_material  ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="generalidad_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->generalidad_1 ?>"></td>
                <td colspan="2">Sin tolerancia</td>
            </tr>
            <tr>
                <td class="pintado text-center">CALIBRE</td>
                <td class="pintado text-center">PROVEEDOR</td>
                <td><input type="text" class="w-100 input_ficha_troqueladoras" id="generalidad_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->generalidad_2  ?>"></td>
                <td><input type="text" class="w-100 input_ficha_troqueladoras" id="generalidad_3" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->generalidad_3  ?>"></td>
                <td colspan="2">+/- 0.001 milesima de pulgada</td>
            </tr>
            <tr>
                <td colspan="2" class="pintado pt-0 pb-0">MEDIDA ANCHO SIN ARMAR</td>
                <td colspan="2" class="pt-0 pb-0"><input type="text" class="w-100 input_ficha_troqueladoras" id="medida_ancho_sin_armar" name="<?php echo $data[0]->ID ?>"  value="<?php echo $data[0]->medida_ancho_sin_armar ?>"></td>
                <td colspan="2" class="pt-0 pb-0">+- 1milimetro</td>
            </tr>
            <tr>
                <td colspan="2" class="pintado pt-0 pb-0">MEDIDA LARGO SIN ARMAR</td>
                <td colspan="2" class="pt-0 pb-0"><input type="text" class="w-100 input_ficha_troqueladoras" id="medida_largo_sin_armar" name="<?php echo $data[0]->ID ?>"  value="<?php echo $data[0]->medida_largo_sin_armar  ?>"></td>
                <td colspan="2" class="pt-0 pb-0">+- 1milimetro</td>
            </tr>

            <tr>
                <td colspan="2" class="pintado pt-0 pb-0">MEDIDA ALTO ARMADA</td>
                <td colspan="2" class="pt-0 pb-0"><input type="text" class="w-100 input_ficha_troqueladoras" id="medida_alto_armada" name="<?php echo $data[0]->ID ?>"  value="<?php echo $data[0]->medida_alto_armada ?>"></td>
                <td colspan="2" class="pt-0 pb-0">+- 1milimetro</td>
            </tr>
            <tr>
                <td colspan="2" class="pintado pt-0 pb-0">MEDIDA ANCHO ARMADA</td>
                <td colspan="2" class="pt-0 pb-0"><input type="text" class="w-100 input_ficha_troqueladoras" id="medida_ancho_armada" name="<?php echo $data[0]->ID ?>"  value="<?php echo $data[0]->medida_ancho_armada  ?>"></td>
                <td colspan="2" class="pt-0 pb-0">+- 1milimetro</td>
            </tr>
            <tr>
                <td colspan="2" class="pintado pt-0 pb-0">MEDIDA LARGO ARMADA</td>
                <td colspan="2" class="pt-0 pb-0"><input type="text" class="w-100 input_ficha_troqueladoras" id="medida_largo_armada" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->medida_largo_armada  ?>"></td>
                <td colspan="2" class="pt-0 pb-0">+- 1milimetro</td>
            </tr>

            <tr class="text-center bg-black text-light">
                <td colspan="2"></td>
                <td colspan="2" style="color: white;">
                    ESPECIFICACIONES DE TROQUELADO
                </td>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">
                    VELOCIDAD DE MAQUINA EN TROQUEL
                </td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="velocidad_maquina_troquel" name="<?php echo $data[0]->ID ?>"  value="<?php echo $data[0]->velocidad_maquina_troquel  ?>"></td>
                <td colspan="2">En pliegos/Hora</td>

            </tr>
            <tr>
                <td colspan="2" class="pintado">
                    PRESION EN MAQUINA
                </td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="presion_maquina1_troquelado" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->presion_maquina1_troquelado ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="presion_maquina_2_troquelado" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->presion_maquina_2_troquelado  ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">
                    CODIGO INTERNO DE TROQUEL
                </td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="codigo_interno_troquel" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->codigo_interno_troquel  ?>"></td>
                <td colspan="2">Sin tolerancia</td>

            </tr>
            <tr>
                <td colspan="2" class="pintado">
                    TIPO DE MATRIZ
                    <span>* Agregar codigo o nombre, y marca * </span>
                </td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="tipo_matriz" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->tipo_matriz  ?>"></td>
                <td colspan="2">Sin tolerancia</td>
            </tr>

            <tr class="text-center bg-black text-light">
                <td colspan="2"></td>
                <td colspan="2" style="color: white;">
                    TIPO DE PLECA
                </td>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td class="pintado" colspan="2">PLECA DE SISA <span>*Medidas</span></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="pleca_sisa_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->pleca_sisa_1 ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="pleca_sisa_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->pleca_sisa_2 ?>"></td>
            </tr>

            <tr>
                <td class="pintado" colspan="2">PLECA DE CORTE <span>*Medidas</span></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="pleca_corte_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->pleca_corte_1  ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="pleca_corte_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->pleca_corte_2 ?>"></td>
            </tr>

            <tr>
                <td colspan="2" class="pintado pt-0 pb-0"> AYUDAS DE PEGUE (PERFORADO EN AREA DE PEGUE)</td>
                <td class="pt-0 pb-0 text-center align-middle" style="font-size:13px;">
                <div style="color: #515A5A;">
                    LINEA RECTA
                </div>    
                    <input class="form-check-input form-check-inline" type="radio" role="<?php echo $data[0]->ID ?>" name="linea_recta" id="linea_recta_1" value="SI" <?php echo ($data[0]->linea_recta == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label form-check-inline" for="linea_recta_1">SI</label>
                    
                    <input class="form-check-input form-check-inline" type="radio" role="<?php echo $data[0]->ID ?>" name="linea_recta" id="linea_recta_2" value="NO" <?php echo ($data[0]->linea_recta == "NO") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label form-check-inline" for="linea_recta_2">NO</label> 
                </td>
                <td class="pt-0 pb-0 text-center align-middle" style="font-size:15px;">
                    45°:
                    <input class="form-check-input" type="radio" role="<?php echo $data[0]->ID ?>" name="cuatro_5" id="cuatro_5_1" value="SI" <?php echo ($data[0]->cuatro_5 == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label" for="cuatro_5_1">SI</label>

                    <input class="form-check-input" type="radio" role="<?php echo $data[0]->ID ?>" name="cuatro_5" id="cuatro_5_2" value="NO" <?php echo ($data[0]->cuatro_5 == "NO") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label" for="cuatro_5_2">NO</label>
                </td>
                <td colspan="2" class="align-middle pt-0 pb-0">Marque las opciones</td>
            </tr>

            <tr>
                <td colspan="2" class="pintado">AJUGEROS(TAMAÑO)</td>
                <td colspan="2">
                    <input type="text" class="w-100 input_ficha_troqueladoras" id="agujeros_tamano" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->agujeros_tamano  ?>">
                </td>

                <td colspan="2" class="align-middle">Tamaño en mm y pulgadas</td>
            </tr>

            <tr>
                <td colspan="2" rowspan="3" class="pintado align-middle"> DESBASURADO EN MAQUINA</td>

            <tr>
                <td><span>AGUJERO</span></td>

                <td class="text-center">
                    <input class="form-check-input" type="radio" role="<?php echo $data[0]->ID ?>" name="agujero" id="agujero_1" value="SI" <?php echo ($data[0]->agujero == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label" for="agujero_1">SI</label>

                    <input class="form-check-input" type="radio" role="<?php echo $data[0]->ID ?>" name="agujero" id="agujero_2" value="NO" <?php echo ($data[0]->agujero == "NO") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label" for="agujero_2">NO</label>
                </td>
                <td colspan="2" rowspan="2" class="align-middle">Marque las opciones</td>
            </tr>
            <tr>

                <td><span>BASURA DE MATERIAL</span></td>
                <td class="text-center">
                    <input class="form-check-input" type="radio" role="<?php echo $data[0]->ID ?>" name="basura_material" id="basura_material_1" value="SI" <?php echo ($data[0]->basura_material == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label" for="basura_material_1">SI</label>

                    <input class="form-check-input" type="radio" role="<?php echo $data[0]->ID ?>" name="basura_material" id="basura_material_2" value="NO" <?php echo ($data[0]->basura_material == "NO") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label" for="basura_material_2">NO</label>

                </td>

            </tr>

            </tr>

            <tr>
                <td colspan="2" class="pintado">REPETICIONES POR TROQUEL</td>
                <td colspan="2">
                    <input type="text" class="w-100 input_ficha_troqueladoras" id="repeticiones_troquel" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->repeticiones_troquel ?>">
                </td>

                <td colspan="2" class="align-middle">Numero de piezas troqueladas</td>
            </tr>

            <tr class="text-center bg-black text-light">
                <td colspan="2"></td>
                <td colspan="2" style="color: white;">
                    REALZADO
                </td>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td class="pintado" colspan="2">VELOCIDAD DE MAQUINA</td>

                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="velocidad_maquina_realzado" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->velocidad_maquina_realzado  ?>"></td>
                <td colspan="2">En Pliegos/Hora</td>
            </tr>
            <tr>
                <td class="pintado" colspan="2">PRESION EN MAQUINA</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="presion_maquina_realzado_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->presion_maquina_realzado_1 ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="presion_maquina_realzado_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->presion_maquina_realzado_2  ?>"></td>
            </tr>

            <tr>
                <td colspan="2" class="pintado pt-0 pb-0a align-middle">TIPO DE CLICHE</td>
                <td class="text-center pt-0 pb-0 align-middle">MACHO: 
                    <input class="form-check-input text-center pt-0 pb-0 align-middle" type="checkbox" role="<?php echo $data[0]->ID ?>" name="tipo_cliche_realzado_macho" id="tipo_cliche_realzado_macho" value="SI" <?php echo ($data[0]->tipo_cliche_realzado_macho == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label text-center pt-0 pb-0 align-middle" for="tipo_cliche_realzado_macho"></label>
                </td>

                <td class="text-center pt-0 pb-0 align-middle">HEMBRA: 
                    <input class="form-check-input text-center pt-0 pb-0 align-middle" type="checkbox" role="<?php echo $data[0]->ID ?>" name="tipo_cliche_realzado_hembra" id="tipo_cliche_realzado_hembra" value="SI" <?php echo ($data[0]->tipo_cliche_realzado_hembra == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label text-center pt-0 pb-0 align-middle" for="tipo_cliche_realzado_hembra"></label>
                </td>
                <td colspan="2" class="pt-0 pb-0 align-middle">Marque las opciones</td>
            </tr>
            <tr>
                <td colspan="2" class="pintado align-middle">CANTIDAD DE REALZADOS</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="cantidad_realzados" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->cantidad_realzados  ?>"></td>
                <td colspan="2">Numero de realzados hechos en 1 pasada de maquina</td>
            </tr>

            <tr class="text-center bg-black text-light">
                <td colspan="2"></td>
                <td colspan="2"style="color: white;">
                    HOT FOIL
                </td>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">VELOCIDAD DE MAQUINA</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="velocidad_maquina_hot" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->velocidad_maquina_hot ?>"></td>
                <td colspan="2">En Pliegos/Hora</td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">TIPO DE FOIL(COLOR Y PROVEEDOR)</td>
                <td><input type="text" class="w-100 input_ficha_troqueladoras" id="tipo_foil_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->tipo_foil_1 ?>"></td>
                <td><input type="text" class="w-100 input_ficha_troqueladoras" id="tipo_foil_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->tipo_foil_2 ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="tipo_foil_3" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->tipo_foil_3 ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">CODIGO DE FOIL</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="codigo_foil_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->codigo_foil_1  ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="codigo_foil_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->codigo_foil_2 ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">LOTE DE FOIL</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="lote_foil_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->lote_foil_1 ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="lote_foil_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->lote_foil_2 ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">PRESION DE MAQUINA</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="presion_maquina_hot_1" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->presion_maquina_hot_1 ?>"></td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="presion_maquina_hot_2" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->presion_maquina_hot_2 ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="pintado">TEMPERATURA DE LAMINA</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="temperatura_lamina" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->temperatura_lamina ?>"></td>
                <td colspan="2">En la medida que la maquina indique</td>
            </tr>
            <tr>
                <td colspan="2" class="pintado pt-0 pb-0 align-middle">TIPO DE CLICHE</td>
                <td class="text-center pt-0 pb-0  align-middle">MACHO: 
                    <input class="form-check-input text-center pt-0 pb-0 align-middle" type="checkbox" role="<?php echo $data[0]->ID ?>" name="tipo_cliche_hot_macho" id="tipo_cliche_hot_macho" value="SI" <?php echo ($data[0]->tipo_cliche_hot_macho == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label text-center pt-0 pb-0 align-middle" for="tipo_cliche_hot_macho"></label>
                </td>

                <td class="text-center pt-0 pb-0 align-middle">HEMBRA: 
                    <input class="form-check-input text-center pt-0 pb-0 align-middle" type="checkbox" role="<?php echo $data[0]->ID ?>" name="tipo_cliche_hot_hembra" id="tipo_cliche_hot_hembra" value="SI" <?php echo ($data[0]->tipo_cliche_hot_hembra == "SI") ? 'checked="checked"' : ' '; ?>>
                    <label class="form-check-label text-center pt-0 pb-0 align-middle" for="tipo_cliche_hot_hembra"></label>
                </td>
                <td colspan="2" class="pt-0 pb-0 align-middle">Marque las opciones</td>
            </tr>

            <tr>
                <td colspan="2" class="pintado">CANTIDAD DE GRABADOS</td>
                <td colspan="2"><input type="text" class="w-100 input_ficha_troqueladoras" id="cantidad_grabados" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->cantidad_grabados ?>"></td>
                <td colspan="2">Numeros de grabados hechos en 1 pasada en maquina</td>
            </tr>
            <tr>
                <td colspan="6">Observaciones</td>
            </tr>
            <tr>
                <td colspan="6">
                    <textarea class="w-100 input_ficha_troqueladoras" id="observaciones" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->observaciones  ?>" cols="20" rows="4"></textarea>
                </td>
            </tr>
            <tr style="height:25px"></tr>
            <tr class="text-center bg-black text-light">
                <td colspan="2"></td>
                <td colspan="2"style="color: white;">
                    ENCARGADOS CALIDAD:
                </td>
                <td colspan="2">
                </td>
            </tr>

            <center>
                <tr>
                    <td colspan="2" class="border border-white">DEPARTAMENTO DE CALIDAD</td>
                    <td class="border border-white" colspan="2">
                        <input type="text" class="w-100 input_ficha_troqueladoras" placeholder="NOMBRE" id="encargados_nombre" name="<?php echo $data[0]->ID ?>" value="<?php echo $data[0]->encargados_nombre  ?>">
                    </td>
                    <td class="border border-white">
                        <input type="text" class="w-100 input_ficha_troqueladoras" placeholder="FIRMA" disabled>
                    </td>
                    <td class="border border-white">
                        <input type="text" class="w-100 text-center input_ficha_troqueladoras" placeholder="FECHA" value="<?php echo date('d/m/Y')  ?>" disabled>
                    </td>
                </tr>
            </center>

        </tbody>
    </table>
    <!-- ////////// PARA MOSTRAR LA IMAGEN Y EL PDF EN EL CUERPO DE LA FICHA ///////////-->
<table>
    <div class="bg-black text-light text-center w-100 p-2">
            ARCHIVOS ADJUNTOS
    </div>

    <div>
        <?php if (isset($documentos_ficha_troqueladora[0]->url)) { ?>
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="<?php echo $documentos_ficha_troqueladora[0]->url  ?>" alt="imagen">
            </div>
        <?php } ?>
    </div>
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <div>
        <?php if (isset($documentos_ficha_troqueladora[0]->pdf)) { ?>
            <div class="d-flex justify-content-center">
                <embed src="<?php echo $documentos_ficha_troqueladora[0]->pdf ?>" type="application/pdf" width="100%" height="600px" />
            </div>
        <?php } ?>
    </div>
</table>

<!-- ///////////////////////////////////////////////////////////////////////////////// -->

<!-- //////// SUBIR ARCHIVOS /////////////////////////////////////////////////////////-->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="POST" id="archivos" data-table="archivos" data-id="" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar un Archivo a la Ficha<span class="new-state"></span><span class="new-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre" style="margin-bottom: 10px;">Nombre</label>
                        <?php if (isset($documentos_ficha_troqueladora[0]->nombre)) { ?>
                            <input type="text" class="w-100 upload_nombre_archivo" name="<?php echo $documentos_ficha_troqueladora[0]->id ?>" id="nombre" value="<?php echo $documentos_ficha_troqueladora[0]->nombre ?>" style="margin-bottom: 20px;">
                        <?php } else { ?>
                            <input type="text" class="w-100 upload_nombre_archivo" name="" id="nombre" value="" style="margin-bottom: 20px;">
                        <?php } ?>

                        <label for="fecha" style="margin-bottom: 10px;">Fecha</label>
                        <?php if (isset($documentos_ficha_troqueladora[0]->fecha)) { ?>
                            <input type="date" class="w-100 upload_nombre_archivo" name="<?php echo $documentos_ficha_troqueladora[0]->id ?>" id="fecha" value="<?php echo $documentos_ficha_troqueladora[0]->fecha ?>" style="margin-bottom: 20px;">
                        <?php } else { ?>
                            <input type="date" class="w-100 upload_nombre_archivo" name="" id="fecha" value="" style="margin-bottom: 20px;">
                        <?php } ?>

                        <label for="url" style="margin-bottom: 10px;">Subir imagen</label>
                        <?php if (isset($documentos_ficha_troqueladora[0]->url)) { ?>
                            <input type="file" class="w-100 upload_ficha_troqueladora" name="<?php echo $documentos_ficha_troqueladora[0]->id ?>" id="url" value="<?php echo $documentos_ficha_troqueladora[0]->url  ?>" style="margin-bottom: 20px;">
                        <?php } else { ?>
                            <input type="file" class="w-100 upload_ficha_troqueladora" name="" id="url" value="" style="margin-bottom: 20px;">
                        <?php } ?>

                        <label for="pdf" style="margin-bottom: 10px;">Subir archivo PDF</label>
                        <?php if (isset($documentos_ficha_troqueladora[0]->pdf)) { ?>
                            <input type="file" class="w-100 uploadPDF_ficha_troqueladora" name="<?php echo $documentos_ficha_troqueladora[0]->id ?>" id="pdf" value="<?php echo $documentos_ficha_troqueladora[0]->pdf  ?>" style="margin-bottom: 20px;">
                        <?php } else { ?>
                            <input type="file" class="w-100 uploadPDF_ficha_troqueladora" name="" id="pdf" value="" style="margin-bottom: 20px;">
                        <?php } ?>

                        <!-- ACA SE MUESTRA LA IMAGEN -->
                        <?php if (isset($documentos_ficha_troqueladora[0]->url)) { ?>
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid" src="<?php echo $documentos_ficha_troqueladora[0]->url  ?>" alt="imagen">
                            </div>
                        <?php } ?>

                        <?php if (isset($documentos_ficha_troqueladora[0]->pdf)) { ?>
                            <div class="d-flex justify-content-center">
                                <embed src="<?php echo $documentos_ficha_troqueladora[0]->pdf ?>" type="application/pdf" width="100%" height="600px" />
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url("resources/app/Calidad/ficha_tecnica/js/ficha_troqueladora.js"); ?>"></script>

