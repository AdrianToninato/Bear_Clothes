<?php
//adicionando conexão com o banco
include_once ('conexao.php');

//Puxando informações do banco
$msql      = "SELECT * FROM bear_comentarios"; 
$conteudo = mysqli_query($conn, $msql);

//Criando GRID de comentários
while($rows = mysqli_fetch_array($conteudo)){
    echo "
        <div class='card col-4'>
            <div class='card-header'>
                ".$conteudo[1]."
            </div>
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>
                    <p>".$conteudo[2]."</p>
                    <footer class='blockquote-footer'> 
                    <cite title='Título da fonte'>
                     ".$conteudo[0]."
                    </cite>
                    </footer>
                </blockquote>
            </div>
        </div>";
    }