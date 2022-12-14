<?php

class Desconto {
    
    private $id, $quantidadeVisitas, $descontoVisitas, $quantidadeConsumo, $descontoConsumo, $descontoAniversario;
    
    function __construct($quantidadeVisitas = null, $descontoVisitas = null, $quantidadeConsumo = null, $descontoConsumo = null, $descontoAniversario = null, $id = null) {
        $this->id = $id;
        $this->quantidadeVisitas = $quantidadeVisitas;
        $this->descontoVisitas = $descontoVisitas;
        $this->quantidadeConsumo = $quantidadeConsumo;
        $this->descontoConsumo = $descontoConsumo;
        $this->descontoAniversario = $descontoAniversario;
    }

    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">
    
    function getId() {
        return $this->id;
    }

    function getQuantidadeVisitas() {
        return $this->quantidadeVisitas;
    }

    function getDescontoVisitas() {
        return $this->descontoVisitas;
    }

    function getQuantidadeConsumo() {
        return $this->quantidadeConsumo;
    }

    function getDescontoConsumo() {
        return $this->descontoConsumo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setQuantidadeVisitas($quantidadeVisitas) {
        $this->quantidadeVisitas = $quantidadeVisitas;
    }

    function setDescontoVisitas($descontoVisitas) {
        $this->descontoVisitas = $descontoVisitas;
    }

    function setQuantidadeConsumo($quantidadeConsumo) {
        $this->quantidadeConsumo = $quantidadeConsumo;
    }

    function setDescontoConsumo($descontoConsumo) {
        $this->descontoConsumo = $descontoConsumo;
    }
    
    function getDescontoAniversario() {
        return $this->descontoAniversario;
    }

    function setDescontoAniversario($descontoAniversario) {
        $this->descontoAniversario = $descontoAniversario;
    }
    
    // </editor-fold>
}
