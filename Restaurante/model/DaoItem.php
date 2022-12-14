<?php

class DaoItem {
    
    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    function inserir(Item $obj) {
        try {
            return $this->conexao->exec("insert into item (descricao, valor, observacao) values ('" . $obj->getDescricao() . "', " . $obj->getValor() . ", '" . $obj->getObservacao() . "')");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(Item $obj) {
        try {
            return $this->conexao->exec("update item set descricao = '" . $obj->getDescricao() . "', valor = " . $obj->getValor() . ", observacao = '" . $obj->getObservacao() . "' where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from item where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from item", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from item where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
}
