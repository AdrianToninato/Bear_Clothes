//######################################### LOGIN ########################################################################
//ESTE JS É PARA A PARTE DE LOGIN
var login = document.getElementById('login');
//verificando se a variavel esta sendo usada
if (login){
//fazendo com que no evento de enviar o formulario a validação aconteça
login.addEventListener('submit', function (event) {
    // caso tenha algum erro o formulario não é enviado e é dado um alerta
    if (!ValidaLogin()) {
         alert('Usuário ou senha não preenchidos!');
         event.preventDefault();
     }
});

    
 function ValidaLogin() {
     //declarando as variaveis que estaram com os valores do login
    var usuarioLog = document.getElementById('usuario');
    var senhaLog = document.getElementById('senha');
    var contErro = 0;
     //------------------------------------- USUARIO ------------------------------------------------------------
    //validando o USUARIO se ele estiver vazio ele estoura um erro
    if (usuarioLog.value === '') {
        //somando um valor no contador de erros
        contErro++;
        //colocando a borda da caixa de texto do usuario na cor orangered
        usuarioLog.style.borderColor = 'orangered';
        //escrevendo o erro para o usuário
        document.getElementById('legenda_usuarioLog').innerHTML = 'Insira seu usuario!';
    } else {
        //caso não haja mais erro então ele retorna a caixa de texto do usuario para cinza (padrão) 
        usuarioLog.style.borderColor = '#ccc';
        //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
        document.getElementById('legenda_usuarioLog').innerHTML = '';
    }

    //-------------------------------------------- SENHA -----------------------------------------------------------
    //validando a SENHA se ele estiver vazio ele estoura um erro
    if (senhaLog.value === '') {
        //somando um valor no contador de erros
        contErro++;
        //colocando a borda da caixa de texto da senha na cor orangered
        senhaLog.style.borderColor = 'orangered';
        //escrevendo o erro para o usuário
        document.getElementById('legenda_senhaLog').innerHTML = 'Insira a sua senha!';
    } else {
        //caso não haja mais erro então ele retorna a caixa de texto da senha para cinza (padrão) 
        senhaLog.style.borderColor = '#ccc';
        //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuario
        document.getElementById('legenda_senhaLog').innerHTML = '';
    }


    // o cont erro conta os erros retornando verdadeiro o falso  para que possamos enviar ou não o formulario
  if (contErro === 0) {
         return true;
     } else {
         return false;
     }

}
}


//########################################################## CADASTRAR #####################################################################################

// ESTE JS É PARA A PARTE DO CADASTRAR
var cadastForm = document.getElementById('cadastrar'); 
//verificando se a variavel esta sendo usada
if(cadastForm){ 
//fazendo com que no evento de enviar o formulario a validação aconteça
cadastForm.addEventListener('submit', function (event) {
    // caso tenha algum erro o formulario não é enviado e é dado um alerta
     if (!ValidaCadast()) {
          alert('EXISTEM CAMPOS NÃO PREENCHIDOS');
          event.preventDefault();
      }

 });
    
    
  function ValidaCadast() {
         //declarando as variaveis que estaram com os valores do cadastro
         var emailCadast = document.getElementById('cadast_Email');
         var senhaCadast = document.getElementById('cadast_Senha');
         var enderecoCadast = document.getElementById('cadast_Endereco');
         var cidadeCadast = document.getElementById('cadast_Cidade'); 
         var estadoCadast = document.getElementById('cadast_Estado');
         var cepCadast = document.getElementById('cadast_Cep');
         var termoCadast = document.getElementById('cadast_Termo');
         var nomeCadast = document.getElementById('cadast_Nome');
         var numCadast = document.getElementById('cadast_Num');
         var contErro = 0;

         //--------------------------------------- NOME --------------------------------------------------
        //validando o NOME se ele estiver vazio ele estoura um erro
        if (nomeCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do nome na cor orangered
            nomeCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastName').innerHTML = 'Insira seu nome completo!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do endereço para cinza (padrão) 
            nomeCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastName').innerHTML = '';
        }

            
        //------------------------------------ EMAIL ---------------------------------------------
        //validando o EMAIL se ele estiver vazio ele estoura um erro
        if (emailCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            emailCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastEmail').innerHTML = 'Insira seu email!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            emailCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastEmail').innerHTML = '';
        }
         
         //--------------------------------- SENHA --------------------------------------------------
         //validando o SENHA se ele estiver vazio ele estoura um erro
         if (senhaCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto da senha na cor orangered
            senhaCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastSenha').innerHTML = 'Insira uma senha!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto da senha para cinza (padrão) 
            senhaCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastSenha').innerHTML = '';
        }
         
         //--------------------------------------- ENDEREÇO --------------------------------------------
         //validando o ENDEREÇO se ele estiver vazio ele estoura um erro
         if (enderecoCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do endereço na cor orangered
            enderecoCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastEndereco').innerHTML = 'Insira seu endereco!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do endereço para cinza (padrão) 
            enderecoCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastEndereco').innerHTML = '';
        }

        //--------------------------------------- NUMERO --------------------------------------------------
        //validando o NUMERO DA CASA se ele estiver vazio ele estoura um erro
            if (numCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do numero na cor orangered
            numCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastNumber').innerHTML = 'Insira o número!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do endereço para cinza (padrão) 
            numCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastNumber').innerHTML = '';
        }

        //---------------------------------------- CIDADE -------------------------------------------------
         //validando o CIDADE se ele estiver vazio ele estoura um erro
         if (cidadeCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            cidadeCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastCidade').innerHTML = 'Insira sua cidade!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            cidadeCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastCidade').innerHTML = '';
        }

        //-------------------------------------------- ESTADO -----------------------------------------------
        //validando o ESTADO se ele estiver vazio ele estoura um erro
        if (estadoCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            estadoCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastEstado').innerHTML = 'Insira seu estado!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            estadoCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastEstado').innerHTML = '';
        }

        //------------------------------------------ CEP -------------------------------------------------
         //validando o CEP se ele estiver vazio ele estoura um erro
         if (cepCadast.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            cepCadast.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_cadastCep').innerHTML = 'Insira seu CEP!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            cepCadast.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_cadastCep').innerHTML = '';
        }
        //----------------------------------------- TERMO DE CONTRATO --------------------------------------------------
         //validando o TERMO DE CONTRATO se ele estiver selecionado não há erro se não ele estora um erro
         if (termoCadast.checked) {
           //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
           document.getElementById('legenda_cadastTermo').innerHTML = '';
        } else {
             //somando um valor no contador de erros
             contErro++;
             //escrevendo o erro para o usuário
             document.getElementById('legenda_cadastTermo').innerHTML = 'VOCÊ DEVE ACEITAR OS TERMOS DO CONTRATO!';
        }



    // o cont erro conta os erros retornando verdadeiro o falso  para que possamos enviar ou não o formulario
    if (contErro === 0) {
        return true;
    } else {
        return false;
    }

 }
}


//########################################################## COLABORADOR #####################################################################################

// ESTE JS É PARA A PARTE DO CADASTRAR
var colabForm = document.getElementById('colaborador'); 
//verificando se a variavel esta sendo usada
if(colabForm){ 
//fazendo com que no evento de enviar o formulario a validação aconteça
colabForm.addEventListener('submit', function (event) {
    // caso tenha algum erro o formulario não é enviado e é dado um alerta
     if (!ValidaColab()) {
          alert('EXISTEM CAMPOS NÃO PREENCHIDOS');
          event.preventDefault();
      }

 });
    
    
  function ValidaColab() {
         //declarando as variaveis que estaram com os valores do cadastro
         var emailColab = document.getElementById('colab_Email');
         var senhaColab = document.getElementById('colab_Senha');
         var enderecoColab = document.getElementById('colab_Endereco');
         var cidadeColab = document.getElementById('colab_Cidade'); 
         var estadoColab = document.getElementById('colab_Estado');
         var cepColab = document.getElementById('colab_Cep');
         var termoColab = document.getElementById('colab_Termo');
         var nomeColab = document.getElementById('colab_Nome');
         var numColab = document.getElementById('colab_Num');
         var contErro = 0;
        

         //--------------------------------------- NOME --------------------------------------------------
        //validando o NOME se ele estiver vazio ele estoura um erro
        if (nomeColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do nome na cor orangered
            nomeColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabName').innerHTML = 'Insira seu nome completo!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do endereço para cinza (padrão) 
            nomeColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabName').innerHTML = '';
        }

            
        //------------------------------------ EMAIL ---------------------------------------------
        //validando o EMAIL se ele estiver vazio ele estoura um erro
        if (emailColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            emailColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabEmail').innerHTML = 'Insira seu email!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            emailColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabEmail').innerHTML = '';
        }
         
         //--------------------------------- SENHA --------------------------------------------------
         //validando o SENHA se ele estiver vazio ele estoura um erro
         if (senhaColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto da senha na cor orangered
            senhaColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabSenha').innerHTML = 'Insira uma senha!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto da senha para cinza (padrão) 
            senhaColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabSenha').innerHTML = '';
        }
         
         //--------------------------------------- ENDEREÇO --------------------------------------------
         //validando o ENDEREÇO se ele estiver vazio ele estoura um erro
         if (enderecoColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do endereço na cor orangered
            enderecoColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabEndereco').innerHTML = 'Insira seu endereco!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do endereço para cinza (padrão) 
            enderecoColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabEndereco').innerHTML = '';
        }

        //--------------------------------------- NUMERO --------------------------------------------------
        //validando o NUMERO DA CASA se ele estiver vazio ele estoura um erro
            if (numColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do numero na cor orangered
            numColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabNumber').innerHTML = 'Insira o número!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do endereço para cinza (padrão) 
            numColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabNumber').innerHTML = '';
        }

        //---------------------------------------- CIDADE -------------------------------------------------
         //validando o CIDADE se ele estiver vazio ele estoura um erro
         if (cidadeColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            cidadeColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabCidade').innerHTML = 'Insira sua cidade!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            cidadeColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabCidade').innerHTML = '';
        }

        //-------------------------------------------- ESTADO -----------------------------------------------
        //validando o ESTADO se ele estiver vazio ele estoura um erro
        if (estadoColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            estadoColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabEstado').innerHTML = 'Insira seu estado!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            estadoColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabEstado').innerHTML = '';
        }

        //------------------------------------------ CEP -------------------------------------------------
         //validando o CEP se ele estiver vazio ele estoura um erro
         if (cepColab.value === '') {
            //somando um valor no contador de erros
            contErro++;
            //colocando a borda da caixa de texto do email na cor orangered
            cepColab.style.borderColor = 'orangered';
            //escrevendo o erro para o usuário
            document.getElementById('legenda_colabCep').innerHTML = 'Insira seu CEP!';
        } else {
            //caso não haja mais erro então ele retorna a caixa de texto do email para cinza (padrão) 
            cepColab.style.borderColor = '#ccc';
            //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
            document.getElementById('legenda_colabCep').innerHTML = '';
        }
        //----------------------------------------- TERMO DE CONTRATO --------------------------------------------------
         //validando o TERMO DE CONTRATO se ele estiver selecionado não há erro se não ele estora um erro
         if (termoColab.checked) {
           //caso não haja mais erro ele retira o erro que anteriormente foi descrito para o usuário
           document.getElementById('legenda_colabTermo').innerHTML = '';
        } else {
             //somando um valor no contador de erros
             contErro++;
             //escrevendo o erro para o usuário
             document.getElementById('legenda_colabTermo').innerHTML = 'VOCÊ DEVE ACEITAR OS TERMOS DO CONTRATO!';
        }



    // o cont erro conta os erros retornando verdadeiro o falso  para que possamos enviar ou não o formulario
    if (contErro === 0) {
        return true;
    } else {
        return false;
    }

 }
}
