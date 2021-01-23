<?php

//  LIMPAR CAMPOS 
function clear($input) {
    $var = str_replace('  ', ' ', $input);
    $var = str_replace(')', '', $input);
    $var = str_replace('.', '', $input);
    $var = str_replace(',', '', $input);
    $var = str_replace('/', '', $input);
    $var = str_replace('(', '', $input);
    $var = str_replace('=', '', $input);
    $var = str_replace(';', '', $input);
    $var = str_replace(':', '', $input);
    $var = str_replace('?', '', $input);
//  XSS
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar-first'])){

//  VERIFICA CPF

$cpf = preg_replace('/[^0-9]/',"",$_POST['cpf']);

    if (strlen($cpf) != 11) {
        //  MENSAGEM DE ERRO POR CPF ERRADO
        return false;
    }

    $email = clear($_POST['email']);
    $nome = clear($_POST['nome']);
    $celular = preg_replace('/[^0-9]/',"",$_POST['celular']);
    $ddd = substr($celular, 0, 2);

    echo "$cpf <br> $email <br> $nome <br> $celular <br> $ddd";
}