<?php

include_once 'connexion.php';

if (isset($_POST['btn-atualizar-user'])): // Se existe o índice btn-cadastrar no post é porque alguém clicou //

    $id = mysqli_escape_string($conn, $_POST['id']);
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $usuario = mysqli_escape_string($conn, $_POST['usuario']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    $sql = "UPDATE user_register SET name = '$nome', email = '$usuario' WHERE cdUser = '$id' ";
    
    if($conn->query($sql)):
        header ('Location: adm.php?sucesso');
    else:
        header ('Location: adm.php?erro');
    
    endif;

elseif (isset($_POST['btn-atualizar-customer'])):

    $id = mysqli_escape_string($conn, $_POST['id']);
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $usuario = mysqli_escape_string($conn, $_POST['usuario']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    $sql = "UPDATE customer_register SET name = '$nome', email = '$usuario' WHERE cdCustomer = '$id' ";
    
    if($conn->query($sql)):
        header ('Location: adm.php?sucesso');
    else:
        header ('Location: adm.php?erro');
    
    endif;


endif;