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
        <article>
            <form action="create-product.php" method="post">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name_product" class="form-control" placeholder="Nome do produto">
                </div>
                <div class="form-group">
                    <label>Imagem:</label>
                    <input type="text" name="img_product" class="form-control" placeholder="Imagem do produto">
                </div>
                <div class="form-group">
                    <label>Link:</label>
                    <input type="text" name="link_product" class="form-control" placeholder="Página do produto">
                </div>
                <div class="form-group">
                    <label>Descrição:</label>
                    <input type="text" name="description_product" class="form-control" placeholder="Descrição do produto">
                </div>
                <div class="form-group">
                    <label>Preço:</label>
                    <input type="text" name="value_product" class="form-control" placeholder="Valor do produto">
                </div>
                <input type="submit" value="Criar produto" class="btn btn-success" name="btn-create-product">
            </form>
                <a href="adm.php"><input type="button" value="Cancelar" class="mt-3 btn btn-danger"></a>
        </article>
    </div>
    <!-- Footer -->
    <?php include_once "./php/includes/footer.php" ?>
</body>
</html>