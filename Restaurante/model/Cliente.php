<?php

class Cliente {
    
    private $id, $cpf, $nome, $nascimento, $endereco, $email, $senha;
    
    function __construct($cpf = null, $nome = null, $nascimento = null, $endereco = null, $email = null, $senha = null, $id = null) {
        $this->id = $id;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">
    
    function getId() {
        return $this->id;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getEndereco() {
        return $this->endereco;
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

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    // </editor-fold>
}
