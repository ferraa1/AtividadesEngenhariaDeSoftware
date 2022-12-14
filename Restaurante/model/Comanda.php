<?php

class Comanda {

    private $id, $valor, $situacao, $idMesa, $idCliente;

    function __construct($valor = null, $situacao = null, $idMesa = null, $idCliente = null, $id = null) {
        $this->id = $id;
        $this->valor = $valor;
        $this->situacao = $situacao;
        $this->idMesa = $idMesa;
        $this->idCliente = $idCliente;
    }

    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">

    function getId() {
        return $this->id;
    }

    function getValor() {
        return $this->valor;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getIdMesa() {
        return $this->idMesa;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    function setIdMesa($idMesa) {
        $this->idMesa = $idMesa;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }
    
    // </editor-fold>
}
