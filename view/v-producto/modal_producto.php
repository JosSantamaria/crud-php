<div id="modal_producto" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

        <form action="" method="post" id="form_producto">
            <div class="modal-header">
                
                    <i class="font-icon-close-2"></i>
                    <h4 class="modal-title text-success" id="modal_titulo"></h4>
            </div>
                    

                        <div class="modal-body">
                            <input type="hidden" name="DESCRIPCION" id="DESCRIPCION">
                            <input type="hidden" name="UNIDADMEDIDA" id="UNIDADMEDIDA">
                            <input type="hidden" name="PRECIO1" id="PRECIO1">

                                <div class="form-group">

                                        <label class="form-label" for="DESCRIPCION">Nombre</label>
                                        <input type="text" class="form-control" id="DESCRIPCION" name="DESCRIPCION" placeholder="Nombre Material" required>

                                        <label class="form-label" for="UNIDADMEDIDA">Unidad de medida</label>
                                        <input type="text" class="form-control" id="UNIDADMEDIDA" name="UNIDADMEDIDA" placeholder="PZA , M" required>
                                        
                                        <label class="form-label" for="PRECIO1">Precio</label>
                                        <input type="text" class="form-control" id="PRECIO1" name="PRECIO1" placeholder="000.000" required>
                                </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-rounded btn-outline-warning" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-success">Guardar</button>
                        </div>

                    </form>

        </div>

    </div>

</div>