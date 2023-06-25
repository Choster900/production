<div class="contenedor">
    <style>
        .modal-dialog.modal-notify.modal-success .badge,
        .modal-dialog.modal-notify.modal-success .modal-header {
            background-color: #a11c27;
        }
    </style>

    <section class="section my-5 pb-5">
        <div class="row gx-5">
            <div class="col-sm-12 col-lg-4">

            </div>
            <div class="col-sm-12 col-lg-8" align='right'> 

                    <button id="btnAgregarDocumento" class="btn crear mt-2 mb-2 botones" data-toggle="modal" data-target="#exampleModalLong"  data-backdrop="false">
                        <img src="<?php echo base_url("resources/generales/img/icons/Reportes.png"); ?>">
                        <span class="span_boton">Agregar Hule</span>
                    </button>

            </div>
        </div>

        <div class="row">
            <!-- table -->
            <div class="table-responsive">

                <table id="tabla_hules" class="table table-striped display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100% ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <thead id="thead_filtros" style="text-align: center;">
                        <tr>
                            <th><input type="text" class="tabla input_1" name="id2" id="id2"></th>
                            <th><input type="text" class="tabla input_2" name="nombre" id="nombre"></th>
                            <th><input type="text" class="tabla input_3" name="activo2" id="activo2"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>

            </div>
            <!-- table -->
        </div>

    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="POST" id="maquinas" data-table="Hules" data-id="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="new-state"></span><span class="new-name"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nombre_maquina">Descripción</label>
                            <input class="form-control form-control" type="text" id="nombre_maquina" data-validetta="required">
                        </div>
                        <div class="form-group">
                            <label for="tipo_maquina">Estado</label>
                            <select class="js-select-basic-singles-catalogos" id="tipo" data-validetta="required">
                                <option value="" id="first"></option>
                                <option value="0">Inactivo</option>
                                <option value="1">Activo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning botones" data-dismiss="modal" id="cerrarModal">Cerrar</button>
                        <button type="submit" class="btn btn-success botones opcion" data-opcion=""><span class="new-state"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
<link rel="stylesheet" href="<?php echo base_url("resources/app/Calidad/ficha_tecnica/css/style.css"); ?>">
<script src="<?php echo base_url("resources/app/catalogo/hules/js/show.js"); ?>"></script>