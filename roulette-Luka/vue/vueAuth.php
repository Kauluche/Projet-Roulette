<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Roulette-Luka</title>
        <link rel="stylesheet" type="text/css" href="css/connexion.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    </head>
    <body>
        <script>
            function togglePasswordVisibility() {
            var passwordField = document.getElementById("passwordField");
            var togglePassword = document.getElementById("eye");

            // Change le type du champ entre "password" et "text"
            if (passwordField.type === "password") {
                passwordField.type = "text";
                // Change la classe pour l'œil ouvert
                togglePassword.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
            } else {
                passwordField.type = "password";
                // Change la classe pour l'œil fermé
                togglePassword.classList.replace("bi-eye-fill", "bi-eye-slash-fill");
            }
        }

        </script>

        <form id="cadreConnexion" method="POST">
            <h1 id="titreConnexion"> Connexion </h1>
            <div id="infoConnexion">
                <div id="id">
                    <h2 id="titreID"> Identifiant </h2>
                    <input name="valueID"></input>
                </div>
                <div id="mdp">
                    <h2 id="titreMDP"> Mot de passe </h2>
                    <input type="password" name="valueMDP" id='passwordField'></input>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i id="eye" class="bi bi-eye-slash-fill"></i>
                    </span>
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6Ld7B08pAAAAANGtGkIF_3q60KaGUq0XZXGhq7ME"></div>
            <br/>
            <input type="submit" name="login" value="Se connecter">
        </form>         
