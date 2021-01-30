<?php

namespace controler\functions\functionsCadastros;

Class clienteFunctions {
     
    //  VERIFICAÇÃO DE CPF
    function verificaCpf($cpf) {
        if(substr($cpf, 0, 3) == substr($cpf, 3,3)){
            // CPF INVALIDO / ERRO 1 = CPF INVALIDO
            header('Location: erroCadastro.php?erro=1');
            return false;

        }else {
            if (strlen($cpf) != 11) {
                //  TAMANHO DO CPF INVALIDO
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
                    
                    echo "CPF VALIDO!";

                    $verificaBanco = new 
                    $_SESSION['nome'] = $nome;
                    $_SESSION['cpf'] = $cpfCorrecao;
                    session_destroy();

                    // header('Location: ../../frontend/pages/segundoCadastroCliente.php');
                }
            }
        }
    }
    // INSERÇÃO NO DB
    function cadastrarCliente(Cliente $c) {
        // VERIFICA DE O CPF JÁ FOI CADASTRADO 
        $sql = "SELECT * FROM cliente WHERE cpfCliente = ?";

        $stmt = Conn::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getCpf());
        
        $resultado = $stmt->execute();

        if($resultado == NULL){
            // FAZ A INSERÇÃO NO BANDO DE DADOS
            $sql = "INSERT INTO cliente (nomeCliente, dataNascimento, cpfCliente, rgCliente)
            VALUES (?, ?, ?, ?, ?)";

            $stmt = Conn::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getNascimento());
            $stmt->bindValue(3, $c->getCpf());
            $stmt->bindValue(4, $c->getRg());
            
            $stmt->execute();
        } else {
            // CPF JÁ CADASTRADO 
            
            header('Location: ../../view/pages/errorPage.php?erro=3');
        }



    }
}

Class Endereco {

    private $bairro, $rua, $numero, $cidade, $estado, $pais, $bloco, $complemento;

    //  Pegar os valores
}