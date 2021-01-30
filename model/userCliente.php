<?php

namespace model;

Class User{

    private $username, $password, $login;

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getLogin(){
        return $this->password;
    }

    public function setLogin(){
        return $this->password = $password;
    }

    public function logar(){

    }

    public function cadastrar(User $u){

        $sql = "INSERT INTO Clientes (nomeUsuario, loginUsuario, senha) VALUES (?, ?, ?)";

        $stmt = Conn::getConn()->prepare($sql);
        $stmt->bindValue(1, $u->getUsername());
        $stmt->bindValue(2, $u->getLogin());
        $stmt->bindValue(3, $u->getPassword());

        $stmt->execute();
    }

    public function update(){

    }

    public function delete(){

    }
}