<?php 
// Realizando conexão.
include_once ('connexion.php');

// Iniciando sessão.
session_start ();

// Botão enviar
// Se existe $_POST['btn-enter'], significa que foi clicado.
if (isset($_POST['btn-enter'])):

    $errors = array (); // Criando array que irá receber erros.
    $login = mysqli_escape_string ($conn, $_POST['user']); // Filtrando login.
    $pass = mysqli_escape_string ($conn, $_POST['pass']); // Filtrando senha.
    $pass_encrip = hash('sha512', $pass); // Criptografando senha;

    $sql_user = "SELECT email FROM user_register WHERE email = '$login' ";  // Consultando se existe login no banco de dados;
    $result_user = mysqli_query($conn, $sql_user); 

    $sql_costumer = "SELECT email FROM customer_register WHERE email = '$login' ";  // Consultando se existe login no banco de dados;
    $result_customer = mysqli_query($conn, $sql_costumer); 

    if (mysqli_num_rows($result_user) > 0): // Se o número de linhas retornadas for maior que 0

        $sql = "SELECT * FROM user_register WHERE email = '$login' AND pass = '$pass_encrip' ";
        $result = mysqli_query ($conn, $sql);

        if (mysqli_num_rows($result) == 1):

            $datas = mysqli_fetch_array ($result); // Converte resultado em um array.
            $_SESSION['logado'] = true; // Criando sessão logado.
            $_SESSION['idUser'] = $datas['cdUser']; 
            $_SESSION['acesso'] = $datas['cdPermission'];

            if ($_SESSION['acesso'] == 1):

                header ('Location: customer.php');

            elseif ($_SESSION['acesso'] == 0):
                    
                header ('Location: adm.php');

            else: 

                header ('Location: index.php');

            endif;

            mysqli_close($conn);

        else:

            $errors[] = "<li style='color: orangered;' class='mb-2'> Usuário e senha não conferem! </li>";

        endif;

    elseif (mysqli_num_rows($result_customer) > 0):

        $sql = "SELECT * FROM customer_register WHERE email = '$login' AND pass = '$pass_encrip' ";
        $result = mysqli_query ($conn, $sql);

        if (mysqli_num_rows($result) == 1):

            $datas = mysqli_fetch_array ($result); // Converte resultado em um array.
            $_SESSION['logado'] = true; // Criando sessão logado.
            $_SESSION['idCustomer'] = $datas['cdCustomer']; 
            $_SESSION['acesso'] = $datas['cdPermission'];

            if ($_SESSION['acesso'] == 1):

                header ('Location: customer.php');

            elseif ($_SESSION['acesso'] == 0):
                    
                header ('Location: adm.php');

            else: 

                header ('Location: index.php');

            endif;

            mysqli_close($conn);

        else:

            $errors[] = "<li style='color: orangered;' class='mb-2'> Usuário e senha não conferem! </li>";

        endif;

    else:

        $errors[] = "<li style='color: orangered; ' class='mb-2' > Usuário inexistente </li>";

endif;

// FIM DO IF DO BOTÃO //

endif;

?>
<!doctype html>
<html lang="pt-BR">

<head>
    <?php include_once "./php/includes/head.php" ?>
</head>

<body>
    <!-- Nav Bar -->
    <?php include_once "./php/includes/navbar.php" ?>
    <div id="preto"></div>


      <!-- Form Login -->
      <div class="container login-container">
        <div class="row">

            <!-- LOGIN -->
            <div class="col-md-6 login-form-1">
                <h3>LOGIN</h3>
                <?php
                
                if (!empty($errors)):

                    foreach ($errors as $error):

                        echo $error;

                    endforeach;
                
                endif;

                ?>
                <form id="login" name="login" method="post" action="login.php"> 
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Login" id="usuario" value="" />
                        <!-- este espaço serve para exibir os erros validados pelo front -->
                        <p id="legenda_usuarioLog" class="erro_legenda"></p>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Senha" id="senha" value="" />
                        <!-- este espaço serve para exibir os erros validados pelo front -->
                        <p id="legenda_senhaLog" class="erro_legenda"></p>
                    </div>
                    <div class="form-group">
                        <button class="btn btnSubmit" name="btn-enter" type="submit" id="buttonNav">Entrar</button>
                    </div>
                    <div class="form-group">
                        <a href="#" class="btnForgetPwd">Esqueceu a senha?</a>
                    </div>
                </form>

            </div>

            <!-- Form Cadastro -->
            <div class="col-md-6 login-form-2">
                <div class="login-logo">
                    <img src="./img/brand/logoPretoBranco.png" alt="" />
                </div>
                <h3>REGISTRE-SE</h3>
                <div class="form-group text-center mb-3">
                    <a href="https://www.facebook.com"  id="registroFacil" target="_blank"><i class="fab fa-facebook-square ml-3 mr-3"
                            target="_blank"></i></a>
                    <a href="https://gmail.com"         id="registroFacil" target="_blank"><i class="fab fa-google mr-3"
                            target="_blank"></i></a>
                    <a href="https://www.instagram.com" id="registroFacil" target="_blank"><i class="fab fa-instagram mr-3"
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
    <script src="js/validation.js"></script>
</body>

</html>