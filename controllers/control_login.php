<?php
session_start();
include_once "../data/crudEntry.php";
include_once "../data/sha.php";


$datos = array(
    'email' => $_POST['emaillogin'],
    'pass' => SED::encryption($_POST['passwordlogin']),
);

if (!CrudEntry::_startData($datos)) {
    echo 2;
} else {
    $_SESSION['user'] = $_POST['emaillogin'];
    echo 1;
}
