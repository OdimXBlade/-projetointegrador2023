<?php
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
    <link rel="stylesheet" href="./style/novoprojeto.css">
    <title>Novo Projeto</title>
</head>
<body>

<div id="principal">

    <img id="imagemlogo" src="imgs/LOGO 2.png" alt="logo fit life">

<h1 class="h1responsivo" >Iniciar novo projeto</h1>

<main>
<div class="formulario">
<form method="get" action="projeto.php">
    
    <h1>Sexo</h1>
    <input class="seletor" type= "radio" name="genero" value="1"><p class="texto responsialt">Masculino</p>
    <input class="seletor" type= "radio" name="genero" value="2"><p class="texto responsialt">Feminino</p>
    <h1>Peso</h1>
    <input id="op1" type = "number" name = "peso" placeholder = "Digite seu Peso">
    <h1>Altura</h1>
    <input class="caixaresponsiv" type= "number" name = "altura" placeholder = "Digite sua Altura em Centimetros">
    <h1>Idade</h1>
    <input id="op1" type= "number" name = "idade" placeholder = "Digite sua Idade">
    
    <h1>Objetivo</h1> 
    <br></br>
    <input class="seletor" type= "radio" name="objetivo" value="1"><p class="texto texto1 ">Ganho de Massa</p>
    <input class="seletor" type= "radio" name="objetivo" value="2"><p class="texto ">Perder Peso</p>
    
    <input class="enviar" type= "submit" value = "Enviar">
    

</form>
</div>

<br>
<br>
<br>


<a href="menu.php">Voltar</a>

</div>

    <script src="./javascript/javascript.js"></script>
</body>
</html>