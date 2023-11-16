<?php
    
    require_once "conexao.php";
    session_start();
    require "funcoes.php";
    $genero = $_GET["genero"];
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];
    $idade = $_GET["idade"];
    $objetivo = $_GET["objetivo"];

    $user = $_SESSION['usuario'];
    $id = $_SESSION['id'];

    
if($_SESSION['usuario'] == null){
    header("location:index.php");
}
    
    $sql = $banco->query("select users.fk_id_userinfo from users where id = $id");
    $detalhes = $sql->fetch_object();
    @$fk_id = $detalhes->fk_id_userinfo;
    

    

    

    if($peso == null || $altura == null || $idade == null || $objetivo == null || $genero == null){
        echo msg_aviso();
    }else 
    if($fk_id != null){
        $sql = $banco->query("update userinfo set peso = $peso, altura = $altura, idade = $idade, fk_genero = $genero, fk_objetivo = $objetivo where fk_usuario = $id");
        header('location:menu.php');
    }
    else{

    $sql = $banco->query("insert into userinfo (peso, altura, idade, fk_genero, fk_objetivo, fk_usuario) values ($peso, $altura, $idade, $genero, $objetivo, $id)");
    $sql = $banco->query("select userinfo.id_info from userinfo where fk_usuario = $id");
    $detalhes = $sql->fetch_object();
    $fk_id = $detalhes->id_info;
    $sql = $banco->query("update users set fk_id_userinfo = $fk_id where id = $id");

    header('location:menu.php');
    }

    
    
?>