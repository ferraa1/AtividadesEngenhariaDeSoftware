<?php

class DaoCliente {
    
    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    function inserir(Cliente $obj) {
        try {
            return $this->conexao->exec("insert into cliente (cpf, nome, nascimento, endereco, email, senha) values ('" . $obj->getCpf() . "', '" . $obj->getNome() . "', '" . $obj->getNascimento() . "', '" . $obj->getEndereco() . "', '" . $obj->getEmail() . "', '" . $obj->getSenha() . "')");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(Cliente $obj) {
        try {
            return $this->conexao->exec("update cliente set nome = '" . $obj->getNome() . "', endereco = '" . $obj->getEndereco() . "', email = '" . $obj->getEmail() . "', senha = '" . $obj->getSenha() . "' where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from cliente where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from cliente", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from cliente where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
    
    function selecionarEmail($email) {
        try {
            return $this->conexao->query("select * from cliente where email = " . $email)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
    
    function verificarEmail(Cliente $obj) {
        try {
            return $this->conexao->query("select * from cliente where email = '" . $obj->getEmail() . "'")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }

    function efetuarLogin(Cliente $obj) {
        try {
            return $this->conexao->query("select * from cliente where email = '" . $obj->getEmail() . "' and senha = '" . $obj->getSenha() . "'")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }

}
