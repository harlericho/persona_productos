<?php include_once "../templeates_login_register/header.php" ?>
<script src="../functions/login.js" type="text/javascript"></script>

<?php include_once "../templeates_login_register/nav.php" ?>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form id="formLogin">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>
                                <div class="col-md-6">
                                    <input type="email" id="emaillogin" class="form-control" name="emaillogin" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="passwordlogin" class="form-control" name="passwordlogin" required>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <a type="submit" href="#" class="btn btn-primary" onclick="start()">
                                    Start
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