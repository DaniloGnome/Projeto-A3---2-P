<?php
session_start();
include ('validarlogin.php');




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
    <center>
        <h1>Pesquisar CNPJ</h1>
        <form id="pesquisarcnpj" action="autenticacnpj.php" method="POST">
            CNPJ:
            <input type ="text" name="cnpj" require><br>
            <input type="submit" name="pesquisar" value="Pesquisar">
        </form>
        <br>
        <br>
        <a href="principal.php">Voltar</a>
    </center>
</body>
</html>