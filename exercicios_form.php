<?php
    require_once "conexao.php";
    require_once "funcoes.php";
    
    session_start();
    if($_SESSION['usuario'] == null){
        header("location:index.php");
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
    <link rel="stylesheet" href="./style/perderganhar.css">
</head>
<body>
    <div id="containerprincipal">
        <img id="imagemlogo" src="imgs/LOGO 2.png" alt="">
        <h1 class="titulo">Exercicios:
        <h1>Perca de Peso</h1>
        <a href="exercicios.php?valor=1&objetiv=2"><h2>Iniciante</h2></a>
        <a href="exercicios.php?valor=2&objetiv=2"><h2>Intermediário</h2></a>
        <a href="exercicios.php?valor=3&objetiv=2"><h2>Avançado</h2></a>
        <hr>
        <h1>Ganho de Massa</h1>
        <a href="exercicios.php?valor=1&objetiv=1"><h2>Iniciante</h2></a>
        <a href="exercicios.php?valor=2&objetiv=1"><h2>Intermediário</h2></a>
        <a href="exercicios.php?valor=3&objetiv=1"><h2>Avançado</h2></a>
        <hr>
        <a href="exercicios.php" class="qualidade">Saúde e qualidade de vida</a>
        <a class="voltar" href="menu.php">Voltar</a>

        

    </div>
    <script src="./javascript/javascript.js"></script>
</body>
</html>