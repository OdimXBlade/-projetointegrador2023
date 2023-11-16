<?php
require_once "conexao.php";
require "funcoes.php";
session_start();


if($_SESSION['usuario'] == null){
    header("location:index.php");
}
$codigo = $_SESSION['id'];

$sql = $banco->query("select userinfo.fk_objetivo from userinfo where fk_usuario = $codigo");
    $detalhes = $sql->fetch_object();
    $objetivo = $detalhes->fk_objetivo;

    $sql = $banco->query("select refeicoes.refeicao, refeicoes.ordem, objetiv.objetivo from refeicoes join objetiv on refeicoes.fk_objetivo_refeicao = objetiv.id_objetivo where fk_objetivo_refeicao = $objetivo");

    ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refeições diárias</title>
    <link rel="stylesheet" href="./style/refeicoes.css">
</head>
<body>
<div id="containerprincipal">
        <img id="imagemlogo" src="imgs/LOGO 2.png" alt="">
        <h1>Refeições diárias</h1>
        
        <?php
    while($refeicoes = $sql->fetch_object()){
        echo "<h2>Refeição $refeicoes->ordem: $refeicoes->refeicao </h2>
        
    ";
    };
    ?>
 <a href="menu.php">Voltar</a>
</div>
<script src="javascript/javascript.js"></script>
</body>
</html>