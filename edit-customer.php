<?php

include_once ('connexion.php');

if (isset($_GET['id'])):
    $id = mysqli_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM customer_register WHERE cdCustomer ='$id' ";
    $result = $conn->query($sql);
    $dados = mysqli_fetch_array($result);
endif;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>
    <h1>Cadastro</h1>
    <form action="update.php" method="post">
        <input type="hidden" value="<?php echo $dados['cdCustomer']; ?>" name="id">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $dados['name']; ?>">
        <label>Usuário:</label>
        <input type="text" name="usuario" value="<?php echo $dados['email']; ?>">
        <label>Senha:</label>
        <input type="submit" name="btn-atualizar-customer" value="atualizar">
    </form>
</body>

</html>
</body>
</html>