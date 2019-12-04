<?php

include_once "connexion.php";

if (isset($_POST['btn-delete-product'])):

    $id = mysqli_escape_string($conn, $_POST['id']);
    
    $sql = "DELETE FROM bear_produtos WHERE id='$id' ";

    if ($conn->query($sql)):

        echo  "<script>alert('Produto deletado com Sucesso! :)');</script>";
        echo  "<script>window.location='adm.php';</script>";

    else:

        echo  "<script>alert('Hum... Ocorreu algum erro ao deletar o produto! :(');</script>";
        echo  "<script>window.location='adm.php';</script>";

    endif;

endif;