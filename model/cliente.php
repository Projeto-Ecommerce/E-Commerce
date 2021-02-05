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
}