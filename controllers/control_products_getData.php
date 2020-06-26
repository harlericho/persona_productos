<?php
include_once "../data/crudProducts.php";
foreach (CrudProducts::_getDataId($_POST['id']) as $key => $value) {
    $datos = array(
        'idpro' => $value['PRO_ID'],
        'names' => $value['PRO_NAMES'],
        'price' => $value['PRO_PRICE'],
        'quantity' => $value['PRO_QUANTITY'],
        'image' => base64_encode($value['PRO_IMAGE']),
    );
}
echo json_encode($datos);
