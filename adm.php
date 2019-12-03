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
    <meta charset="UTF-8">
    <title>Página do Administrador</title>
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
        <h2 class="text-center">Tabela de Clientes</h2>
        <table class="table table-striped">
            <thead class="tablehead">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    //Realizando um select para obter os dados dos usuários.
                    $sql = "SELECT * FROM customer_register";
                    $result = mysqli_query ($conn, $sql);

                    while ($dados = mysqli_fetch_array($result)): // Laço para obter todas as informações do cliente dentro do array $dados.
                ?>
                <tr>
                    <th scope="row"><?php echo $dados['cdCustomer']; ?></th>
                    <td><?php echo $dados['name']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="idCustomer" value="<?php echo $dados['cdCustomer']; ?>">
                            <button type="submit" class="btn btn-danger deletbutton" name="btn-deletar-customer">Deletar</button>
                        </form>
                    </td>
                    <!-- Pegando id do cliente pela url para que seja possível editar -->
                    <td><a href="edit-customer.php?id=<?php echo $dados['cdCustomer']; ?>"><input type="submit"
                                value="Editar" class="btn btn-primary" name="atualizar"></a></td>
                </tr>

                <?php // Finalizado while.
                    endwhile; 
                ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="http://localhost:8080/Bear_Clothes/register.php"><button id="buttonNav" class="btn">Adicionar
                    cliente</button></a>
        </div>
        <h2 class="mt-5 text-center">Tabela de usuários</h2>
        <table class="table table-striped">
            <thead class="tablehead">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    //Realizando um select para obter os dados dos colaboradores.
                    $sql = "SELECT * FROM user_register";
                    $result = mysqli_query ($conn, $sql);

                    while ($dados = mysqli_fetch_array($result)): // Laço para obter todas as informações do colaborador dentro do array $dados.
                ?>
                <tr>
                    <th scope="row"><?php echo $dados['cdUser']; ?></th>
                    <td><?php echo $dados['name']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="idUser" value="<?php echo $dados['cdUser']; ?>">
                            <button type="submit" class="btn btn-danger deletbutton" name="btn-deletar-user">Deletar</button>
                        </form>
                    </td>
                    <!-- Pegando id do colaborador pela url para que seja possível editar -->
                    <td><a href="edit-user.php?id=<?php echo $dados['cdUser']; ?>"><input type="submit"
                                class="btn btn-primary" value="Editar" name="atualizar"></a></td>
                </tr>

                <?php 
                    // Finalizando while.
                endwhile; 
                
                ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="http://localhost:8080/Bear_Clothes/registerFunc.php"><button id="buttonNav" class="btn">Adicionar
                    colaborador</button></a>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="mt-5 text-center">Produtos</h2>
            </div>
        </div>
                <div class="row">
                <?php 
                    //Realizando um select para obter os dados dos produtos.
                    $sql = "SELECT * FROM bear_produtos";
                    $result = mysqli_query ($conn, $sql);

                    while ($dados = mysqli_fetch_array($result)): // Laço para obter todas as informações dos produtos dentro do array $dados.

                ?>
                    <div class='col-md-4'>
                        <div class='card mb-4 shadow-sm'>
                            <a tabindex='0' href='<?php echo $dados['link']?>' class='text-body'>
                                <img class='card-img-top  img-fluid' src='<?php echo $dados['img']?>' alt='imagem do produto no card'>
                            </a>
                            <div class='card-body'>
                                <a tabindex='0' href='<?php echo $dados['link']?>' class='text-body bear_link_noDec'>
                                    <h6 class='h4 font-weight-bold bear_link_C'><?php echo $dados['nome']?></h6>
                                </a>
                                <p class='card-text'><?php echo $dados['descricao']?></p>
                                <div class='d-flex justify-content-between align-items-center'>
                                    <div class='btn-group'>
                                        <a href="edit-product.php?id=<?php echo $dados['id']; ?>"><button class="btn btn-warning">Editar</button></a>
                                    </div>
                                    <div class="btn-group">
                                        <form action="delete-product.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                                            <input type="submit" name="btn-delete-product" class="btn btn-danger" value="Excluir">
                                        </form>
                                    </div>
                                    <p class='mb-1 mt-auto font-weight-bold h2 bear_Orange'><?php echo $dados['preco']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    // Finalizando while.
                    endwhile; 
                
                ?>
                </div>
                 <div class="text-center">
                    <a href="insert-product.php"><button id="buttonNav" class="btn">Adicionar produto</button></a>
                </div>
            </div>
        </div>
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
</body>

</html>