<?php

class ComandaItem {
    
    private $idComanda, $idItem;
    
    function __construct($idComanda = null, $idItem = null) {
        $this->idComanda = $idComanda;
        $this->idItem = $idItem;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">

    function getIdComanda() {
        return $this->idComanda;
    }

    function getIdItem() {
        return $this->idItem;
    }

    function setIdComanda($idComanda) {
        $this->idComanda = $idComanda;
    }

    function setIdItem($idItem) {
        $this->idItem = $idItem;
    }
        
    // </editor-fold>
}
