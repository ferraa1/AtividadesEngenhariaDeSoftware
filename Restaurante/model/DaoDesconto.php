<?php

class DaoDesconto {
    
    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    function inserir(Desconto $obj) {
        try {
            return $this->conexao->exec("insert into desconto (quantidadeVisitas, descontoVisitas, quantidadeConsumo, descontoConsumo, descontoAniversario) values (" . $obj->getQuantidadeVisitas() . ", " . $obj->getDescontoVisitas() . ", " . $obj->getQuantidadeConsumo() . ", " . $obj->getDescontoConsumo() . ", " . $obj->getDescontoAniversario() . ")");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(Desconto $obj) {
        try {
            return $this->conexao->exec("update desconto set quantidadeVisitas = " . $obj->getQuantidadeVisitas() . ", descontoVisitas = " . $obj->getDescontoVisitas() . ", quantidadeConsumo = " . $obj->getQuantidadeConsumo() . ", descontoConsumo = " . $obj->getDescontoConsumo() . ", descontoAniversario = " . $obj->getDescontoAniversario() . " where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from desconto where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from desconto", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from desconto where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
}
