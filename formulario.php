<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Autenticação de Usuário</h1>
    <form action="formulario.php" method="post">
        
        <label for="login">Login:</label>
        <input type="text" name="login" id="login">

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Enviar">

    </form>
    <?php

    if(isset($_GET['acao'])){
        if($_GET['acao'] == 'sair'){
            session_destroy();
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(isset($_POST["login"]) && isset($_POST["senha"])){
           
            define("LOGIN", "raqueldavila");
            define("SENHA", "12345");

            $login = $_POST["login"];
            $senha = $_POST["senha"];

            if($login == LOGIN && $senha == SENHA){
                $_SESSION["USUÁRIO"] = "Raquel Davila";
                header ("Location: index.php");
            }else{
                echo "Login ou senha está incorreto!";
            }
        }

    }
    ?>
</body>
</html>