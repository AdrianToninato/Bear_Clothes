<?php
//Adicionando conexão com o banco
include_once ('conexao.php');

//Capturando valores do form
if (isset($_GET['row'])){

    //Povoando variáveis para envio ao banco
    $delete = mysqli_escape_string($conn, $_GET['row']);
    

    //Comando a ser executado no banco
    $sql = "DELETE FROM bear_comentarios WHERE id = ".$delete; 
    //Efetuando o comando no banco 
    $teste = $conn->query($sql);

    //Confirmação Visual 
    if ($teste){
        echo  "<script>alert('Comentário Deletado com Sucesso!');</script>";
        echo  "<script>window.location='../../../deleteComentario.php';</script>";
    }
    else {
        echo "erro";
    }
}