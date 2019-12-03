<?php

include_once "connexion.php";

if (isset($_POST['btn-update-product'])):

    $name = mysqli_escape_string($conn, $_POST['name_product']);
    $img = mysqli_escape_string($conn, $_POST['img_product']);
    $link = mysqli_escape_string($conn, $_POST['link_product']);
    $description = mysqli_escape_string($conn, $_POST['description_product']);
    $value = mysqli_escape_string($conn, $_POST['value_product']);
    $id = mysqli_escape_string($conn, $_POST['id']);

    $sql = "UPDATE bear_produtos SET nome = '$name', img = '$img', link = '$link', descricao = '$description', preco = '$value' WHERE id = '$id';";

    if ($conn->query($sql)):

        echo  "<script>alert('Produto atualizado com Sucesso! :)');</script>";
        echo  "<script>window.location='adm.php';</script>";

    else:

        echo  "<script>alert('Hum... Ocorreu algum erro ao atualizar o produto! :(');</script>";
        echo  "<script>window.location='adm.php';</script>";

    endif;

endif;