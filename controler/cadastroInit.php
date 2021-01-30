<?php

session_start();

require_once ('../vendor/autoload.php')

//  LIMPAR CAMPOS 
function clear($input) {
    
    $var = str_replace(')', "", $input);
    $var = str_replace('  ', " ", $var);
    $var = str_replace(',', "", $var);
    $var = str_replace('(', "", $var);
    $var = str_replace('.', "", $var);
    $var = str_replace(';', "", $var);
    $var = str_replace('[', "", $var);
    $var = str_replace(']', "", $var);
    $var = str_replace('0', "", $var);
    $var = str_replace('1', "", $var);
    $var = str_replace('2', "", $var);
    $var = str_replace('3', "", $var);
    $var = str_replace('4', "", $var);
    $var = str_replace('5', "", $var);
    $var = str_replace('6', "", $var);
    $var = str_replace('7', "", $var);
    $var = str_replace('8', "", $var);
    $var = str_replace('9', "", $var);
//  XSS
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar-first'])){
    
// LIMPA TODOS OS CAMPOS    
    $cpf = preg_replace('/[^0-9]/',"",$_POST['cpf']);    
    $email = htmlspecialchars($_POST['email']);
    $nome = clear($_POST['nome']);
    $celular = preg_replace('/[^0-9]/',"",$_POST['celular']);
    $ddd = '('.substr($celular, 0, 2).')';
    $celular = substr($celular, 2, 11);
    $celular = $ddd.$celular;

// MUDA O LAYOUT DO CPF
    $filtraCpf[0] = substr($cpf, 0,3);

    $filtraCpf[1] = substr($cpf, 3,3);

    $filtraCpf[2] = substr($cpf, 6,3);

    $filtraCpf[3] = substr($cpf, 9, 2);

    $cpfCorrecao = $filtraCpf[0].'.'.$filtraCpf[1].'.'.$filtraCpf[2].'-'. $filtraCpf[3];

    
//  VERIFICA SE TODOS OS CAMPOS SÃO VALIDOS
    if(!empty($cpf) && !empty($email) && !empty($nome) && !empty($celular)){
    
    //  VERIFICA SE O CPF É VALIDO
        $verificaCpf = new controler\functions\functionsCadastros;
    }else {
        // ERRO 2 = CAMPO DO FORMULARIO INVALIDO
        header('Location: ../view/pages/errorPage.php?erro=3');
    }
}