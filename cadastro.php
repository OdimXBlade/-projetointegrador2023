<?php
 require_once "conexao.php";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/cadastro.css">
</head>
<body>
    <div id="containerprincipal">
        <img id="imagemlogo" src="imgs/LOGO 2.png" alt="">
            <h1>
                Fazer novo cadastro
            </h1>
            
            <form method="post" action="p_cadastro.php">

                <h2>Digite seu usuario</h2>
                <input id="respons" type = "text" name = "usuario" placeholder = "Digite seu Usuario">
                <h2>Digite sua senha</h2>
                <input id="respons"  type= "password" name = "senha" placeholder = "Digite sua senha">
                <h2>Confirme sua senha</h2>
                <input id="respons" type= "password" name = "confirma" placeholder = "Repita sua senha">
                <br>
                <input class="bt_cadastrar"  type= "submit" value = "Cadastrar">
                
            
            </form>

            <a href="index.php">Voltar</a>
                
            </div>
        </main>
        
    </body>

</html>