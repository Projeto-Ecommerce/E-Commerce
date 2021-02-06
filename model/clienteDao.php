<?php

namespace model;

require_once ('requires.php');


Class ClienteDao {
     
    public $var;
    function getVar() {
        return $this->var;
    }

    function setVar($var) {
        $this->var = $var;
    }
    //  VERIFICA TODOS OS CAMPOS DO FORMULARIO
    function verificaCampos(Cliente $C) {

        $nome = $C->getNome();
        $email = $C->getEmail();
        $cpf = $C->getCpf();
        $nascimento = $C->getNascimento();
        $celular = $C->getCelular();

        // VERIFICA SE O CAMPO NOME É VALIDO
        if(empty($nome)){
                        
            $_SESSION['error'] = 1;
            $_SESSION['var'] = 1;
            header('Location: ../view/pages/primeiroCadastroCliente.php');
            return false;
        }

        if(empty($email)){

                        
            $_SESSION['error'] = 2;
            $_SESSION['var'] = 1;
            header('Location: ../view/pages/primeiroCadastroCliente.php');
            return false;
        }

        if(empty($nascimento)){

                        
            $_SESSION['error'] = 4;
            $_SESSION['var'] = 1;
            header('Location: ../view/pages/primeiroCadastroCliente.php');
            return false;
        }

        if(empty($celular)){

           // VERIFICA SE O CELULAR TEM O TAMANHO CORRETO
           $_SESSION['error'] = 5;
           $_SESSION['var'] = 1;
           header('Location: ../view/pages/primeiroCadastroCliente.php');
           return false;

        }else{
            if(strlen($celular) < 11){

                // VERIFICA O NUMERO DE CARACTERES DO CELULAR
                $_SESSION['error'] = 5;
                $_SESSION['var'] = 1;
                header('Location: ../view/pages/primeiroCadastroCliente.php');
                return false;
            }
        }

        // VERIFICA SE O CPF É VALIDO

        if (strlen($cpf) != 11) {
            //  TAMANHO DO CPF INVALIDO / ERRO 1 = CPF INVALIDO
            
            $_SESSION['error'] = 3;
            $_SESSION['var'] = 1;
            header('Location: ../view/pages/primeiroCadastroCliente.php');
            return false;

        }else{
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

            if($verificaValues != $valorFinal){

                $_SESSION['error'] = 3;
                header('Location: ../view/pages/primeiroCadastroCliente.php');
                $_SESSION['var'] = 1;
            }
        }
    }
    
    // INSERÇÃO NO DB
    function cadastroInicialCliente(Cliente $c) {

        // VERIFICA SE O CPF JÁ FOI CADASTRADO 
        $sql = "SELECT * FROM cliente WHERE cpfCliente = ? or emailCliente = ?";

        $stmt = Conn::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getCpf());
        $stmt->bindValue(2, $c->getEmail());
        
        $stmt->execute();

        $resultado = $stmt->rowCount();

        if($resultado == 0){
            // FAZ A INSERÇÃO NO BANCO DE DADOS
            $sql = "INSERT INTO cliente (nomeCliente, cpfCliente, dataNascimento, emailCliente)
            VALUES (?, ?, ?, ?)";

            $stmt = Conn::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getCpf());
            $stmt->bindValue(3, $c->getNascimento());
            $stmt->bindValue(4, $c->getEmail());
            
            $stmt->execute();
            
        } else {
            // CPF JÁ CADASTRADO 
            $_SESSION['error'] = 6;
            header('Location: ../view/pages/primeiroCadastroCliente.php');
        }
    }
}