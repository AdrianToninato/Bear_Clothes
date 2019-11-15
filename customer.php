<?php

// Realizando conexão.
include_once ('connexion.php');

// Iniciando sessão.
session_start();

if (!isset($_SESSION['logado'])):

    header ('Location: login.php');

endif;

// Dados do usuário.
$id = $_SESSION['id_customer'];
$permission = $_SESSION['acesso'];
$sql = "SELECT * FROM tb_customer WHERE idCustomer = '$id' ";
$result = mysqli_query ($conn, $sql);
$datas = mysqli_fetch_array ($result);

mysqli_close($conn);

?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página do Cliente</title>
</head>
<body>
    <h1>Olá, <?php 

                if ($_SESSION['acesso'] == 0):

                    echo "administrador(a) ". $datas['name']; 

                else:

                    echo "cliente ". $datas['name'];

                endif;
            
            ?>
    !</h1>
    <a href="logout.php">Sair</a>
</body>
</html>