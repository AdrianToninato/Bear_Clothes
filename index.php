<!doctype html>
<html lang="pt-BR">

<head>

  <title>Bear Clothes</title>
  <link rel="shortcut icon" href="./img/brand/logoPretoBranco.png" type="image/x-icon" />

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Meu CSS -->
  <link rel="stylesheet" href="./css/myCss.css">


</head>

<body>
  <!-- Nav Bar -->
  <?php include_once "./php/includes/navbar.php" ?>

  <!-- Carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" id="carouselSize">
        <img class="d-block w-100" src="./img/ui/carousel_01.jpg" alt="Primeiro Slide">
      </div>
      <div class="carousel-item" id="carouselSize">
        <img class="d-block w-100" src="./img/ui/carousel_02.jpg" alt="Segundo Slide">
      </div>
      <div class="carousel-item" id="carouselSize">
        <img class="d-block w-100" src="./img/ui/carousel_03.jpg" alt="Terceiro Slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

  <!-- Linha Laranja -->
  <div class="countainer-fluid" id="linha"></div>

  <!-- Cards -->
  <div class="countainer-fluid">

    <!-- Row -->
    <div class="row my-5 mx-5">

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./img/products/tshirt_01.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Camiseta Bear Clothes</h5>
          <p class="card-text">Camiseta 100% de algodão com estampa em serigrafia.</p>
          <div class="row">
            <h5 class="col-5">49,99R$</h5>
            <a href="#" class="btn col-6" id="buttonNav">COMPRAR</a>
          </div>
        </div>
      </div>

      <div class="card ml-5" style="width: 18rem;">
        <img class="card-img-top" src="./img/products/tshirt_01.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title">Camiseta Bear Clothes</h5>
          <p class="card-text">Camiseta 100% de algodão com estampa em serigrafia.</p>
          <div class="row">
            <h5 class="col-5">49,99R$</h5>
            <a href="#" class="btn col-6" id="buttonNav">COMPRAR</a>
          </div>
        </div>
      </div>

    </div>
  </div>


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