<?php
session_start();
$file = fopen('../run/autenticacao.txt', 'a');

$postData = filter_var_array($_POST, FILTER_SANITIZE_STRIPPED);

$_SESSION['logado'] = true;
$_SESSION['nome'] = $postData['nome'];

fwrite($file, implode(',', [
    $postData['email'],
    md5($postData['senha']),
    $postData['nome']
]) . ';');

fclose($file);
header('Location: ../index.php');
