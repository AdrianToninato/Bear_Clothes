<?php

// Realizando conexão.
include_once ('connexion.php');

// Iniciando sessão.
session_start();

if (!isset($_SESSION['logado'])):

    header ('Location: login.php');

else: 

    if ($_SESSION['acesso'] == 1):

        header ('Location: login.php');

    endif;

endif;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include_once "./php/includes/head.php" ?>
</head>
<body>
  <!-- Nav Bar -->
  <?php include_once "./php/includes/navbar.php" ?>
  <div id="preto"></div>
<div class="container mt-5 mb-5">
    <form action="create-product.php" method="post">
        <div class="form-row">
        <!-- Inseri essa linha -->
            <div class="form-group col-md-12">
                <label for="inputNome4">Nome do produto:</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Nome do produto">
            </div>
            <div class="form-group col-md-12">
                <label for="inputNome4">Preço do produto:</label>
                    <input type="text" name="product_value" class="form-control" placeholder="Preço do produto">
            </div>
            <button class="btn btn-success">Adicionar</button>
    </form>
    <a href="index.php"><button class="btn btn-primary ml-3">Cancelar</button></a>
</div>
</div>
<!-- Footer -->
    <?php include_once "./php/includes/footer.php" ?>
</body>
</html>