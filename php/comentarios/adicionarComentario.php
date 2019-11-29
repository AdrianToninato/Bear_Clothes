<?php
//adicionando conexão com o banco
include ('./conexao.php');

//capturando valores do form
if (isset($_POST['btn-coment'])){

    //povoando variáveis para envio ao banco
    $name   = mysqli_escape_string($conn, $_POST['name']);
    $tittle = mysqli_escape_string($conn, $_POST['tittle']);
    $text   = mysqli_escape_string($conn, $_POST['text']);

    //comando a ser executado no banco
    $sql = "INSERT INTO `bear_comentarios`(`name`, `tittle`, `text`) VALUES ($name, $tittle, $text)"; 

    //efetuando comando
    if ($conn->query($sql)){

        echo  "<script>alert('Comentário Efetuado com Sucesso!');</script>";
        echo  "<script>window.location='cadastrarComentario.php';</script>";
    }
}