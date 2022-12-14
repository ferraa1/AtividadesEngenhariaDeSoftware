<?php

class ControlDesconto {
    
    private $obj, $dao, $erros;
    
    function __construct() {
        $this->obj = new Desconto();
        $this->dao = new DaoDesconto();
        $this->erros = array();
    }
    
    function inserir($quantidadeVisitas, $descontoVisitas, $quantidadeConsumo, $descontoConsumo, $descontoAniversario) {
        if (!strlen($quantidadeVisitas)) {
            $this->erros[] = "Informe a quantidade de visitas";
        }
        if (!strlen($descontoVisitas)) {
            $this->erros[] = "Informe o desconto de visitas";
        }
        if (!strlen($quantidadeConsumo)) {
            $this->erros[] = "Informe a quantidade de consumo";
        }
        if (!strlen($descontoConsumo)) {
            $this->erros[] = "Informe o desconto de consumo";
        }
        if (!strlen($descontoAniversario)) {
            $this->erros[] = "Informe o desconto de aniversario";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setQuantidadeVisitas($quantidadeVisitas);
            $this->obj->setDescontoVisitas($descontoVisitas);
            $this->obj->setQuantidadeConsumo($quantidadeConsumo);
            $this->obj->setDescontoConsumo($descontoConsumo);
            $this->obj->setDescontoAniversario($descontoAniversario);
            if ($this->dao->inserir($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }

    function editar($quantidadeVisitas, $descontoVisitas, $quantidadeConsumo, $descontoConsumo, $descontoAniversario) {
        if (!strlen($quantidadeVisitas)) {
            $this->erros[] = "Informe a quantidade de visitas";
        }
        if (!strlen($descontoVisitas)) {
            $this->erros[] = "Informe o desconto de visitas";
        }
        if (!strlen($quantidadeConsumo)) {
            $this->erros[] = "Informe a quantidade de consumo";
        }
        if (!strlen($descontoConsumo)) {
            $this->erros[] = "Informe o desconto de consumo";
        }
        if (!strlen($descontoAniversario)) {
            $this->erros[] = "Informe o desconto de aniversario";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setId(1);
            $this->obj->setQuantidadeVisitas($quantidadeVisitas);
            $this->obj->setDescontoVisitas($descontoVisitas);
            $this->obj->setQuantidadeConsumo($quantidadeConsumo);
            $this->obj->setDescontoConsumo($descontoConsumo);
            $this->obj->setDescontoAniversario($descontoAniversario);
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
