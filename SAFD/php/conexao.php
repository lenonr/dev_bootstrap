<?php

# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

# criando variaveis
$servidor = 'localhost';
$usuario = 'root';
$senha = 'lenonr';
$banco = 'safd';

//tentando realizar conexao
try
{
    # criando variavel para conexao
    $con = mysqli_connect($servidor, $usuario, $senha, $banco);
}
//mostrando erro
catch (PDOException $e)
{
    //mostrando mensagem de erro
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
?>
