<?php

class DaoComanda {
    
    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    function inserir(Comanda $obj) {
        try {
            return $this->conexao->exec("insert into comanda (valor, situacao, idMesa, idCliente) values (" . $obj->getValor() . ", " . $obj->getSituacao() . ", " . $obj->getIdMesa() . ", " . $obj->getIdCliente() . ")");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(Comanda $obj) {
        try {
            return $this->conexao->exec("update comanda set valor = " . $obj->getValor() . ", situacao = " . $obj->getSituacao() . " where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from comanda where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from comanda", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from comanda where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
}
