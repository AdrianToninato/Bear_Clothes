<?php

// Iniciando conexão.
include_once ('connexion.php');

// Iniciando sessão.
session_start();

// Caso o adm não esteja logado.
if (!isset($_SESSION['logado'])):

    header ('Location: login.php');

endif;

if (isset($_GET['id'])): // Se o id na url existe é porque deu certo.

    // Obtendo id do cliente.
    $id = mysqli_escape_string($conn, $_GET['id']); 

    // Pesquisando no banco de dados.
    $sql = "SELECT * FROM bear_produtos WHERE id ='$id' ";
    $result = $conn->query($sql);
    $dados = mysqli_fetch_array($result); // Obtendo todas as informações do cliente a partir do id.

endif;

// Dados do usuário.
$id = $_SESSION['idUser'];
$sql = "SELECT * FROM user_register WHERE cdUser = '$id' ";
$result = mysqli_query ($conn, $sql);
$datas = mysqli_fetch_array ($result);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once "./php/includes/head.php" ?>
</head>

<body>
    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <!-- Nav Logo -->
        <a class="navbar-brand ml-3" href="./index.php">
            <img src="./img/brand/logoPretoBranco.png" width="30" height="30" alt="">
            Bear Clothes
        </a>
        <!-- Nav Content -->
        <div class="collapse navbar-collapse ml-5" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="./male.php">Masculino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./female.php">Feminino</a>
                </li>
                <a class="text-white h4 ml-5" href="https://www.facebook.com " target="_blank"><i
                        class="fab fa-facebook-square"></i></a>
                <a class="text-white h4 ml-4" href="https://www.instagram.com" target="_blank"><i
                        class="fab fa-instagram"></i></a>
            </ul>
            <!-- Search Fomr & Login -->
            <form class="form-inline">
                <input class="form-control form-control-sm bg-transparent text-white" type="search"
                    placeholder="Pesquisar" aria-label="Pesquisar" id="formNav">
                <button class="btn btn-sm mr-3 ml-2" type="submit" id="buttonNav"><i
                        class="fas fa-search mr-2"></i>Pesquisar</button>
                <p class="mt-3 text-light">Olá, <?php echo "administrador(a) ". $datas['name']; 
                                        // if ($_SESSION['acesso'] == 0):
                                        //     echo "administrador(a) ". $datas['name']; 
                                        // else:
                                        //     echo "cliente ". $datas['name'];
                                        // endif;?>!</p>
            </form>
            <a href="logout.php"><button class="btn btn-sm mr-3 ml-2" id="buttonNav">Sair</button></a>
        </div>
    </nav>
    <div id="preto"></div>
    <!-- FIM NAV -->
    <div class="container mt-5 mb-5">
        <h1 class="text-center">Atualizar produto</h1>
        <form action="update-product.php" method="post" enctype="multipart/form-data" id="edit_products">
            <div class="form-group">
                <input type="hidden" value="<?php echo $dados['id']; ?>" name="id">
                <label>Nome do produto:</label>
                <input type="text" name="name_product" id="productEd_nome" class="form-control" value="<?php echo $dados['nome']; ?>">
                <p id="legenda_productEdNome" class="erro_legenda"></p>
            </div>
            <div class="form-group">
                <label>Imagem:</label>
                <input type="file" name="img_product" accept='image/*' id="productEd_imagem" class="form-control" value="<?php echo $dados['img']; ?>">
                <p id="legenda_productEdImagem" class="erro_legenda"></p>
            </div>
            <div class="form-group">
                <label>Página:</label>
                <input type="text" name="link_product" id="productEd_pagina" class="form-control" value="<?php echo $dados['link']; ?>">
                <p id="legenda_productEdPagina" class="erro_legenda"></p>
            </div>
            <div class="form-group">
                <label>Descrição:</label>
                <input type="text" name="description_product" id="productEd_descricao" class="form-control" value="<?php echo $dados['descricao']; ?>">
                <p id="legenda_productEdDescricao" class="erro_legenda"></p>
            </div>
            <div class="form-group">
                <label>Preço:</label>
                <input type="text" name="value_product" id="productEd_preco" class="form-control" value="<?php echo $dados['preco']; ?>">
                <p id="legenda_productEdPreco" class="erro_legenda"></p>
            </div>
            <input type="submit" class="btn btn-warning" name="btn-update-product" value="Atualizar">
        </form>
        <a href="adm.php"><button class="btn btn-primary mt-3">Cancelar</button></a> 
    </div>

    <!-- FOOTER -->
    <?php include_once "./php/includes/footer.php" ?>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
<script src="js/validation.js"></script>
</body>

</html>
</body>
</html>