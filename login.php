<?php
session_start();
    include('configuracao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
    }

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);


$query = "select USR_EMAIL, USR_SENHA FROM usuario WHERE USR_EMAIL = '{$usuario}' and USR_SENHA = '{$senha}'";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row ==1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
} else{
    header('Location: index.php');
    exit();
}
