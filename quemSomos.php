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

    <!-- Texto e Fotos -->
    <div class="container my-5">
        <div class="row">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Quem Somos:</h5>

            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat lectus id
                posuere molestie. Cras auctor blandit arcu tempor lacinia. Nulla maximus, felis vel dapibus tincidunt,
                lacus odio facilisis massa, eget tincidunt velit neque nec turpis. Fusce fermentum justo in neque
                sollicitudin, vel commodo nunc viverra. Aliquam nec luctus metus. Aliquam pharetra porta diam, non
                facilisis eros placerat eu. Vivamus luctus, odio id congue mollis, dolor odio euismod mauris, ut
                ultrices mi nisi in enim.<br><br>

                Vivamus non nunc massa. Praesent eu nunc non ante feugiat varius at non diam. Praesent ultricies sed
                mauris et venenatis. Morbi odio quam, fringilla vel cursus at, lacinia a ante. Duis vestibulum, velit
                quis congue posuere, tortor felis luctus velit, sit amet dictum felis urna at tellus. Morbi dolor augue,
                vestibulum a odio congue, sodales placerat ipsum. Donec ut dapibus erat.<br></p>

            <img src="./img/ui/carousel_03.jpg" alt="Foto de modelo de chapéu" class="col-12 my-5">

            <p class="text-justify">
                Praesent ligula metus, sollicitudin a sem id, tempus dictum felis. Nunc urna ligula, bibendum ac cursus
                eget, cursus sed nisl. Phasellus placerat, nibh quis mollis lacinia, neque eros pretium elit, ac
                ultricies mauris nunc non mauris. Integer id erat id mauris lacinia congue. Mauris sem massa, ultricies
                vel turpis quis, commodo volutpat nisl. Suspendisse tempor urna quis convallis venenatis. Pellentesque
                molestie pellentesque tempus. Nunc laoreet hendrerit enim, id rutrum tellus placerat accumsan. Duis
                velit tortor, porttitor a ex eu, semper vulputate velit. Cras vitae sapien placerat, aliquet nisl
                placerat, blandit justo. Etiam at sapien malesuada risus feugiat fermentum. Ut porta tortor auctor velit
                convallis pharetra.<br><br>

                Mauris porta ornare dolor nec mattis. Aenean at lectus nec sapien convallis varius. Aliquam tristique
                orci eu convallis euismod. Vivamus iaculis in ligula quis egestas. Nulla ut metus consectetur,
                condimentum tortor ut, ornare purus. Donec vitae ornare dui, quis finibus libero. Nunc eu nisi sit amet
                odio scelerisque tempor. Curabitur vitae mi luctus, interdum nibh sit amet, ornare tortor. Cras tellus
                lorem, dictum dictum ornare et, facilisis ac ex.<br></p>

            <img src="./img/products/black_front.jpg" alt="Foto de modelo de chapéu" class="col-6 my-5">
            <img src="./img/products/white_front.jpg" alt="Foto de modelo de chapéu" class="col-6 my-5">

            <p class="text-justify">
                Praesent vulputate dolor in purus luctus, suscipit luctus massa aliquam. Donec tempor maximus iaculis.
                Quisque sem lectus, elementum et turpis ac, dignissim laoreet diam. Donec nec neque libero. Pellentesque
                aliquet auctor maximus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla scelerisque
                enim dui, at euismod arcu dapibus sit amet. Interdum et malesuada fames ac ante ipsum primis in
                faucibus. Morbi accumsan, lacus nec tincidunt viverra, nulla neque condimentum velit, id elementum nulla
                arcu a est. In hac habitasse platea dictumst. Sed tempus tempus eros sed tempor. Nullam sit amet
                malesuada sem. Pellentesque finibus, tortor vitae rhoncus bibendum, nisl ligula vehicula mauris, a
                finibus tortor diam sit amet massa.</p>
        </div>
    </div>

    <!-- Comentários -->
    <div class="container mb-5">
        <div class="row">
            <?php include_once "./php/comentarios/cards.php" ?>
        </div>
    </div>

    <!-- Botão Adicionar Comentário -->
    <div class="container">
        <div class="row">
            <a class="btn btn-outline-dark mb-5" href="./cadastrarComentario.php" role="button">Fazer Comentário</a>    
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