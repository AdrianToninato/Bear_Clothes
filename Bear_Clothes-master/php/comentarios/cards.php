<?php
//Adicionando conexão com o banco
include_once ('conexao.php');

//Puxando informações do banco
$msql      = "SELECT * FROM bear_comentarios"; 
$conteudo = mysqli_query($conn, $msql);


//Criando GRID de comentários
while($row = mysqli_fetch_array($conteudo)){
    echo "
        <div class='card col-5 m-4'>
            <div class='card-header'>
                ".$row[2]."
            </div>
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>
                    <p>".$row[3]."</p>
                    <footer class='blockquote-footer'> 
                    <cite title='Título da fonte'>
                     ".$row[1]."
                    </cite>
                    </footer>
                </blockquote>
            </div>
        </div>";
    }