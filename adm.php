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
    <meta charset="UTF-8">
    <title>Página do Administrador</title>
</head>
<body>
    <h1>Olá, <?php 

                echo "administrador(a) ". $datas['name']; 

                // if ($_SESSION['acesso'] == 0):
        
                //     echo "administrador(a) ". $datas['name']; 

                // else:

                //     echo "cliente ". $datas['name'];

                // endif;
                
            ?>!
    </h1>
<h2>Tabela de Clientes</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Usuário</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT * FROM customer_register";
                $result = mysqli_query ($conn, $sql);

                while ($dados = mysqli_fetch_array($result)):
            ?>
            <tr>
                <th scope="row"><?php echo $dados['cdCustomer']; ?></th>
                <td><?php echo $dados['name']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="idCustomer" value="<?php echo $dados['cdCustomer']; ?>">
                        <button type="submit" name="btn-deletar-customer">Deletar</button>
                    </form>
                </td>
                <td><a href="edit-customer.php?id=<?php echo $dados['cdCustomer']; ?>"><input type="submit" value="Editar" name="atualizar"></a></td>
            </tr>

                <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Tabela de usuários</h2>
    <table>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Usuário</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT * FROM user_register";
                $result = mysqli_query ($conn, $sql);

                while ($dados = mysqli_fetch_array($result)):
            ?>
            <tr>
                <th scope="row"><?php echo $dados['cdUser']; ?></th>
                <td><?php echo $dados['name']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="idUser" value="<?php echo $dados['cdUser']; ?>">
                        <button type="submit" name="btn-deletar-user">Deletar</button>
                    </form>
                </td>
                <td><a href="edit-user.php?id=<?php echo $dados['cdUser']; ?>"><input type="submit" value="Editar" name="atualizar"></a></td>
            </tr>

                <?php endwhile; ?>
        </tbody>
    </table>

    <a href="logout.php">Sair</a>
</body>
</html>