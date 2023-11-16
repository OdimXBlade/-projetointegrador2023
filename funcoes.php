<html>
    <head>
        <link rel="stylesheet" href="style/style.css">
</head>
<?php
   
    function msg_aviso(){
        ECHO "<div class='atencao'><h3>Existem campos em branco, preencha todos os campos para continuar!</h3></div>";
        
        
    }
    function gerarhash($senha){
        $hash = password_hash($senha,PASSWORD_DEFAULT);
        return $hash;
    }
    function testarhash($senha,$hash){
        $ok = password_verify($senha,$hash);
        return $ok;
    }
    
    //calcular IMC
    function calcularimc($peso,$altura){
        
        $indiceimc = $peso / ($altura ** 2);
        $indiceimc = number_format($indiceimc,2);
        return $indiceimc;
    }//fim
    function voltar(){
        echo "<a href= menu.php><p>Voltar<p></a> ";
    }
    
?>