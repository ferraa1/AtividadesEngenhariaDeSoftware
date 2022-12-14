<?php

class ControlMesa {
    
    private $obj, $dao, $erros;
    
    function __construct() {
        $this->obj = new Mesa();
        $this->dao = new DaoMesa();
        $this->erros = array();
    }
    
    function inserir($numero, $lugares) {
        if (!strlen($numero)) {
            $this->erros[] = "Informe o número";
        }
        if (!strlen($lugares)) {
            $this->erros[] = "Informe os lugares";
        }
        $mesas = $this->dao->listar();
        foreach ($mesas as $m) {
            if ($numero == $m->numero) {
                $this->erros[] = "Número já cadastrado";
                break;
            }
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setNumero($numero);
            $this->obj->setLugares($lugares);
            if ($this->dao->inserir($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }

    function editar($numero, $lugares, $id) {
        if (!strlen($numero)) {
            $this->erros[] = "Informe o número";
        }
        if (!strlen($lugares)) {
            $this->erros[] = "Informe os lugares";
        }
        $mesas = $this->dao->listar();
        foreach ($mesas as $m) {
            if ($numero == $m->numero) {
                $this->erros[] = "Número já cadastrado";
                break;
            }
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setId($id);
            $this->obj->setNumero($numero);
            $this->obj->setLugares($lugares);          
            if ($this->dao->editar($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao editar registro";
                return false;
            }
        }
    }

    // <editor-fold defaultstate="collapsed" desc="excluir($id), listar(), selecionar($id) e getErros()">
    
    function excluir($id) {
        if ($this->dao->excluir($id)) {
            return true;
        } else {
            $this->erros[] = "Erro ao excluír registro";
        }
    }

    function listar() {
        return $this->dao->listar();
    }

    function selecionar($id) {
        return $this->dao->selecionar($id);
    }

    function getErros() {
        return $this->erros;
    }
    
    // </editor-fold>
}
