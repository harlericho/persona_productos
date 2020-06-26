<?php
include_once "../data/crudEntry.php";
include_once "../data/sha.php";
$datos = array(
    'names' => $_POST['names'],
    'dni' => $_POST['dni'],
    'email' => $_POST['email'],
    'pass' => SED::encryption($_POST['password']),
    'status' => 'A',
);

if (CrudEntry::_registrerData($datos)) {
    echo 1;
}
