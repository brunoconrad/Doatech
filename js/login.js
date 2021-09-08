
    function login() {
        var login = $("#inputEmail").val();
        if (login == "") {
            $("#inputEmail").css("border", "solid fuchsia").focus();
            return false;
        }
    }

    function senha() {
        var senha = $("#inputSenha").val();
        if (senha == "") {
            $("#iptsenha").css("border", "solid fuchsia").focus();
            return false;
        }
    }
