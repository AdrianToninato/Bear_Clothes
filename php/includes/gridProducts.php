<article>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <?php 
        
        include_once ('connexion.php');

        $result = "SELECT * FROM bear_produtos ";
        $resultado = mysqli_query($conn, $result);


        while($rows = mysqli_fetch_array($resultado)){
            echo "
            <div class='col-md-4'>
              <div class='card mb-4 shadow-sm'>
              <a tabindex='0' href='".$rows['link']."' class='text-body'>
                <img class='card-img-top  img-fluid' src='".$rows['img']."'' alt='imagem do produto no card'>
              </a>
                <div class='card-body'>
                <a tabindex='0' href='".$rows['link']."'' class='text-body bear_link_noDec'>
                  <h6 class='h4 font-weight-bold bear_link_C'>".$rows['nome']."</h6>
                </a>
                  <p class='card-text'>".$rows['descricao']." </p>
                  <div class='d-flex justify-content-between align-items-center'>
                    <p class='mb-1 mt-auto  font-weight-bold h2 bear_Orange'>".$rows['preco']."</p>
                    </div>
                  </div>
              </div>
            </div>";
        }  
        ?>

      </div>
    </div>
  </div>
</article>