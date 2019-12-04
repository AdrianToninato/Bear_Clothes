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

<div class="album bg-light">
 
  <form class="form-inline my-3 ml-5" method="POST" action="barra-busca.php">
  <input class="form-control form-control-sm bg-dark text-white" list="destaques" type="search" name="pesquisar" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-sm mr-3 ml-2" type="submit" id="buttonNav"><i class="fas fa-search mr-2"></i>Pesquisar</button>
    </form>
        
 
 <?php 
      //trazendo aonde esta o código que faz a busca
      include_once ('php/includes/aux_busca.php');
      // fazendo com que seja exbido o resultado da busca
      echo criarLinhas($result , $pesquisa);
 ?>

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