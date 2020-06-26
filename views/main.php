<?php include_once "../templeates_login_register/header.php" ?>

<?php include_once "../template_index/nav.php" ?>

<?php
foreach (CrudEntry::_sessionUser($_SESSION['user']) as $key => $value) {
    $names = $value['PER_NAMES'];
    $dni = $value['PER_DNI'];
    $email = $value['PER_EMAIL'];
?>
<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Bienvenido:</h1>
                <h2>Sr(a): <?php echo $names; ?></h2>
            </div>
            <div class="card-body">
                Cedula:
                <p><?php echo $dni; ?></p>
            </div>
            <div class="card-body">
                Email:
                <p><?php echo $email; ?></p>
            </div>
        </div>
    </div>
</div>
<?php } ?>