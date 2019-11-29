<?php

// Realizando conexão com o banco de dados.

//Definindo constantes
$host = "localhost";
$user = "root";
$pass = "usbw";
$database = "db_login";

//preparando conexão
$conn = mysqli_connect ($host, $user, $pass, $database);
//correção de caracteres pt-br
$conn->set_charset('utf8');

//mensagem de erro em caso de falha
if (mysqli_connect_error()):

    echo "The connexion failed: ".mysqli_connect_error();

endif;