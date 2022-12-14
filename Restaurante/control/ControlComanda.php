<?php

class ControlComanda {
    
    private $obj, $dao, $erros;
    
    function __construct() {
        $this->obj = new Comanda();
        $this->dao = new DaoComanda();
        $this->erros = array();
    }
    
    function inserir($valor, $situacao, $idMesa, $idCliente) {
        if (!strlen($valor)) {
            $this->erros[] = "Informe o valor";
        }
        if (!strlen($situacao)) {
            $this->erros[] = "Informe a situação";
        }
        if (!strlen($idMesa)) {
            $this->erros[] = "Informe a mesa";
        }
        if (!strlen($idCliente)) {
            $this->erros[] = "Informe o cliente";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setValor($valor);
            $this->obj->setSituacao($situacao);
            $this->obj->setIdMesa($idMesa);
            $this->obj->setIdCliente($idCliente);
            if ($this->dao->inserir($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }

    function editar($valor, $situacao, $id) {
        if (!strlen($valor)) {
            $this->erros[] = "Informe o valor";
        }
        if (!strlen($situacao)) {
            $this->erros[] = "Informe a situação";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setId($id);
            $this->obj->setValor($valor);
            $this->obj->setSituacao($situacao);
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
