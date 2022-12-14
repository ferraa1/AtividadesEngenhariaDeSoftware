<?php

class Reserva {
    
    private $id, $data, $idMesa, $idCliente;
    
    function __construct($data = null, $idMesa = null, $idCliente = null, $id = null) {
        $this->id = $id;
        $this->data = $data;
        $this->idMesa = $idMesa;
        $this->idCliente = $idCliente;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">

    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
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

    function setData($data) {
        $this->data = $data;
    }

    function setIdMesa($idMesa) {
        $this->idMesa = $idMesa;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    // </editor-fold>
}
