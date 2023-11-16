<?php
    require_once "conexao.php";
    require_once "funcoes.php";
    
    session_start();
    
if($_SESSION['usuario'] == null){
    header("location:index.php");
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Atual</title>
    <link rel="stylesheet" href="./style/atual.css">
</head>
    <?php

    @$codigo = $_SESSION ["id"];
    //Coletar dados do usuario armazenados no servidor
    $sql = $banco->query("select userinfo.id_info, userinfo.altura, userinfo.idade, userinfo.peso, userinfo.data_projeto, objetiv.objetivo, genero.sexo, users.usuario from userinfo join objetiv on userinfo.fk_objetivo = objetiv.id_objetivo JOIN genero on userinfo.fk_genero = genero.id_genero join users on userinfo.fk_usuario = users.id where fk_usuario = $codigo");
    $detalhes = $sql->fetch_object();
     
        $user_altura = $detalhes->altura;
        $user_altura = $user_altura / 100;
        
        $datadoprojeto = $detalhes->data_projeto;
        
    $imc = calcularimc($detalhes->peso,$user_altura);
    
    //duração do projeto
    $hoje = date('Y/m/d H:i:s'); 
    $a1 = new DateTime($datadoprojeto);
    $b1 = new DateTime($hoje);
    $intervalo = $a1->diff($b1);
    //fim
    echo"
    <div id='containerprincipal'>

    <img id='imagemlogo' src='imgs/LOGO 2.png' alt=''>
    <h1>Projeto atual:</h1>
    <h2>Seu indice de massa corporal é de: $imc</h2>
    <h2>Seu objetivo atual é de: $detalhes->objetivo</h2>
    <h2>O tempo atual de duração do projeto é de: <br> $intervalo->days dias.</h2>
    <h2>Informe seu peso atual:</h2>
    <form method='GET' action='atualizapeso.php'>
            <input id='caixapeso' class='margin-10' type = 'number' name = 'peso' placeholder = 'Digite seu peso atual'>
            <br>
            <input class='enviar' value='Atualizar' type='submit'>
    </form>
    <a href='menu.php'>Voltar</a>

    </div>
<script src='projetoatual.js'></script>
</body>";
    
?>


    
    
