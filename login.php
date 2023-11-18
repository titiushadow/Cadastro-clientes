<?php 
    include_once './includes/header.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email == "admin@gmail.com" && $password == "123123") {
            header('Location: ../../../Crud/index.php');
            exit(); 
        } else {
            echo "Email ou Senha invalido! Tente novamente.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body ng-app="mainModule" ng-controller="mainController">
    <div id="login-page" class="row">
        <div class="col s12 z-depth-6 card-panel">
            <h1 class="center-align">Sistema</h1>
            <form class="login-form" method="post" action="">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input type="email" name="email" id="email" required placeholder="Email">
                        <label for="email"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password" name="password" type="password" required placeholder="Senha">
                        <label for="password"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light col s12">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

