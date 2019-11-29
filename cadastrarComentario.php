<!doctype html>
<html lang="pt-BR">

<!-- Comentário teste -->

<head>
    <?php include_once "./php/includes/head.php" ?>
</head>

<body>
    <!-- Nav Bar -->
    <?php include_once "./php/includes/navbar.php" ?>
    <div id="preto"></div>

    <!-- Form de Comentário -->
    <div class="container my-5">
        <div class="row">
            <form class="col-12" method="POST" action="./php/comentarios/adicionarComentario.php">
                <!-- Nome -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome que aparecerá no comentário</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="seu nome real não será divulgado caso não queira" name="name">
                </div>

                <!-- Titulo -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">Título do Comentário</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Este será o título do seu comentário" name="tittle">
                </div>

                <!-- Texto -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Digite aqui seu comentário</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                </div>

                <!-- Botão de Enviar -->
                <button type="submit" class="btn btn-success" name="btn-coment">Enviar</button>
            </form>

        </div>
    </div>

    <!-- Footer -->
    <?php include_once "./php/includes/footer.php" ?>

    <!-- JS BOOTSTRAP -->
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