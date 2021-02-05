<?php

session_start();

require_once ('../model/requires.php');


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

function trataCelular ($celular){
    $celular = preg_replace('/[^0-9]/',"",$celular);
    $celular = str_replace(" ", "", $celular);
    return $celular;
}

if(isset($_POST['btn-cadastrar-first'])){
    
// LIMPA TODOS OS CAMPOS    
    $cpf = preg_replace('/[^0-9]/',"",$_POST['cpf']);    
    $email = htmlspecialchars($_POST['email']);
    $email = strtolower($email);
    $nome = clear($_POST['nome']);
    $dataNascimento = $_POST['nascimento'];
    $celular = trataCelular($_POST['celular']);

// MUDA O LAYOUT DO CPF

    $cpfCorrecao = $_POST['cpf'];

//  VERIFICA SE TODOS OS CAMPOS SÃO VALIDOS
    $cliente = new \model\Cliente;
    $cliente->setNome($nome);
    $cliente->setCpf($cpf);
    $cliente->setNascimento($dataNascimento);
    $cliente->setEmail($email);
    $cliente->setCelular($celular);
    
    //  VERIFICA SE O CPF É VALIDO
        $verificaCampos = new \model\ClienteDao;
        $verificaCampos->verificaCampos($cliente);


}