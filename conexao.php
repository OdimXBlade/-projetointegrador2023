<?php
    $banco = new mysqli('localhost','root','','appfit2');
    $banco->query("SET NAMES utf8");// arruma acentos nos nomes dos campos
    $banco->query("SET caracter_set_connection='utf8';"); // arruma acentos na conexao
    $banco->query("SET caracter_set_client='utf8';"); // arruma acentos no front end
    $banco->query("SET caracter_set_results='utf8';"); // resultado da pesquisa no banco
?>