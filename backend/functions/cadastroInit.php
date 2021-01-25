<?php

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

//  VERIFICA CPF

$cpf = preg_replace('/[^0-9]/',"",$_POST['cpf']);
    

    $email = htmlspecialchars($_POST['email']);
    $nome = clear($_POST['nome']);
    $celular = preg_replace('/[^0-9]/',"",$_POST['celular']);
    $ddd = '('.substr($celular, 0, 2).')';
    $celular = substr($celular, 2, 11);
    $celular = $ddd.$celular;

    if (strlen($cpf) != 11) {
        //  MENSAGEM DE ERRO POR CPF ERRADO
        echo "CPF INVALIDO!";
        return false;
    }else{

        $i = 0;
        $soma = 0;
        $multiplicador = 10;
        while($i < 9){
            
            
            

            echo '<br>'.$multiplicador.'<br>';
            $arrayMult[$i] = ($multiplicador * substr($cpf, $i, 1));

            $multiplicador = $multiplicador - 1;
            echo $arrayMult[$i].'<br>';
            $i++;
            
            $soma = $arrayMult[$i] + $soma;

            echo "<br>$soma";
        }

        
    }

    

    echo "<br> $cpf <br> $email <br> $nome <br> $celular <br> $ddd";
}