<?php

Class contato {

    private $telFixo, $telCelular, $email, $idCliente_contato, $idEndereço_contato, $idFornecedor_contato;
    
    function getTelfixo (){
        return $this->telFixo;
    }

    function setTelfixo ($telFixo){
        $this->tellFixo = $telFixo;
    }

    function getTelcelular (){
        return $this->telCelular;
    }

    function setTelcelular ($telCelular){
        $this->telCelular = $telCelular;
    }

    function getEmail (){
        return $this->email;
    }

    function setEmail ($email){
        $this->email = $email;
    }

    function getIdcliente_contato (){
        return $this->idCliente_contato;
    }

    function setIdcliente_contato ($idCliente_contato){
        $this->idCliente_contato = $idCliente_contato;

    }

    function getIdendereço_contato (){
        return $this->idEndereço_contato;
    }

    function setIdendereco_contato ($idEndereço_contato){
        $this->idEndereço_contato = $idEndereço_contato;
    }

    function getIdfornecedor_contato (){
        return $this->idFornecedor_contato;

    }

    function setIdfornecedor_contato ($idFornecedor_contato){
        $this->idFornecedor_contato = $idFornecedor_contato;
    }
} 