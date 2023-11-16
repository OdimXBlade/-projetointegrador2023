<?php
    require_once "conexao.php";
    require_once "funcoes.php";
    
    session_start();
    if($_SESSION['usuario'] == null){
        header("location:index.php");
    }
    $codigo = $_SESSION['id'];

@$novopeso = $_GET["peso"];
    if($novopeso != null ){
        $sql = $banco->query("update userinfo SET peso = $novopeso where fk_usuario = $codigo");
        header("location:projeto_atual_form.php");
    
    }else{
        require_once ("projeto_atual_form.php");
        msg_aviso();
    }
    voltar();
    ?>