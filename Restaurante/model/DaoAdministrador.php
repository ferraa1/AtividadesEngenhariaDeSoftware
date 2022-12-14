<?php

class DaoAdministrador {

    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    function inserir(Administrador $obj) {
        try {
            return $this->conexao->exec("insert into administrador (email, senha) values ('" . $obj->getEmail() . "','" . $obj->getSenha() . "')");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(Administrador $obj) {
        try {
            return $this->conexao->exec("update administrador set email = '" . $obj->getEmail() . "', senha = '" . $obj->getSenha() . "' where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from administrador where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from administrador", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from administrador where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
    
    function verificarEmail(Administrador $obj) {
        try {
            return $this->conexao->query("select * from administrador where email = '" . $obj->getEmail() . "'")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }

    function efetuarLogin(Administrador $obj) {
        try {
            return $this->conexao->query("select * from administrador where email = '" . $obj->getEmail() . "' and senha = '" . $obj->getSenha() . "'")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }
}
