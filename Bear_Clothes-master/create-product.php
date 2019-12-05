<?php

include_once "connexion.php";

?>

<meta charset="UTF-8">

<?php

if (isset($_POST['btn-create-product'])):

    $name = mysqli_escape_string($conn, $_POST['name_product']);

    $img = md5($_FILES['img_product']['name'] . rand(0,9999)) . '.jpg';
    move_uploaded_file ($_FILES['img_product']['tmp_name'],"./img/products/{$img}");

    $link = mysqli_escape_string($conn, $_POST['link_product']);
    $description = mysqli_escape_string($conn, $_POST['description_product']);
    $value = mysqli_escape_string($conn, $_POST['value_product']);
    
    $sql = "INSERT INTO bear_produtos (nome, img, link, descricao, preco) VALUES ('$name', 'img/products/$img', '$link', '$description', '$value');";

    if ($conn->query($sql)):

        echo  "<script>alert('Produto cadastrado com Sucesso! :)');</script>";
        echo  "<script>window.location='adm.php';</script>";

    else:

        echo  "<script>alert('Hum... Ocorreu algum erro ao cadastrar o produto! :(');</script>";
        echo  "<script>window.location='adm.php';</script>";

    endif;

else:

endif;