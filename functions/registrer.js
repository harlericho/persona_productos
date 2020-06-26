function register() {
    if (validations_1() == true) {
        let valor = $("#formRegister").serialize();
        save(valor);
    }

}

function save(datos) {
    $.ajax({
        type: "POST",
        url: "../controllers/control_registrer.php",
        data: datos,
        cache: false,
        success: function (r) {
            if (r) {
                alertify.set("notifier", "position", "top-center");
                alertify.success("Save data");
                $("#formRegister")[0].reset();
                $("#names").focus();
            }
        },
    });
}


function validations_1() {
    var names = $("#names").val();
    var dni = $("#dni").val();
    var email = $("#email").val();
    var pass = $("#password").val();
    if ($.trim(names) == "") {
        alertify.set("notifier", "position", "top-center");
        alertify.error("Enter your names");
        $("#names").focus();
        return false;
    } else if ($.trim(dni) == "") {
        alertify.set("notifier", "position", "top-center");
        alertify.error("Enter your dni");
        $("#dni").focus();
        return false;
    } else if ($.trim(email) == "") {
        alertify.set("notifier", "position", "top-center");
        alertify.error("Enter your email");
        $("#email").focus();
        return false;
    } else if ($.trim(pass) == "") {
        alertify.set("notifier", "position", "top-center");
        alertify.error("Enter your password");
        $("#password").focus();
        return false;
    } else if ($.trim(email) != "") {
        if (validationsEmail(email) == true) {
            return true;
        } else {
            return false;
        }
    }

}






function validationsEmail(valor) {
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (emailRegex.test(valor)) {
        return true;
    } else {
        alertify.set("notifier", "position", "top-center");
        alertify.warning("Email format is not supported: xyz@dominio.com");
        $('#email').focus();
        return false;
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