<?php

namespace model;

require_once ('requires.php');
Class contato {

    private $idCliente, $Celular, $idCliente_contato, $idEndereço_contato, $idFornecedor_contato;

    function getCelular (){
        return $this->telCelular;
    }

    function setCelular ($telCelular){
        $this->telCelular = $telCelular;
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

    function getIdCliente() {
        return $this->idCliente;
    }

    function setIdCliente(Cliente $c) {
        $sql = "SELECT * FROM cliente WHERE nomeCliente = ?";

        $stmt = Conn::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        
        $stmt->execute();

        $stmtRows = $stmt->rowCount();
        $resultado = $stmt->fetchAll();

        if($stmtRows != 0){
            var_dump($resultado);
            echo $resultado['idCliente'];
            $this->idCliente = $resultado['idCliente'];
        }
    }
}