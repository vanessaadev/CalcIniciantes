<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<?php
// HEADER
    include('layout/header.php');
    
    require_once('../../../config.php'); // A_S Conecta ao Moodle
    require_login(); // A_S Somente usuários logados no Moodle podem acessar
    global $CFG; // A_S Utiliza as configurações globais do config.php

    // A_S Reporta os erros
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // A_S Pega a sessão do Moodle
    $NomeUsuario = $_SESSION['USER']->firstname;
?>

<!-- Para colocar no inicil dos topicos para evirta de aluno ver o curso sem esta logado. -->