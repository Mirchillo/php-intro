<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'Adulto';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Idoso';
    $categorias[] = 'Infantil';

    if(validaCampo($nome, $idade)){
        removerMensagemDeErro();

        if($idade >= 6 && $idade <=  12){
            for($i = 0; $i < count($categorias); $i++){
                if($categorias[$i] == 'Infantil'){
                    setarMensagemDeSucesso( mensagem: 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <=  18){
            for($i = 0; $i < count($categorias); $i++){
                if($categorias[$i] == 'Adolescente'){
                    setarMensagemDeSucesso( mensagem: 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade > 18){
            for($i = 0; $i < count($categorias); $i++){
                if($categorias[$i] == 'Adulto'){
                   setarMensagemDeSucesso( mensagem: 'O nadador ' .$nome. ' compete na categoria ' .$categorias[$i]); 
                   return null;
                }
            }
        }
    }
    else
    {
        removerMensagemDeSucesso();
        return obterMensagemDeErro();
    }
}
