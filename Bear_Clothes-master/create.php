<?php

include_once ('connexion.php');

?>

<meta charset="UTF-8">

<?php

if (isset($_POST['btn-register'])):

    $name = mysqli_escape_string($conn, $_POST['name']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $pass = mysqli_escape_string($conn, $_POST['pass']);

    $pass_encrip = hash('sha512', $pass);

    $address = mysqli_escape_string($conn, $_POST['address']);
    $number = mysqli_escape_string($conn, $_POST['number']);
    $complement = mysqli_escape_string($conn, $_POST['complement']); 
    $city = mysqli_escape_string($conn, $_POST['city']);
    $state = mysqli_escape_string($conn, $_POST['state']);
    $zipcode = mysqli_escape_string($conn, $_POST['zipcode']); 

    $sql = "INSERT INTO customer_register (name, email, pass, address, number, complement, city, state, zipcode) 
            VALUES ('$name', '$email', '$pass_encrip', '$address', '$number', '$complement', '$city', '$state', '$zipcode')";    

    if ($conn->query($sql)):

        echo  "<script>alert('Usuário cadastrado com Sucesso! :)');</script>";
        echo  "<script>window.location='login.php';</script>";
        //header ('Location: login.php');

    else:

        echo  "<script>alert('Hum... Ocorreu algum erro ao cadastrar o usuário! :(');</script>";
        echo  "<script>window.location='index.php';</script>";
        //header ('Location: index.php?erro');

    endif;

elseif (isset($_POST['btn-user-register'])): // Se o botão de cadastro da página de colaborador existir, é porque fou clicado.

    $name = mysqli_escape_string($conn, $_POST['user_name']);
    $email = mysqli_escape_string($conn, $_POST['user_email']);
    $pass = mysqli_escape_string($conn, $_POST['user_pass']);

    $pass_encrip = hash('sha512', $pass);

    $address = mysqli_escape_string($conn, $_POST['user_address']);
    $number = mysqli_escape_string($conn, $_POST['user_number']);
    $complement = mysqli_escape_string($conn, $_POST['user_complement']); 
    $city = mysqli_escape_string($conn, $_POST['user_city']);
    $state = mysqli_escape_string($conn, $_POST['user_state']);
    $zipcode = mysqli_escape_string($conn, $_POST['user_zipcode']); 

    $sql = "INSERT INTO user_register (name, email, pass, address, number, complement, city, state, zipcode) 
            VALUES ('$name', '$email', '$pass_encrip', '$address', '$number', '$complement', '$city', '$state', '$zipcode')";    

    if ($conn->query($sql)):

        echo  "<script>alert('Colaborador cadastrado com Sucesso! :)');</script>";
        echo  "<script>window.location='login.php';</script>";
        //header ('Location: login.php');

    else:

        echo  "<script>alert('Hum... Ocorreu algum erro ao cadastrar o colaborador! :(');</script>";
        echo  "<script>window.location='index.php';</script>";
        //header ('Location: index.php?erro');

    endif;
   

endif;
