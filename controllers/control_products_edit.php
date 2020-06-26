<?php
include_once "../data/crudProducts.php";


if (($_FILES['txtImagene']['name'] == null))  {
    $datos = array(
        'names' => $_POST['txtNamese'],
        'price' => $_POST['txtPricee'],
        'quantity' => $_POST['txtQuantitye'],
        'id' => $_POST['txtide'],
    );
    echo CrudProducts::_editProductsOutImage($datos);
}else{
    $cargarImagen = ($_FILES['txtImagene']['tmp_name']);
    $mostrarImagen = fopen($cargarImagen, 'rb');
    $datos= array(
        'names' => $_POST['txtNamese'],
        'price' => $_POST['txtPricee'],
        'quantity' => $_POST['txtQuantitye'],
        'imagen' => $mostrarImagen,
        'id' => $_POST['txtide'],
    );
    echo CrudProducts::_editProductsImage($datos);
}
