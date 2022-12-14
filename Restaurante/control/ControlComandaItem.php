<?php

class ControlComandaItem {

    private $obj, $dao, $erros;

    function __construct() {
        $this->obj = new ComandaItem();
        $this->dao = new DaoComandaItem();
        $this->erros = array();
    }

    function inserir($idComanda, $idItem) {
        if (!strlen($idComanda)) {
            $this->erros[] = "Informe a comanda";
        }
        if (!strlen($idItem)) {
            $this->erros[] = "Informe o item";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setIdComanda($idComanda);
            $this->obj->setIdItem($idItem);
            if ($this->dao->inserir($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }

    function editar($idComanda, $idItem, $id) {
        if (!strlen($idComanda)) {
            $this->erros[] = "Informe a comanda";
        }
        if (!strlen($idItem)) {
            $this->erros[] = "Informe o item";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setId($id);
            $this->obj->setIdComanda($idComanda);
            $this->obj->setIdItem($idItem);            
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
