<?php

class DaoMesa {
    
    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    function inserir(Mesa $obj) {
        try {
            return $this->conexao->exec("insert into mesa (numero, lugares) values ( " . $obj->getNumero() . ", " . $obj->getLugares() . ")");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(Mesa $obj) {
        try {
            return $this->conexao->exec("update mesa set numero = " . $obj->getNumero() . ", lugares = " . $obj->getLugares() . " where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from mesa where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from mesa", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from mesa where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
}
