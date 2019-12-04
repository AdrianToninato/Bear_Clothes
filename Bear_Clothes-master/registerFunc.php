<!doctype html>
<html lang="pt-BR">

<head>
  <?php include_once "./php/includes/head.php" ?>
</head>

<body>
  <!-- Nav Bar -->
  <?php include_once "./php/includes/navbar.php" ?>
  <div id="preto"></div>

  <form action="create.php" method="POST" id="colaborador" name="colaborador"class="container my-5">
    <div class="form-row">
    <!-- Inseri essa linha -->
    <div class="form-group col-md-12">
      <label for="inputNome4">Nome completo *</label>
      <input type="text" name="user_name" class="form-control" id="colab_Nome" placeholder="Nome">
      <!-- é para exibir o erro no email caso não esteja preenchido -->
      <p id="legenda_colabName" class="erro_legenda"></p>
    </div>
  <!---->
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email *</label>
        <input type="email" name="user_email" class="form-control" id="colab_Email" placeholder="Email">
        <!-- é para exibir o erro no email caso não esteja preenchido -->
        <p id="legenda_colabEmail" class="erro_legenda"></p>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Senha *</label>
        <input type="password" name="user_pass" class="form-control" id="colab_Senha" placeholder="Senha">
        <!-- é para exibir o erro na senha caso não esteja preenchido -->
        <p id="legenda_colabSenha" class="erro_legenda"></p>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Endereço *</label>
      <input type="text" name="user_address" class="form-control" id="colab_Endereco" placeholder="Rua dos Bobos, nº 0">
      <!-- é para exibir o erro no endereço caso não esteja preenchido -->
      <p id="legenda_colabEndereco" class="erro_legenda"></p>
    </div>
    <!-- Inseri essa linha -->
  <div class="form-group">
    <label for="inputAddress">Número da casa</label>
    <input type="text" name="user_number" class="form-control" id="colab_Num" placeholder="Insira o número">
    <p id="legenda_colabNumber" class="erro_legenda"></p>
  </div>
  <!---->
    <div class="form-group">
      <label for="inputAddress2">Complemento </label>
      <input type="text" name="user_complement" class="form-control" id="colab_Complemento" placeholder="Apartamento, hotel, casa, etc.">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade *</label>
        <input type="text" name="user_city" class="form-control" id="colab_Cidade">
        <!-- é para exibir o erro na cidade caso não esteja preenchido -->
      <p id="legenda_colabCidade" class="erro_legenda"></p>
      </div>
      <div class="form-group col-md-4">
        <label for="inputCEP">Estado *</label>
        <input type="text" name="user_state" class="form-control" id="colab_Estado">
        <!-- é para exibir o erro no estado caso não esteja preenchido -->
      <p id="legenda_colabEstado" class="erro_legenda"></p>
      </div>

      <div class="form-group col-md-2">
        <label for="inputCEP">CEP *</label>
        <input type="text" name="user_zipcode" class="form-control" id="colab_Cep">
        <!-- é para exibir o erro no CEP caso não esteja preenchido -->
      <p id="legenda_colabCep" class="erro_legenda"></p>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="colab_Termo">
        <label class="form-check-label" for="gridCheck">
          Estou ciente e ACEITO os termos de contrato. *
        </label>
        <!-- é para exibir o erro no termo de contrato caso não esteja assinalado-->
      <p id="legenda_colabTermo" class="erro_legenda"></p>
      </div>
    </div>
    <p>Os requisitos obrigatórios contém *</p>
    <button class="btn" name="btn-user-register" type="submit" id="buttonNav">Cadastrar</button>
  </form>


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
  <script src="js/validation.js"></script>
</body>

</html>