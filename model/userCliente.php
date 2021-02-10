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
}