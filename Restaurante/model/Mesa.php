<?php

class Mesa {
    
    private $id, $numero, $lugares;
    
    function __construct($numero = null, $lugares = null, $id = null) {
        $this->id = $id;
        $this->numero = $numero;
        $this->lugares = $lugares;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">

    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getLugares() {
        return $this->lugares;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setLugares($lugares) {
        $this->lugares = $lugares;
    }
    
    // </editor-fold>
}
