
function start() {
    if (validations_1() == true) {
        let valor = $("#formLogin").serialize();
        $.ajax({
            type: "POST",
            url: "../controllers/control_login.php",
            data: valor,
            cache: false,
            success: function (r) {
                if (r == 2) {
                    alertify.set("notifier", "position", "top-center");
                    alertify.warning("Email or password do not exist in the database!");
                    $("#emaillogin").focus();
                } else {
                    alertify.set("notifier", "position", "top-center");
                    alertify.success("Welcome User");
                    setTimeout("redirectMain()", 1000);
                    //$("#formLogin")[0].reset();
                    //$("#emaillogin").focus();
                }
            }
        });
    }

}

function validations_1() {
    var email = $("#emaillogin").val();
    var pass = $("#passwordlogin").val();
    if ($.trim(email) == "") {
        alertify.set("notifier", "position", "top-center");
        alertify.error("Enter your email");
        $("#emaillogin").focus();
        return false;
    } else if ($.trim(pass) == "") {
        alertify.set("notifier", "position", "top-center");
        alertify.error("Enter your password");
        $("#passwordlogin").focus();
        return false;
    } else if ($.trim(email) != "") {
        if (validationsEmail_1(email) == true) {
            return true;
        } else {
            return false;
        }
    }

}

function validationsEmail_1(valor) {
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (emailRegex.test(valor)) {
        return true;
    } else {
        alertify.set("notifier", "position", "top-center");
        alertify.warning("Email format is not supported: xyz@dominio.com");
        $('#emaillogin').focus();
        return false;
    }
}

function redirectMain() {
    $(location).attr('href', './main.php');
}