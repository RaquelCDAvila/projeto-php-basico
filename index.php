<?php
session_start();
if(!isset($_SESSION["USUÁRIO"])){
    //direcionar usuário par login
    header ("Location: formulario.php");
}

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
    <h1>Seja Bem-vindo <?php echo ($_SESSION["USUÁRIO"])?>!</h1>
    <p>
    <a ref="formulario.php?acao=sair">Sair</a>
    </p>
</body>
</html>