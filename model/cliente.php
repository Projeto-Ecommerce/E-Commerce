<?php

namespace model;

Class Cliente {
     
    private $cpf, $email, $nome, $endereco, $rg, $celular, $dataNascimento;

    //  PEGAR CPF
    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    //  PEGAR EMAIL
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    //  PEGAR NOME
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
    //  PEGAR RG
    function getRg() {
        return $this->rg;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    //  PEGAR DATA DE NASCIMENTO
    function getNascimento() {
        return $this->nascimento;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function getCelular() {
        return $this->celular;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setIdCliente($nomeCliente) {
        $sql = "SELECT * FROM cliente WHERE nomeCliente = ?";

        $stmt = Conn::getConn()->prepare($sql);
        $stmt->bindValue(1, $nomeCliente);
        
        $stmt->execute();

        $stmtRows = $stmt->rowCount();
        $resultado = $stmt->fetchAll();

        if($stmtRows != 0){
            // var_dump($resultado);
            // echo '<br><br>'.$resultado[0]['idCliente'].'<br><br>';
            $this->idCliente = $resultado[0]['idCliente'];
        }
    }
}