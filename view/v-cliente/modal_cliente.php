<div id="modal_cliente" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

        <form method="post" id="form_cliente">
            <div class="modal-header">
                    <h4 class="modal-title text-primary" id="modal_titulo"></h4>
            </div>
                        <div class="modal-body">
                            <input type="hidden" id="IDCLIENTE" name="IDCLIENTE" >
                            

                                <div class="form-group">

                                        <label class="form-label" for="RAZON_SOCIAL">Nombre</label>
                                        <input type="text" class="form-control" id="RAZON_SOCIAL" name="RAZON_SOCIAL" placeholder="Nombre de Razon Social"  required>

                                        <label class="form-label" for="RFC">RFC</label>
                                        <input type="text" class="form-control" id="RFC" name="RFC" placeholder="RFC" required>
                                        
                                        
                                </div>
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-rounded btn-outline-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                        </div>

                    </form>
                    <?php //var_dump($_POST)?>;
        </div>

    </div>

</div>