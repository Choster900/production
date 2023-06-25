<div class="contenedor">
    <section class="section my-5 pb-5">
        <div class="container-fluid page-maquinas">
            <div class="row">
                <div class="col-sm-12 col-lg-9"></div>
                <div class="col-sm-12 col-lg-3">
                    <button type="button" id="btnAgregarDocumento" style="right: 0;float:right;" class="btn btn-xs crear mx-auto botones" data-toggle="modal" data-target="#exampleModalLong">
                        <img src="<?php echo base_url() ?>resources/generales/img/icons/Maquina.png" alt="crear">
                        <span>Crear <?php echo $boton ?></span>
                    </button>
                </div>
            </div>
            <div class="row">
                <!-- table -->
                <div class="table-responsive">

                    <table id="tabla_catalogos" class="table table-striped display responsive nowrap text-center p-0 mt-2 tablas_sistema" style="width:100%; border-collapse: collapse">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <thead id="thead_filtros" style="text-align: center;">
                            <tr>
                                <th><input type="text" class="tabla"></th>
                                <th><input type="text" class="tabla"></th>
                                <th><input type="text" class="tabla"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
                <!-- table -->
            </div>
        </div>
    </section>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="maquinas" data-table="maquinas" data-id="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="new-state"></span><span class="new-name"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nombre_maquina">Nombre</label>
                        <input class="form-control form-control" type="text" id="nombre_maquina" data-validetta="required">
                    </div>
                    <div class="form-group">
                        <label for="tipo_maquina">Tipo</label>
                        <select class="js-select-basic-singles-catalogos" id="tipo" data-validetta="required">
                            <option value="" id="first"></option>
                            <option value="imprentas">imprentas</option>
                            <option value="troqueladoras">troqueladoras</option>
                            <option value="flexografia">flexografia</option>
                            <option value="pegadoras">pegadoras</option>
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

<script src="<?php echo base_url("resources/app/catalogo/maquinas/js/show.js"); ?>"></script>