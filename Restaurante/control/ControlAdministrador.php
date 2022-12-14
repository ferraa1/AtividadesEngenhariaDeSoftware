<?php

class ControlAdministrador {

    private $obj, $dao, $erros;

    function __construct() {
        $this->obj = new Administrador();
        $this->dao = new DaoAdministrador();
        $this->erros = array();
    }

    function inserir($email, $senha) {
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($senha)) {
            $this->erros[] = "Informe a senha";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setEmail($email);
            $this->obj->setSenha(md5($senha));
            if ($this->dao->inserir($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }

    function editar($email, $senha) {
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($senha)) {
            $this->erros[] = "Informe a senha";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setId(1);
            $this->obj->setEmail($email);
            $this->obj->setSenha(md5($senha));
            if ($this->dao->editar($this->obj)) {
                return true;
            } else {
                $this->erros[] = "Erro ao editar registro";
                return false;
            }
        }
    }

    public function efetuarLogin($email, $senha) {
        $this->obj->setEmail($email);
        $this->obj->setSenha(md5($senha));

        if ($this->dao->verificarEmail($this->obj)) { //verificar se email esta cadastrado
            if ($this->dao->efetuarLogin($this->obj)) { //verificar se a senha corresponde a este email
                $_SESSION['email'] = $this->obj->getEmail();
                return true;
            } else {
                $this->erros = "Dados incorretos!";
                return false;
            }
        } else {
            $this->erros = "Dados incorretos!";
            return false;
        }
    }

    public function efetuarLogout() {
        $_SESSION['email'] = null;
        session_destroy();
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
