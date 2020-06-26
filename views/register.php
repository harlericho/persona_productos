<?php include_once "../templeates_login_register/header.php" ?>
<script src="../functions/registrer.js" type="text/javascript"></script>

<?php include_once "../templeates_login_register/nav.php" ?>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form id="formRegister">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Names</label>
                                <div class="col-md-6">
                                    <input type="text" id="names" class="form-control" name="names" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Dni</label>
                                <div class="col-md-6">
                                    <input type="text" id="dni" class="form-control" name="dni" maxlength="10"
                                        onKeyPress="return soloNumeros(event)" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <a type="submit" href="#" class="btn btn-dark" onclick="register()">
                                    To register
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
</body>

</html>

<script type="text/javascript">
// Solo permite ingresar numeros.
function soloNumeros(e) {
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}
</script>