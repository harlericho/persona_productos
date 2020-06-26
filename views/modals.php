<!-- Modal Agregar-->
<div class="modal fade" id="exampleModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-box"></i> Add Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAddModal" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Names</label>
                        <input type="text" class="form-control" id="txtNamesa" name="txtNamesa" placeholder="Enter you names">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control decimales" id="txtPricea" name="txtPricea" placeholder="Enter your price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" id="txtQuantitya" maxlength="2" name="txtQuantitya" placeholder="Enter your quantity" onKeyPress="return soloNumeros(event)">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Image</label>
                        <img id="img" class="card-img-top" src="../image/default.png" height="100" width="50">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control-file" id="txtImagena" name="txtImagena">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="addProducts()">
                    <i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar-->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-box"></i> Edit Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEditModal" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Names</label>
                        <input type="hidden" id="txtide" name="txtide">
                        <input type="text" class="form-control" id="txtNamese" name="txtNamese" placeholder="Enter your names">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control decimales" id="txtPricee" name="txtPricee" placeholder="Enter your price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" id="txtQuantitye" maxlength="2" name="txtQuantitye" placeholder="Enter your quantity" onKeyPress="return soloNumeros(event)">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="hidden" id="urlimagen" name="urlimagen">
                        <label for="exampleInputEmail1">Image</label>
                        <img id="imge" class="card-img-top" src="" height="100" width="50">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control-file" id="txtImagene" name="txtImagene">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="editProducts()">
                    <i class="fa fa-edit"></i> Edit</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Eliminar-->
<div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-box"></i> Delete Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formDeleteModal">
                    <div class="form-group ">
                        <input type="hidden" id="txtidel" name="txtidel">
                        <center>
                        <div class="col-md-6">
                        <label for="exampleInputEmail1"><h5>¿ Sure you want to remove the product ?</h5></label>
                        <img id="imgdel" class="card-img-top" src="" height="100" width="50">
                        </div>
                        </center>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" onclick="deleteProducts()">
                    <i class="fa fa-trash"></i> Delete</button>
            </div>
        </div>
    </div>
</div>






<!-- Llamamos al modal -->
<script type="text/javascript">
    $('#exampleModal').on('shown.bs.modal', function() {
        $('#txtNamesa').focus();
    })
</script>

<script type="text/javascript">
    // Solo permite ingresar numeros.
    function soloNumeros(e) {
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>

<!-- 
Solo numero decimales-->
<script type="text/javascript">
    decimalNumber();
</script>

<!-- 
Mostramos la imagen del producto -->
<script type="text/javascript">
    viewImage();
    viewImageEdit();
</script>