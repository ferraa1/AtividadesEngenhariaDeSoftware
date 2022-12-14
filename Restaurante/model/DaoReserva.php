<?php

class DaoReserva {
    
    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=resturante", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    function inserir(Reserva $obj) {
        try {
            return $this->conexao->exec("insert into reserva (data, idMesa, idCliente) values ('" . $obj->getData() . "', " . $obj->getIdMesa() . ", " . $obj->getIdCliente() . ")");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
            return false;
        }
    }

    function editar(Reserva $obj) {
        try {
            return $this->conexao->exec("update reserva set data = '" . $obj->getData() . "', idMesa = " . $obj->getIdMesa() . " where id = " . $obj->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from reserva where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from reserva ", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from reserva where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            return false;
        }
    }
}
