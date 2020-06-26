function views() {
    $.ajax({
        type: "POST",
        url: "../controllers/control_products_views.php",
        cache: false,
        success: function (r) {
            $('#table').html(r);
        },
    });
}

function addProducts() {
    if (validations_modal_add() == true) {
        var formData = new FormData($("#formAddModal")[0]);
        saveProducts(formData);
    }
}

function saveProducts(datos) {
    $.ajax({
        type: "POST",
        url: "../controllers/control_products_add.php",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (r) {
            if (r) {
                alertify.set('notifier', 'position', 'top-center');
                alertify.success('Save products');
                $("#formAddModal")[0].reset();
                document.getElementById("img").src = "../image/default.png";
                $("#txtNamesa").focus();
                views();
                $('#exampleModalAdd').modal('hide');
            }
        },
    });
}

function getData(id) {
    $.ajax({
        type: 'POST',
        data: "id=" + id,
        url: '../controllers/control_products_getData.php',
        cache: false,
        success: function (r) {
            r = JSON.parse(r);
            //console.log(r);//probe porque me daba error en el json
            $('#txtide').val(r['idpro']);
            $('#txtNamese').val(r['names']);
            $('#txtPricee').val(r['price']);
            $('#txtQuantitye').val(r['quantity']);
            $('#urlimagen').val(r['image']);
            //var dato = r['image'];// no me mostraba la imagen
            $("#imge").attr("src", "data:image/jpg;base64," + r['image']);
        }
    });
}



function editProducts() {
    if (validations_modal_edit() == true) {
        var formData = new FormData($("#formEditModal")[0]);
        modifyProducts(formData);
    }
}
function modifyProducts(datos) {
    $.ajax({
        type: "POST",
        url: "../controllers/control_products_edit.php",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (r) {
            if (r) {
                alertify.set('notifier', 'position', 'top-center');
                alertify.success('Modify products');
                $('#exampleModalEdit').modal('hide');
                views();
            }
        },
    });
}

function deleteData(id) {
    $.ajax({
        type: 'POST',
        data: "id=" + id,
        url: '../controllers/control_products_getData.php',
        cache: false,
        success: function (r) {
            r = JSON.parse(r);
            //console.log(r);//probe porque me daba error en el json
            $('#txtidel').val(r['idpro']);
            //var dato = r['image'];// no me mostraba la imagen
            $("#imgdel").attr("src", "data:image/jpg;base64," + r['image']);
        }
    });
}

function deleteProducts() {
    var id = document.getElementById("txtidel").value;
    var datos = "idproducto=" + id;
    $.ajax({
        type: "POST",
        url: "../controllers/control_products_delete.php",
        data: datos,
        cache: false,
        success: function (r) {
            if (r) {
                alertify.set('notifier', 'position', 'top-center');
                alertify.error('Delete products');
                views();
                $('#exampleModalDelete').modal('hide');
            }
        },
    });
}






function validations_modal_add() {
    var names = $('#txtNamesa').val();
    var price = $('#txtPricea').val();
    var quantity = $('#txtQuantitya').val();
    var file = $('#txtImagena').val();
    if (($.trim(names) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your names products');
        $("#txtNamesa").focus();
        return false;
    } else if (($.trim(price) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your price products');
        $("#txtPricea").focus();
        return false;
    } else if (($.trim(quantity) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your quantity products');
        $("#txtQuantitya").focus();
        return false;
    } else if (($.trim(file) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your image products');
        $("#txtImagena").focus();
        return false;
    } else {
        return true;
    }
}


function validations_modal_edit() {
    var names = $('#txtNamese').val();
    var price = $('#txtPricee').val();
    var quantity = $('#txtQuantitye').val();
    var imagen = $('#urlimagen').val();
    if (($.trim(names) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your names products');
        $("#txtNamese").focus();
        return false;
    } else if (($.trim(price) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your price products');
        $("#txtPricee").focus();
        return false;
    } else if (($.trim(quantity) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your quantity products');
        $("#txtQuantitye").focus();
        return false;
    } else if (($.trim(imagen) == "")) {
        alertify.set('notifier', 'position', 'top-center');
        alertify.error('Enter your image products');
        $("#txtImagene").focus();
        return false;
    } else {
        return true;
    }
}





function viewImage() {
    function init() {
        var inputFile = document.getElementById('txtImagena');
        inputFile.addEventListener('change', mostrarImagen, false);
    }
    function mostrarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function (event) {
            var img = document.getElementById('img');
            img.src = event.target.result;
        }
        reader.readAsDataURL(file);
    }
    window.addEventListener('load', init, false);
}

function viewImageEdit() {
    function init() {
        var inputFile = document.getElementById('txtImagene');
        inputFile.addEventListener('change', mostrarImagen, false);
    }
    function mostrarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function (event) {
            var img = document.getElementById('imge');
            img.src = event.target.result;
        }
        reader.readAsDataURL(file);
    }
    window.addEventListener('load', init, false);
}


function decimalNumber() {
    // Solo permite ingresar numeros con punto o coma
    $('.decimales').on('input', function () {
        this.value = this.value.replace(/[^0-9,.]/g, '').replace(/,/g, '.');
    });

}