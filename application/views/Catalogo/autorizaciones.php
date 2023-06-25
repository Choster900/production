<div class="contenedor">
    <section class="section my-5 pb-5">
        <div class="container-fluid page-maquinas">
            <div class="row">
                <!-- table -->
                <div class="table-responsive">
                    <table id="tabla_catalogos" class="table table-striped display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100%; border-collapse: collapse">
                        <thead class="thead-light">
                            <tr class='text-center align-middle'>
                                <th>id</th>
                                <th>Usuario</th>
                                <?php
                                foreach ($modulos_autorizaciones as $key => $value) {
                                    $contador = intval($key);
                                    echo '<th>' . $value->nombre . '</th>';
                                }
                                ?>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <?php
                                for ($i = 0; $i < ($contador + 1); $i++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $usuario_text = "";
                            foreach ($usuarios as $key => $value) {
                                $usuario_text .= '<tr><td id="id_username">' . $value->id . '</td><td>' . $value->username . '</td>';
                                foreach ($modulos_autorizaciones as $key => $modulos) {
                                    $v = ($this->Autorizaciones_m->autorizaciones($value->id, $modulos->id_sub) == 1) ? "checked" : "";
                                    $usuario_text .= '<td>
                                    <input class="form-check-input" type="checkbox" value="" id="' . $value->username . '-' . $modulos->id_sub . '"' . $v . ' data-modulo="' . $modulos->id_modulo . '" data-submodulo="' . $modulos->id_sub . '" data-username="' . $value->id . '" />
                                    <label class="form-check-label" for="' . $value->username . '-' . $modulos->id_sub . '"></label>
                                    </td>';
                                }
                                $usuario_text .= '</tr>';
                            }
                            echo $usuario_text;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


<link rel="stylesheet" href="<?php echo base_url("resources/app/Calidad/ficha_tecnica/css/style.css"); ?>">
<script src="<?php echo base_url("resources/app/catalogo/autorizaciones/js/show.js"); ?>"></script>

