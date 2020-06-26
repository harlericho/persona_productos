<?php include_once "../data/crudProducts.php";

include_once "../data/crudEntry.php";
session_start();
foreach (CrudEntry::_sessionUser($_SESSION['user']) as $key => $value) {
    $iduser = $value['PER_ID'];
}
$cargarImagen = ($_FILES['txtImagena']['tmp_name']);
$mostrarImagen = fopen($cargarImagen, 'rb');
$datos = array(
    'idperso' => $iduser,
    'names' => $_POST['txtNamesa'],
    'price' => $_POST['txtPricea'],
    'quantity' => $_POST['txtQuantitya'],
    'imagen' => $mostrarImagen,
    'status' => 'A',
);
if (CrudProducts::_addProducts($datos)) {
    echo 1;
}
