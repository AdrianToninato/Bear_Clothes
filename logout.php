<?php 

// Iniciando sessão.
session_start();

// Limpando sessão.
session_unset();

// Destruindo sessão.
session_destroy();

// Redirecionando usuário/cliente para o login.
header ('Location: index.php');