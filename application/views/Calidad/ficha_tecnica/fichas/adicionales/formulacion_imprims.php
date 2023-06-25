
<?php foreach ($formulacion_imprim as $key => $value) { ?>
    <tr class="text-center text-light:">
            <td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="2">Secuencia y colores</td>

            <td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="1">Plancha</td>

            <td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="5">Maquina</td>

            <td class="pintado m-0 p-0 align-middle" style="padding: 10px;" colspan="7">COLOR</td>
        </tr>

        <style>
            .texto-vertical-3 {
                writing-mode: vertical-lr;
                transform: rotate(180deg);
                padding: 10px;
            }
        </style>

        <tr class="text-center">        
            <td colspan="2" rowspan="2" class="pintado" style="width: 200px; padding: 10px;font-size: 5pt;">
                <label class="form-check-label" for="AutoPaso" id="auto_pasos" style="color: black;font-size: 10pt">PASO</label> <br> <br>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <input class="form-check-input formulacion_imprim" name="tiro_paso_1_alt" type="checkbox" id="tiro_paso_11_alt" value="SI" value="<?php echo $value->tiro_paso_1_alt ?>">
                <label class="form-check-label" for="tiro_paso_11_alt" style="color: black;font-size: 7pt">TIRO</label>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <input class="form-check-input formulacion_imprim" type="checkbox" name="<?php echo $value->id_imprim  ?>" id="retiro_11_clon" value="SI" value="<?php echo $value->retiro_1_clon ?>" >
                <label class="form-check-label" for="retiro_11_clon" style="color: black;font-size: 7pt">RETIRO</label>                         
            </td>
    
            <td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Angulo<br>de color</span></td>

            <td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Presion</span></td>

            <td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Variante<br>de<br>flujo</span></td>

            <td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Rodillo<br>entintador</span></td>

            <td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Distribucion<br>lateral</span></td>

            <td class="pintado" rowspan="2" style="padding: 10px;font-size: 5pt;"><span style="font-size: 8pt;">Tomador<br>de<br>tinta</span>
        </tr>

        <tr class="text-center" style="padding: 0 0;">
            <td class="pintado" style="font-size: 5pt;padding: 0 10px"><span style="font-size: 8pt;">Densidad STD</span></td>
            <td class="pintado" style="font-size: 5pt;padding: 0 10px"><span style="font-size: 8pt;">% vueltas</span></td>
            <td class="pintado" style="font-size: 5pt;padding: 0 10px"><span style="font-size: 8pt;">% Agua</span></td>
        </tr>
        
        <tr>
            <td class="unidad" style=" padding: 0;"><span style="padding-left: 7px;">Unidad 1:</span></td>
            <td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tiro_unidad_1" value="<?php echo $value->tiro_unidad_1  ?>">
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="angulo_color1_1" value="<?php echo $value->angulo_color1_1  ?>"></td>    
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="presion_1" value="<?php echo $value->presion_1  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="variante_flujo_1_1" value="<?php echo $value->variante_flujo_1_1  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="rodillo_entintador_1_1" value="<?php echo $value->rodillo_entintador_1_1  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="distribucion1_1" value="<?php echo $value->distribucion1_1  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tomador_tinta_1_1" value="<?php echo $value->tomador_tinta_1_1  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="densidad_1" value="<?php echo $value->densidad_1  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="vueltas_1_1" value="<?php echo $value->vueltas_1_1 ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="agua_1" value="<?php echo $value->agua_1   ?>"></td>
        </tr>

        <tr>
            <td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 2:</span></td>         
            <td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tiro_unidad_2" value="<?php echo $value->tiro_unidad_2  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="angulo_color1_2" value="<?php echo $value->angulo_color1_2  ?>"></td>    
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="presion_2" value="<?php echo $value->presion_2  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="variante_flujo_1_2" value="<?php echo $value->variante_flujo_1_2  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="rodillo_entintador_1_2" value="<?php echo $value->rodillo_entintador_1_2  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="distribucion1_2" value="<?php echo $value->distribucion1_2  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tomador_tinta_1_2" value="<?php echo $value->tomador_tinta_1_2  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="densidad_2" value="<?php echo $value->densidad_2  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="vueltas_1_2" value="<?php echo $value->vueltas_1_2 ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="agua_2" value="<?php echo $value->agua_2   ?>"></td>
        </tr>

        <tr>
            <td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 3:</span></td>
            <td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tiro_unidad_3" value="<?php echo $value->tiro_unidad_3  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="angulo_color1_3" value="<?php echo $value->angulo_color1_3  ?>"></td>    
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="presion_3" value="<?php echo $value->presion_3  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="variante_flujo_1_3" value="<?php echo $value->variante_flujo_1_3  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="rodillo_entintador_1_3" value="<?php echo $value->rodillo_entintador_1_3  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="distribucion1_3" value="<?php echo $value->distribucion1_3  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tomador_tinta_1_3" value="<?php echo $value->tomador_tinta_1_3  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="densidad_3" value="<?php echo $value->densidad_3  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="vueltas_1_3" value="<?php echo $value->vueltas_1_3 ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="agua_3" value="<?php echo $value->agua_3   ?>"></td>
        </tr>

        <tr>
            <td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 4:</span></td>
            <td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tiro_unidad_4" value="<?php echo $value->tiro_unidad_4  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="angulo_color1_4" value="<?php echo $value->angulo_color1_4  ?>"></td>    
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="presion_4" value="<?php echo $value->presion_4  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="variante_flujo_1_4" value="<?php echo $value->variante_flujo_1_4  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="rodillo_entintador_1_4" value="<?php echo $value->rodillo_entintador_1_4  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="distribucion1_4" value="<?php echo $value->distribucion1_4  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tomador_tinta_1_4" value="<?php echo $value->tomador_tinta_1_4  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="densidad_4" value="<?php echo $value->densidad_4  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="vueltas_1_4" value="<?php echo $value->vueltas_1_4 ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="agua_4" value="<?php echo $value->agua_4   ?>"></td>
        </tr>

        <tr>
            <td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 5:</span></td>
            <td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tiro_unidad_5" value="<?php echo $value->tiro_unidad_5  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="angulo_color1_5" value="<?php echo $value->angulo_color1_5  ?>"></td>    
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="presion_5" value="<?php echo $value->presion_5  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="variante_flujo_1_5" value="<?php echo $value->variante_flujo_1_5  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="rodillo_entintador_1_5" value="<?php echo $value->rodillo_entintador_1_5  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="distribucion1_5" value="<?php echo $value->distribucion1_5  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tomador_tinta_1_5" value="<?php echo $value->tomador_tinta_1_5  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="densidad_5" value="<?php echo $value->densidad_5  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="vueltas_1_5" value="<?php echo $value->vueltas_1_5 ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="agua_5" value="<?php echo $value->agua_5   ?>"></td>
        </tr>

        <tr>
            <td class="unidad" style="padding: 0;"><span style="padding-left: 7px;">Unidad 6:</span></td>
            <td class="unidad" style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tiro_unidad_6" value="<?php echo $value->tiro_unidad_6  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="angulo_color1_6" value="<?php echo $value->angulo_color1_6  ?>"></td>    
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="presion_6" value="<?php echo $value->presion_6  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="variante_flujo_1_6" value="<?php echo $value->variante_flujo_1_6  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="rodillo_entintador_1_6" value="<?php echo $value->rodillo_entintador_1_6  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="distribucion1_6" value="<?php echo $value->distribucion1_6  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="tomador_tinta_1_6" value="<?php echo $value->tomador_tinta_1_6  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="densidad_6" value="<?php echo $value->densidad_6  ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="vueltas_1_6" value="<?php echo $value->vueltas_1_6 ?>"></td>
            <td style="font-size: 7pt; padding: 7px;"><input type="text" class="w-100 formulacion_imprim" name="<?php echo $value->id_imprim  ?>" id="agua_6" value="<?php echo $value->agua_6   ?>"></td>
        </tr>
<?php } ?>