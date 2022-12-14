<?php

class Item {
    
    private $id, $descricao, $valor, $observacao;
    
    function __construct($descricao = null, $valor = null, $observacao = null, $id = null) {
        $this->id = $id;
        $this->desconto = $descricao;
        $this->valor = $valor;
        $this->observacao = $observacao;
    }
    
    // <editor-fold defaultstate="collapsed" desc="Getters and Setters">

    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }
    
    // </editor-fold>
}
