<?php

function validaCampo(string $nome, string $idade) : bool
{
    if(empty($nome) || empty($idade)){
        setarMensagemDeErro( mensagem: 'O campo não pode estar vazio');
        return false;
    }
    else if(strlen($nome) < 3){
        setarMensagemDeErro( mensagem: 'O nome deve conter mais de 2 caractéres');
        return false;
    }
    else if(!is_numeric($idade)){
        setarMensagemDeErro( mensagem: 'O valor que você colocou não é um número');
        return false;
    }
    else if(strlen($nome) > 40){
        setarMensagemDeErro( mensagem: 'O nome é muito extenso');
        return false;
    }
    else{
        return true;
    }
}
