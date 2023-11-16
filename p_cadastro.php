<?php
    require_once "conexao.php";
    require "funcoes.php";
    @$usuario = $_POST["usuario"];
    @$senha = $_POST["senha"];
    @$confirma = $_POST["confirma"];
    if($usuario == null || $senha == null || $confirma == null){
        
        require "cadastro.php";
        echo msg_aviso();
    }else{
        if($senha != $confirma){
            require "cadastro.php";
            echo msg_aviso();
            echo "Senhas diferentes";
        }else{
            $senha = gerarhash($senha);
            $sql = $banco->query("insert into users (usuario,senha) values ('$usuario','$senha')");
            echo "Usuario cadastrado com sucesso";
            require ("index.php");
        }
        
}
?>