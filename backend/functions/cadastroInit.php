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

    if(substr($cpf, 0, 3) == substr($cpf, 3,3)){
        // CPF INVALIDO
        header('Location: erroCadastro.php?erro=1');
    }else {
        if (strlen($cpf) != 11) {
            //  MENSAGEM DE ERRO POR CPF ERRADO
            header('Location: erroCadastro.php?erro=1');
            return false;
        }else{
    
            $i = 0;
            $soma = 0;
            $multiplicador = 10;
            while($i < 9){
                $arrayMult[$i] = ($multiplicador * substr($cpf, $i, 1));
                $multiplicador = $multiplicador - 1;     
                $soma = $arrayMult[$i] + $soma;
    
                $i++;
            }    
            
            $verificaFirst = $soma / 11;
            $verificaFirst = substr($verificaFirst, 2);
            if(substr($verificaFirst, 0, 1) != '.'){
                $verificaFirst = '0.'. $verificaFirst; 
            }
            
            $verificaFirst = round($verificaFirst * 11);
            $verificaFirst = 11-$verificaFirst;

            if($verificaFirst < 2){
                $verificaFirst = 0;
    
            }
    
            $i = 0;
            $soma = 0;
            $multiplicador = 11;
            while($i<10){
                $arrayMult[$i] = ($multiplicador * substr($cpf, $i, 1));
                $multiplicador = $multiplicador - 1;     
                $soma = $arrayMult[$i] + $soma;
                $i++;
            }
    
            $verificaTwo = $soma / 11;
            $verificaTwo = substr($verificaTwo, 2);
            if(substr($verificaTwo, 0, 1) != "."){
                $verificaTwo = '0.'. $verificaTwo; 
            }
            $verificaTwo = round($verificaTwo * 11);
            $verificaTwo = 11-$verificaTwo;
            if($verificaTwo > 9){
                $verificaTwo = 0;
    
            }

            $valorFinal = $verificaFirst.$verificaTwo;

            $verificaValues = substr($cpf, 9,2);
            
            if($verificaValues == $valorFinal){

                // header('Location: segundoCadastro.php?erro=1');
            }
        }
        
    }


    

    // echo "<br>$soma<br>"; 

    // echo "<br>$verificaFirst<br>";

    // echo "<br>$verificaTwo<br>";
    
    // echo "<br> $verificaValues<br>";

    // echo "<br>$valorFinal<br>";
?> 

<?php

    $filtraCpf[0] = substr($cpf, 0,3);

    $filtraCpf[1] = substr($cpf, 3,3);

    $filtraCpf[2] = substr($cpf, 6,3);

    $filtraCpf[3] = substr($cpf, 9, 2);

    $cpf = $filtraCpf[0].'.'.$filtraCpf[1].'.'.$filtraCpf[2].'-'. $filtraCpf[3];

    echo "<br> $cpf <br> $email <br> $nome <br> $celular <br> $ddd";
}