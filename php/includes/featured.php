

<div class="album py-5 bg-light">
<div class="container">
<section class="border-bottom border-dark">

  
    
  <div class="row">
    <div class="mt-auto ">
      <h5 class="font-weight-bold h1 mb-3">Produtos em destaque</h5>
    </div>
  </div>

  <div class="row">
  <?php 
     
     include_once ('connexion.php');

	$result = "SELECT * FROM bear_destaques ";
  $resultado = mysqli_query($conn, $result);


	while($rows = mysqli_fetch_array($resultado)){
      echo "
      <div class='col-md-4 mt-3'>
        <div class='card mb-4 shadow-sm'>
        <a tabindex='0' href='".$rows['link']."' class='text-body'>
          <img class='card-img-top  img-fluid' style='height: 240px;' src='".$rows['img']."'' alt='imagem do produto no card'>
        </a>
          <div class='card-body'>
          <a tabindex='0' href='".$rows['link']."'' class='text-body bear_link_noDec'>
            <h6 class='h4 font-weight-bold bear_link_C'>".$rows['nome']."</h6>
          </a>
            <p class='card-text'>".$rows['descricao']." </p>
            <div class='d-flex justify-content-between align-items-center'>
            <div class='btn-group'>
              <button type='button' class='btn btn-sm btn-outline-secondary bear_btn_C'>Editar</button>
              </div>
              <p class='mb-1 mt-auto  font-weight-bold h2 bear_Orange'>".$rows['preco']."</p>
              </div>
            </div>
        </div>
      </div>";
}  




 ?>
    

</div>
 
</section>
</div>
</div>