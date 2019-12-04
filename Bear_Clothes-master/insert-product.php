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
            <form action="create-product.php" method="post" id="insert_products">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name_product" id="productIn_nome" class="form-control" placeholder="Nome do produto">
                    <p id="legenda_productInNome" class="erro_legenda"></p>
                </div>
                <div class="form-group">
                    <label>Imagem:</label>
                    <input type="text" name="img_product" id="productIn_imagem" class="form-control" placeholder="Imagem do produto">
                    <p id="legenda_productInImagem" class="erro_legenda"></p>
                </div>
                <div class="form-group">
                    <label>Link:</label>
                    <input type="text" name="link_product" id="productIn_pagina" class="form-control" placeholder="Página do produto">
                    <p id="legenda_productInPagina" class="erro_legenda"></p>
                </div>
                <div class="form-group">
                    <label>Descrição:</label>
                    <input type="text" name="description_product" id="productIn_descricao" class="form-control" placeholder="Descrição do produto">
                    <p id="legenda_productInDescricao" class="erro_legenda"></p>
                </div>
                <div class="form-group">
                    <label>Preço:</label>
                    <input type="text" name="value_product" id="productIn_preco" class="form-control" placeholder="Valor do produto">
                    <p id="legenda_productInPreco" class="erro_legenda"></p>
                </div>
                <input type="submit" value="Criar produto" class="btn btn-success" name="btn-create-product">
            </form>
                <a href="adm.php"><input type="button" value="Cancelar" class="mt-3 btn btn-danger"></a>
        </article>
        <script src="js/validation.js"></script>
    </div>
    <!-- Footer -->
    <?php include_once "./php/includes/footer.php" ?>
</body>
</html>