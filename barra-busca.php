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
     
     include_once ('connexion.php');
  
	$pesquisar = $_POST['pesquisar'];
	$result = "SELECT * FROM bear_produtos WHERE nome LIKE '%$pesquisar%' ";
  $resultado = mysqli_query($conn, $result);
    
      
  echo '<div class="row">
    <div class="col-10 ml-5 border-bottom border-dark">
      <h5 class=" mb-3 h3"> Resultados para "'.$pesquisar.'":</h5>
    </div>
  </div>';

    $quantidade = mysqli_num_rows($resultado);
    
    if($quantidade){
        
	while($rows = mysqli_fetch_array($resultado)){
      echo "
      <div class='row my-3 ml-5'>
  <a href='".$rows['link']."' class='col-4 d-block my-auto p-0 pr-md-3'>
    <picture>
    <img class='rounded img-fluid' style='height:234px;' alt='foto do produto' src='".$rows['img']."'/>
    </picture>
  </a>
  <div class='col-8 h-auto d-flex flex-column pl-2 pr-0'>
    <div class='mt-0 mb-auto'>
      <a tabindex='0' href='".$rows['link']."' class='text-body bear_link_noDec'>
        <h3 class='h1 font-weight-bold bear_link_C'>".$rows['nome']."</h3>
      </a>
      <p class='mb-1 mt-auto text-body'>".$rows['descricao']."</p>
      <p class='mb-1 mt-auto  font-weight-bold h2 bear_Orange'>".$rows['preco']."</p>
    </div>
  </div>
</div>";
    }  
}else{
        echo'<div class="row">
    <div class="col-10 ml-5 mb-5">
      <h5 class=" mb-3 h1 bear_Orange"> Não foi possivel encontrar resultados para : "'.$pesquisar.'"</h5>
    </div>
  </div>';
    }





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