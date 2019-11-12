<!doctype html>
<html lang="pt-BR">

<head>
    <?php include_once "./php/includes/head.php" ?>
</head>

<body>
    <!-- Nav Bar -->
    <?php include_once "./php/includes/navbar.php" ?>
    <div id="preto"></div>



    <div class="container login-container">
        <div class="row">

            <!-- LOGIN -->
            <div class="col-md-6 login-form-1">
                <h3>LOGIN</h3>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Login" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" value="" />
                </div>
                <div class="form-group">
                    <button class="btn btnSubmit" type="submit" id="buttonNav">Entrar</button>
                </div>
                <div class="form-group">
                    <a href="#" class="btnForgetPwd">Esqueceu a senha?</a>
                </div>

            </div>

            <!-- REGISTER -->
            <div class="col-md-6 login-form-2">
                <div class="login-logo">
                    <img src="./img/brand/logoPretoBranco.png" alt="" />
                </div>
                <h3>REGISTRE-SE</h3>
                <div class="form-group text-center mb-3">
                    <a href="https://www.facebook.com" id="registroFacil"><i class="fab fa-facebook-square ml-3 mr-3"
                            target="_blank"></i></a>
                    <a href="https://gmail.com" id="registroFacil"><i class="fab fa-google mr-3"
                            target="_blank"></i></a>
                    <a href="https://www.instagram.com" id="registroFacil"><i class="fab fa-instagram mr-3"
                            target="_blank"></i></a>
                </div>
                <div class="form-group text-center text-white">
                    <h5 class="mb-3">ou</h5>
                </div>
                <div class="form-group text-center">
                    <a class="btn btn-outline-light my-3" href="./register.php" role="button">Cadastrar</a>
                    <br>
                    <a class="text-white mt-3" href="./registerFunc.php">colaborador</a>
                </div>
                </form>
            </div>
        </div>
    </div>


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