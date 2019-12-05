<?php 
     //fazendo a conexão com o banco
     include_once ('connexion.php');
    
     //atribuindo a uma variavel o que foi digitado pelo usuario na barra de busca
    $pesquisa = $_POST['pesquisar'];
    //neste momento esta sendo feita a busca no banco de dados onde o comando like procura tudo o que for parecido 
    //caso o usuario tenha digitado errado
    $pesquisando = "SELECT * FROM bear_produtos WHERE nome LIKE '%$pesquisa%' ";
    //atribuindo a pesquisa a conexão e a trazendo no formato de query procedural
    $result = mysqli_query($conn, $pesquisando);
    
     //exibe em tela um recado ao usuario sobre o que foi encontrado para a busca que ele fez   
    echo '<div class="row">
        <div class="col-10 ml-5 border-bottom border-dark">
        <h5 class=" mb-3 h3"> Resultados para "'.$pesquisa.'":</h5>
        </div>
    </div>';

    //esta função sera essencial para exibir em tela no formato de card o que foi encontrado na busca
    //o segundo elemento necessário da função é apenas para ser utilizado na hora de exibir o erro
    function criarLinhas($resultado, $pesquisa){
        $linhas='';
        //faz a contagem de quantas foram trazidas na busca
        $quantidade = mysqli_num_rows($resultado);
        //se a quantidade existir ou seja for maior que zero entra-se nesta opção (há resultados)
        if($quantidade){
            //um while que faz um loop imprimindo os resultados no formato de card
        while($rows = mysqli_fetch_array($resultado)){
        $linhas.= "
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
        //senão entra nesta ( não há resultados)
    }else{
        //exibe uma mensagem avisando ao usuario que nada foi encontrado
            $linhas ='<div class="row">
        <div class="col-10 ml-5 mb-5">
        <h5 class=" mb-3 h1 bear_Orange"> Não foi possivel encontrar resultados para : "'.$pesquisa.'"</h5>
        </div>
    </div>';
        }
        //retorna quando esta função for chamada um dos dois formatos de impressão acima
        return $linhas;
    }




