<?php

    require_once "conexao.php";
    require "funcoes.php";
    @$usuario = $_POST["usuario"];
    @$senha = $_POST["senha"];
    if($usuario == null || $senha == null){
        
        require "index.php";
        echo msg_aviso();
    }else{
           
            $sql_logar = $banco->query("select * from users where usuario = '$usuario'");
            $registro = $sql_logar->fetch_object();
            echo "<hr>";

            if($registro == null){
                require "index.php";
                echo "Usuario não encontrado";
            }else{
                if($usuario == $registro->usuario && testarhash($senha,$registro->senha) == true){
                    echo "Usuario logado com sucesso";
                    session_start();

                    $_SESSION ['usuario'] = $registro->usuario;
                    $_SESSION ['senha'] = $registro->senha;
                    //$_SESSION ['nome'] = $registro->nome;
                    $_SESSION ['id'] = $registro->id;
                    header('location:menu.php');
                }
               else{
                
                echo "Senha incorreta";
                require "index.php";
                }
            }    
       }
        
    


?>