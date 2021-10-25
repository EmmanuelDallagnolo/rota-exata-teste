<?php
session_start();

$_SESSION['logado'] = false;
$_SESSION['erro'] = false;

header("Location: ../login.php");
