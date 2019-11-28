<?php

// Realizando conexão com o banco de dados.

$host = "localhost";
$user = "root";
$pass = "usbw";
$database = "db_login";

$conn = mysqli_connect ($host, $user, $pass, $database);
$conn->set_charset('utf8'); //Para não ter problemas com acentos no Banco de Dados;

if (mysqli_connect_error()): // Caso haja algum erro ao tentar conectar com o Banco, seja emitida uma mensagem.

    echo "The connexion failed: ".mysqli_connect_error();

endif;