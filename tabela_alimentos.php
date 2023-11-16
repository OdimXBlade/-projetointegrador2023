<?php
require_once "conexao.php";
require "funcoes.php";
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
    <link rel="stylesheet" href="./style/tabela_alimentos.css">
</head>
<body>
    <div id="containerprincipal">
        <img id="imagemlogo" src="imgs/LOGO 2.png" alt="">
        
    <h1>Tabela nutricional</h1>
<?php


$sql = $banco->query("select * FROM `tabela_nutricao`");
echo "<table .tabela border='1'>
<colgroup>
<col class='tabela'>
<col class='tabela'>
<col class='tabela'>
<col class='tabela'>
<col class='tabela'>
</colgroup>";
while ($detalhes = $sql->fetch_object()){
    echo "<tr><td>$detalhes->tipo</td> <td>$detalhes->alimento</td> <td>$detalhes->quantidade g</td> <td>$detalhes->calorias Cal</td>  <td>$detalhes->valornutricional g $detalhes->tipo</td> </tr>
        
        <hr>
    ";
};
echo "</table>";


?>

<a href="menu.php">Voltar</a>
</div>
    <script src="./javascript/javascript.js"></script>
</body>
</html>


