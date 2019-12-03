<?php 

include_once 'connexion.php';

if (isset($_POST['btn-deletar-customer'])): // Se existe o índice btn-delete-customer no post é porque alguém clicou //

    $id = mysqli_escape_string($conn, $_POST['idCustomer']);

    $sql = "DELETE FROM customer_register WHERE cdCustomer = '$id'";
    
    if($conn->query($sql)):

        //echo  "<script>alert('Cliente deletado com Sucesso! :)');</script>";
        header ('Location: adm.php?sucesso');

    else:

        //echo  "<script>alert('Hum... Houve um erro ao tentar deletar o cliente! :(');</script>";
        header ('Location: adm.php?erro');
    
    endif;

elseif (isset($_POST['btn-deletar-user'])):

    $id = mysqli_escape_string($conn, $_POST['idUser']);

    $sql = "DELETE FROM user_register WHERE cdUser = '$id'";
    
    if($conn->query($sql)):

        //echo  "<script>alert('Usuário deletado com Sucesso! :)');</script>";
        header ('Location: adm.php?sucesso');

    else:
        
        //echo  "<script>alert('Hum... Houve um erro ao tentar deletar o usuário! :(');</script>";
        header ('Location: adm.php?erro');
    
    endif;

endif;