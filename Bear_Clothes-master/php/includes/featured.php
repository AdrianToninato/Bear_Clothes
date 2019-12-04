<?php
  //trazendo a conexão do banco 
  include ('connexion.php');
  //fazendo uma busca no banco dos destaques
  $sql = "SELECT * FROM db_login.bear_destaques";
  //fazendo a conexão com o banco
  $result = $conn->query ($sql);
  //fazendo com que o resultado seja atraves de um array associativo
  $resultado = $result ? $result->fetch_all(MYSQLI_ASSOC) : $result;

  //essa função ira trazer os cards prontos para serem impressos no codigo html
   function cardsCaroussel($link){
    //alimentando a variavel linhas com os cards que teram no carossel
    $linhas.="<div class='carousel-item active' id='carouselSize'>
    <img class='d-block w-100' src='".$link[0]['img']."' alt='Primeiro Slide'>
  </div>
  <div class='carousel-item' id='carouselSize'>
    <img class='d-block w-100' src='".$link[1]['img']."' alt='Segundo Slide'>
  </div>
  <div class='carousel-item' id='carouselSize'>
    <img class='d-block w-100' src='".$link[2]['img']."' alt='Terceiro Slide'>
  </div>";

    //retornando o que sera impresso no carossel
    return $linhas;

   }

