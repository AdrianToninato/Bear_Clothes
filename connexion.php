<?php

// Realizando conexão com o banco de dados.

$host = "localhost";
$user = "root";
$pass = "usbw";
$database = "db_login";

$conn = mysqli_connect ($host, $user, $pass, $database);
$conn->set_charset('utf8');

if (mysqli_connect_error()):

    echo "The connexion failed: ".mysqli_connect_error();

endif;