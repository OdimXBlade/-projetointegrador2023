<?php
require_once "conexao.php";
require "funcoes.php";
session_start();
if($_SESSION['usuario'] == null){
    header("location:index.php");
}
@$valor = $_GET['valor'];

@$objetivo = $_GET["objetiv"];
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
    <link rel="stylesheet" href="./style/exercicios.css">
</head>
<body>
    <div id="containerprincipal">
        <img id="imagemlogo" src="imgs/LOGO 2.png" alt="">
        
        

    
<?php
if($objetivo == null){
    $sql = $banco->query("select exercicios.exercicios, exercicios.dia, nivel.nivel_ex from exercicios JOIN nivel on exercicios.fk_nivel_exerc = nivel.id_nivel where fk_nivel_exerc = 4");
while ($detalhes = $sql->fetch_object()){
    echo "<h2>Dia $detalhes->dia: $detalhes->exercicios </h2>
        <hr>
    ";}
}else{


$sql = $banco->query("select exercicios.exercicios, exercicios.dia, objetiv.objetivo, nivel.nivel_ex from exercicios join objetiv on exercicios.fk_objetivo_exercicio = objetiv.id_objetivo JOIN nivel on exercicios.fk_nivel_exerc = nivel.id_nivel where fk_nivel_exerc = $valor && fk_objetivo_exercicio = $objetivo");
while ($detalhes = $sql->fetch_object()){
    echo "<h2>Dia $detalhes->dia: $detalhes->exercicios </h2>
        
        <hr>
    ";
};
}

?>
<h1>Finalizando o ciclo recomeçe do primeiro dia</h1>
<a href="exercicios_form.php">Voltar</a>
</div>
    <script src="./javascript/javascript.js"></script>
</body>
</html>

