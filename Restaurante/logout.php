<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: index.php");
}

require_once './model/Administrador.php';
require_once './model/DaoAdministrador.php';
require_once './control/ControlAdministrador.php';
require_once './model/Cliente.php';
require_once './model/DaoCliente.php';
require_once './control/ControlCliente.php';

$ctrlAdmin = new ControlAdministrador();
$ctrlCliente = new ControlCliente();

if ($_SESSION['email'] == $ctrlAdmin->selecionar(1)->email) {
    $ctrlAdmin->efetuarLogout();
} else {
    $ctrlCliente->efetuarLogout();
}
header("Location: index.php");
