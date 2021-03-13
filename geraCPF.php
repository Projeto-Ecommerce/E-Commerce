<?php
    $k = 0;
    $j = 0;
    while($j == 0){
        
        $cpf = '';
        $i = 0;
        while($i < 11){
            $cpf .= rand(1,9);
            $i++;

        }
            if(is_string($cpf))
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
                $j = 1;
                echo $cpf;
                
            }
    }