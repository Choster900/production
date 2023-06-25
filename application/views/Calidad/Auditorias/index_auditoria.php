<div class="contenedor">
    <section class="section my-5 pb-5">
        <div class="row">
            <div class="col-sm-12 col-lg-9"></div>
            <div class="col-sm-12 col-lg-3">
                <button type="button" id="crear_nuevo_documento" style="right: 0;float:right;" class="btn btn-xs crear mx-auto botones crear_documento" data-toggle="modal" data-target="#modal-create-auditoria">
                    <img src="<?php echo base_url() ?>resources/generales/img/icons/Maquina.png" alt="crear">
                    <span>Crear documento</span>
                </button>
            </div>
        </div>

        <div class="row">
            <!-- table -->
            <div class="table-responsive">
                <table id="tabla_auditoria_index" class="table table-striped display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100%; border-collapse: collapse">
                    <thead>
                        <tr>
                            <th style=" width:10px;">Codigo</th>
                            <th style=" width:10px;">Fecha</th>
                            <th >Auditor</th>
                            <th >Truno</th>
                            <th >Tipo</th>
                            <th style=" width:10px;">
                                <span id="mostrar_todo">
                                    <img src="<?php echo base_url("resources/generales/img/icons/actualizar.png"); ?>" alt="" height="20px">
                                </span>
                            </th>
                        </tr>
                    </thead>

                    <thead id="thead_filtros" style="text-align: center;">
                        <tr>
                            <th><input type="text" class="tabla"></th><!-- CODIGO-->
                            <th><input type="date" class="tabla"></th><!-- FECHA -->
                            <th><input type="text" class="tabla"></th><!-- AUDITOR -->
                            <th><input type="text" class="tabla"></th><!-- TURNO -->
                            <th><input type="text" class="tabla"></th><!-- TIPO -->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
            <!-- table -->
        </div>

        <!--Modal: Create reporte-->
        <div class="modal fade" id="modal-create-auditoria" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-0e4MUQe_4BBGu_Yasn5Xr_EJAHylOcsqNE04Dt05pqq-WuZD-H7C3njBWPp3dVe_lMU&usqp=CAU" class="rounded-circle img-fluid">
                    </div>
                    <!--Body-->
                    <div class="modal-body text-center mb-1">
                        <h5 class="mt-1 mb-2">Seleccione un turno</h5>
                        <div class="md-form ml-0 mr-0">
                            <select class="js-select-basic-single-au" id="tipo_document" name="tipo_document" style="font-size: 8pt;">
                                <!-- AREA QUE ENTREGA -->
                                <option value="">Tipo</option>
                                <option value="Imprenta">Imprenta</option>
                                <option value="Troqueladora">Troqueladora</option>
                                <option value="Pegadora">Pegadora</option>
                                <option value="Acabados" disabled style="background-color: red;">Acabados</option>

                            </select>
                        </div>

                        <div class="md-form ml-0 mr-0">
                            <select class="js-select-basic-single-au" id="turno_to_document" name="turno_to_document" style="font-size: 8pt;">
                                <!-- AREA QUE ENTREGA -->
                                <option value="">Turno</option>
                                <option value="Mañana">Mañana</option>
                                <option value="Tarde">Tarde</option>
                                <option value="Noche">Noche</option>
                                <option value="Dia completo">Dia completo</option>

                            </select>
                        </div>
                        <div class="text-center pt-4">
                            <button class="btn btn-success botones" id="btnCrearDocumento">Crear</button>
                        </div>
                    </div>

                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: Create reporte-->
    </section>
</div>
<link rel="stylesheet" href="<?php echo base_url("resources/app/Calidad/Auditorias/css/index_auditoria.css"); ?>">

<style>
    .myFont {
        font-size: 10pt;
    }
</style>
<script>
    $('.js-select-basic-single-au').select2({
        width: 'resolve',
        dropdownAutoWidth: true,
        theme: "bootstrap4",
        dropdownCssClass: "myFont",
    });
</script>
<script src="<?php echo base_url("resources/app/Calidad/Auditorias/js/create.js"); ?>"></script>
<script src="<?php echo base_url("resources/app/Calidad/Auditorias/js/show.js"); ?>"></script>
