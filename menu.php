<?php
    require_once "conexao.php";
    require "funcoes.php";
    session_start();
    if($_SESSION ['usuario'] == null){
        header("location:index.php");
    }
    $id = $_SESSION['id'];
    $sql = $banco->query("select users.fk_id_userinfo from users where id = $id");
    $detalhes = $sql->fetch_object();
    @$fk_id = $detalhes->fk_id_userinfo;
    
    
    if($fk_id == null){
        header("location:novoprojeto_form.php");
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/menu.css">
    <title>Menu</title>
</head>
<body>



<img id="imagemlogo" src="imgs/LOGO 2.png" alt="logo fit life">
<h1>Menu</h1>
<ul>
    <a href="exercicios_form.php"><li>Exercicios</li></a>
    <a href="calorias.php"><li>Alimentação</li></a>
    <a href="tabela_alimentos.php"><li>Tabela Nutricional e Calorica</li></a>
    <a href="projeto_atual_form.php"><li>Projeto atual</li></a>
    <a href="novoprojeto_form.php"><li>Iniciar novo projeto</li></a>
    <a href="refeicoes.php"><li>Refeições diárias</li></a>
    <a href="sobre.html"><li>Sobre</li></a>
</ul>
<a class="sair" href="logout.php">Sair</a>





    <script src="./javascript/javascript.js"></script>
</body>
</html>