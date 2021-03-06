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
    $dataNascimento = explode("/", $dataNascimento);
    $dia = $dataNascimento[0];
    $mes = $dataNascimento[1];
    $ano = $dataNascimento[2];
    $dataNascimento = $ano . '-' . $mes . '-' . $dia;
    $celular = trataCelular($_POST['celular']);
    
    $ddd = substr($celular, 0, 2);
    $celular = substr($celular, 2);
    $celular = '('.$ddd.') '.$celular;
    $cpfCorrecao = $_POST['cpf'];

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['cpf'] = $_POST['cpf'];
    $_SESSION['dataNascimento'] = $_POST['nascimento'];
    $_SESSION['celular'] = $_POST['celular'];

//  LIMPA TODOS OS CAMPOS
    $cliente = new \model\Cliente;
    $cliente->setNome($nome);
    $cliente->setCpf($cpf);
    $cliente->setNascimento($dataNascimento);
    $cliente->setEmail($email);
    $cliente->setCelular($celular);
    
    //  VERIFICA SE OS CAMPUS SÃO VALIDOS
    $verificaCampos = new \model\ClienteDao;
    $verificaCampos->verificaCampos($cliente);

    if(isset($_SESSION['var'])){
        $var = $_SESSION['var'];
    }

        // INSERE NO BANCO DE DADOS
    if(!isset($var)){
        $cadastrarCliente = new \model\ClienteDao;
        $cadastrarCliente->cadastroInicialCliente($cliente);
    }else{
        echo 'Erro no cadastro tente novamente!';
    }

    $contato = new \model\contato;
    $contato->setCelular($celular);

    $contatoDao = new \model\contatoDao;
    $contatoDao->createContato($contato);

    
}