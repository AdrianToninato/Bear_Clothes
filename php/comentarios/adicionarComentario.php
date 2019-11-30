<?php
//Adicionando conexão com o banco
include_once ('./conexao.php');

//Capturando valores do form
if (isset($_POST['btn-coment'])){

    //Povoando variáveis para envio ao banco
    $name   = mysqli_escape_string($conn, $_POST['name']);
    $tittle = mysqli_escape_string($conn, $_POST['tittle']);
    $text   = mysqli_escape_string($conn, $_POST['text']);


    //Comando a ser executado no banco
    $sql = "INSERT INTO bear_comentarios (name, tittle, text) VALUES ('$name', '$tittle', '$text')"; 
    //Efetuando o comando no banco 
    $teste = $conn->query($sql);

    //Confirmação Visual 
    if ($teste){
        echo  "<script>alert('Comentário Efetuado com Sucesso!');</script>";
        echo  "<script>window.location='../../quemSomos.php';</script>";
    }
    else {
        echo "erro";
    }
}