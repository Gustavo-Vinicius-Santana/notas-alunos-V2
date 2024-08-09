<?php
    $host_banco = "localhost";
    $usuario_banco = "root";
    $senha_banco = "";
    $banco_de_dados = "bd_notas_alunos_v2";
    $con = mysqli_connect($host_banco, $usuario_banco, $senha_banco, $banco_de_dados);
    if(!$con){
        die("Connection Failed" .mysqli_connect_errno());
    }
?>