<?php

session_start();

function defineCategoria(string $nome, string $idade)
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    if(validaNome($nome) && validaIdade($idade))
    {
        removerMsgErro();
        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setMensagemSucesso(mensagem: "O nadador " .$nome. " compete 
                        na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 13 && $idade <= 18)
        {
            for($i =0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    setMensagemSucesso(mensagem: "O nadador " .$nome. " compete 
                        na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 19 && $idade <= 50)
        {
            for($i =0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setMensagemSucesso(mensagem: "O nadador " .$nome. " compete 
                        na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else
        {
            setMensagemErro(mensagem: "Idade fora do limite");
            return null;
        }
    }
    else
    {
        removerMsgSucesso();
        return obterMensagemErro();
    }
}
