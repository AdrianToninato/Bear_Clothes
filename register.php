<!doctype html>
<html lang="pt-BR">

<head>
  <?php include_once "./php/includes/head.php" ?>
</head>

<body>
  <!-- Nav Bar -->
  <?php include_once "./php/includes/navbar.php" ?>
  <div id="preto"></div>

  <form class="container mt-5">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Senha</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Endereço</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Endereço 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputCEP">Estado</label>
        <input type="text" class="form-control" id="inputCEP">
      </div>

      <div class="form-group col-md-2">
        <label for="inputCEP">CEP</label>
        <input type="text" class="form-control" id="inputCEP">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Estou ciente e ACEITO os termos de contrato.
        </label>
      </div>
    </div>
    <button class="btn" type="submit" id="buttonNav">Cadastrar</button>
  </form>


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