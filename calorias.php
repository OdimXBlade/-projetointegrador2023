

<?php
require_once "conexao.php";
require "funcoes.php";
session_start();
if($_SESSION['usuario'] == null){
    header("location:index.php");
}

@$codigo = $_SESSION ["id"];
    //Coletar dados do usuario armazenados no servidor
    $sql = $banco->query("select userinfo.altura, userinfo.idade, userinfo.peso, userinfo.data_projeto, objetiv.objetivo, genero.sexo, users.usuario from userinfo join objetiv on userinfo.fk_objetivo = objetiv.id_objetivo JOIN genero on userinfo.fk_genero = genero.id_genero join users on userinfo.fk_usuario = users.id where fk_usuario = $codigo");
    $detalhes = $sql->fetch_object();

    $genero = $detalhes->sexo;
    
    $objectivo = $detalhes->objetivo;
    
    $peso = $detalhes->peso;
    
    $idade = $detalhes->idade;
    $altura = $detalhes->altura;
    

    if($objectivo == "Perder Peso"){
        $proteina = "40";
        $carboidrato = "40";
        $gordura = "20";
        if($genero == "Feminino"){
           $tmb = 665 + (9.56 * $peso) + (1.85 * $altura) - (4.68 * $idade);
           
           $tmb = ($tmb * 1.55) - 500;
           
           $tmb = number_format($tmb, 2, '.', '');
           
           
        }else{
            $tmb = 66.47 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade);
           
           $tmb = ($tmb * 1.55) - 500;
           
           $tmb = number_format($tmb, 2, '.', '');
           
        }
    }else{//ganhar peso
        $proteina = "45";
        $carboidrato = "45";
        $gordura = "10";
        if($genero == "Feminino"){
            $tmb = 665 + (9.56 * $peso) + (1.85 * $altura) - (4.68 * $idade);
            
            $tmb = ($tmb * 1.55) + 500;
            
            $tmb = number_format($tmb, 2, '.', '');
            
            
         }else{
             $tmb = 66.47 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade);
            
            $tmb = ($tmb * 1.55) + 500;
            
            $tmb = number_format($tmb, 2, '.', '');
            
         }
    }


?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de calorias diárias</title>
    <link rel="stylesheet" href="./style/consumodecalorias.css">
</head>
<body>
    <div id="containerprincipal">
        <img id="imagemlogo" src="imgs/LOGO 2.png" alt="">
        <h1>Consumo de calorias diário</h1>
        
        <?php
        echo"
        <h2>De acordo com seu objetivo e 
            seu indice de massa atual, sua quantidade calorias indicada é de: $tmb 
            calorias diárias
        <h2>Divididas em $carboidrato% de carboidratos <br> $proteina% de proteínas e $gordura% de gorduras</h2>";
        ?>
        
        <a href="menu.php">Voltar</a>

    </div>
    <script src="javascript/javascript.js"></script>
</body>
</html>