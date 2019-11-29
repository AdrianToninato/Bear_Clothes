<?php 

// Iniciando sessão.
session_start();

// Limpando sessão.
session_unset();

// Destruindo sessão.
session_destroy();

header ('Location: index.php');