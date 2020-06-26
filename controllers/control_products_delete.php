<?php include_once "../data/crudProducts.php";

$id=$_POST['idproducto'];


echo CrudProducts::_deleteProducts($id);