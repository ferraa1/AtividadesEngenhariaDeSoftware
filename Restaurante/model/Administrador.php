<?php

class Administrador {
    
    private $id, $email, $senha;
    
    function __construct($email = null, $senha = null, $id = null) {
        $this->id = $id;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">
    
    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    
    // </editor-fold>
}
