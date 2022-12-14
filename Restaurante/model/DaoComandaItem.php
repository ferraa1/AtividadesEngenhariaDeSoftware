<?php

class DaoComandaItem {
    
    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    function inserir(ComandaItem $obj) {
        try {
            return $this->conexao->exec("insert into comanda_item (idReserva, idItem) values (" . $obj->getIdReserva() . ", " . $obj->getIdItem() . ")");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(ComandaItem $obj) {
        try {
            return $this->conexao->exec("update comanda_item set idReserva = " . $obj->getIdReserva() . ", idItem = " . $obj->getIdItem() . " where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from comanda_item where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from comanda_item", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from comanda_item where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
}
