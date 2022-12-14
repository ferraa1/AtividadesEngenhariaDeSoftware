<?php

class ControlCliente {

    private $obj, $dao, $erros;

    function __construct() {
        $this->obj = new Cliente();
        $this->dao = new DaoCliente();
        $this->erros = array();
    }

    function inserir($cpf, $nome, $nascimento, $endereco, $email, $senha) {
        if (!strlen($cpf)) {
            $this->erros[] = "Informe o CPF";
        }
        if (!strlen($nome)) {
            $this->erros[] = "Informe o nome";
        }
        if (!strlen($nascimento)) {
            $this->erros[] = "Informe a data de nascimento";
        }
        if (!strlen($endereco)) {
            $this->erros[] = "Informe o endereço";
        }
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($senha)) {
            $this->erros[] = "Informe a senha";
        }
        $clientes = $this->dao->listar();
        foreach ($clientes as $c) {
            if ($cpf == $c->cpf) {
                $this->erros[] = "CPF já cadastrado";
                break;
            }
        }
        $clientes = $this->dao->listar();
        foreach ($clientes as $c) {
            if ($email == $c->email) {
                $this->erros[] = "Email já cadastrado";
                break;
            }
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setCpf($cpf);
            $this->obj->setNome($nome);
            $this->obj->setNascimento($nascimento);
            $this->obj->setEndereco($endereco);
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

    function editar($nome, $endereco, $email, $senha, $id) {
        if (!strlen($nome)) {
            $this->erros[] = "Informe o nome";
        }
        if (!strlen($endereco)) {
            $this->erros[] = "Informe o endereço";
        }
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($senha)) {
            $this->erros[] = "Informe a senha";
        }
        $clientes = $this->dao->listar();
        foreach ($clientes as $c) {
            if ($email == $c->email) {
                $this->erros[] = "Email já cadastrado";
                break;
            }
        }
        if ($this->erros) {
            return false;
        } else {
            $this->obj->setId($id);
            $this->obj->setNome($nome);
            $this->obj->setEndereco($endereco);
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
    
    function selecionarEmail($email) {
        return $this->dao->selecionarEmail($email);
    }

    function getErros() {
        return $this->erros;
    }

    // </editor-fold>
}
