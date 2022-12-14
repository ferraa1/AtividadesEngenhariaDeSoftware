<?php

class ControlItem {
    
    private $obj, $dao, $erros;
    
    function __construct() {
        $this->obj = new Item();
        $this->dao = new DaoItem();
        $this->erros = array();
    }
    
    function inserir($descricao, $valor, $observacao) {
        if (!strlen($descricao)) {
            $this->erros[] = "Informe a descrição";
        }
        if (!strlen($valor)) {
            $this->erros[] = "Informe o valor";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setDescricao($descricao);
            $this->obj->setValor($valor);
            $this->obj->setObservacao($observacao);
            if ($this->dao->inserir($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }

    function editar($descricao, $valor, $observacao, $id) {
        if (!strlen($descricao)) {
            $this->erros[] = "Informe a descrição";
        }
        if (!strlen($valor)) {
            $this->erros[] = "Informe o valor";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setId($id);
            $this->obj->setDescricao($descricao);
            $this->obj->setValor($valor);
            $this->obj->setObservacao($observacao);
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
