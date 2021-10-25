<?php
session_start();

$usuarios = explode(";", file("../run/autenticacao.txt")[0]);
$postData = filter_var_array($_POST, FILTER_SANITIZE_STRIPPED);

foreach ($usuarios as $usuario) {
    list($usuario, $senha, $nome) = explode(',', $usuario);

    if ($usuario != $postData['usuario']) {
        continue;
    }

    if ($senha == md5($postData["senha"])) {
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $nome;
        header('Location: ../index.php');
        exit();
    }
}

$_SESSION['erro'] = true;
header('Location: ../login.php');
