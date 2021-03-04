<?php
session_start();

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setMensagemErro(mensagem: 'O nome nao pode ser vazio');
        return false;
    }

    else if(strlen($nome) < 3)
    {
        setMensagemErro(mensagem: 'O nome deve ter mais que 3 caracters');
        return false;

    }
    else if(strlen($nome) > 40)
    {
        setMensagemErro(mensagem: 'O nome e muito extenso');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setMensagemErro(mensagem: "A idade deve ser numerica");
        return false;
    }
    return true;
}

function removerMsgErro() : void
{
    if(isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);
}

function removerMsgSucesso() : void
{
    if(isset($_SESSION['mensagem-de-sucesso']))
        unset($_SESSION['mensagem-de-sucesso']);
}
