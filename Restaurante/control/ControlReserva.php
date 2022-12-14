<?php

class ControlReserva {
    
    private $obj, $dao, $erros;
    
    function __construct() {
        $this->obj = new Reserva();
        $this->dao = new DaoReserva();
        $this->erros = array();
    }
    
    function inserir($data, $horario, $idMesa, $idCliente) {
        if (!strlen($data)) {
            $this->erros[] = "Informe a data";
        }
        if (!strlen($horario)) {
            $this->erros[] = "Informe o horário";
        }
        if (!strlen($idMesa)) {
            $this->erros[] = "Informe a mesa";
        }
        $reservas = $this->dao->listar();
        foreach ($reservas as $r) {
            $array = (explode(" ",$r->data));
            if ($data == $array[0] && $idMesa == $r->idMesa) {
                if ((strtotime($horario)) >= (strtotime($array[1]))) {
                    $calculo = (strtotime($horario)) - (strtotime($array[1]));
                } else {
                    $calculo = (strtotime($array[1])) - (strtotime($horario));
                }
                if ($calculo < 7200) {
                    $this->erros[] = "A mesa selecionada já foi reservada nesse período";
                    break;
                }
            }
        }
        if ($this->erros) {
            return false;
        } else {
            $data = $data . " " . $horario;
            $this->obj->setData($data);
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

    function editar($data, $horario, $idMesa, $id) {
        if (!strlen($data)) {
            $this->erros[] = "Informe a data";
        }
        if (!strlen($horario)) {
            $this->erros[] = "Informe o horário";
        }
        if (!strlen($idMesa)) {
            $this->erros[] = "Informe a mesa";
        }
        $reservas = $this->dao->listar();
        foreach ($reservas as $r) {
            $array = (explode(" ",$r->data));
            if ($data == $array[0] && $idMesa == $r->idMesa && $id != $r->id) {
                $calculo = $horario - $array[1];
                if ($calculo < "02:00:00") {
                    $this->erros[] = "A mesa selecionada já foi reservada nesse período";
                    break;
                }
            }
        }
        if ($this->erros) {
            return false;
        } else {
            $data = $data . " " . $horario;
            $this->obj->setId($id);
            $this->obj->setData($data);
            $this->obj->setIdMesa($idMesa); 
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
