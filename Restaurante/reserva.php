<?php
session_start();
require_once './model/Administrador.php';
require_once './model/DaoAdministrador.php';
require_once './control/ControlAdministrador.php';
$ctrlAdmin = new ControlAdministrador();
if (!$_SESSION['email'] || $_SESSION['email'] == $ctrlAdmin->selecionar(1)->email) {
    header("Location: index.php");
}
require_once './model/Reserva.php';
require_once './model/DaoReserva.php';
require_once './control/ControlReserva.php';
require_once './model/Mesa.php';
require_once './model/DaoMesa.php';
require_once './control/ControlMesa.php';
require_once './model/Cliente.php';
require_once './model/DaoCliente.php';
require_once './control/ControlCliente.php';

$control = new ControlReserva();
$ctrlMesa = new ControlMesa();
$ctrlCliente = new ControlCliente();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($control->inserir($_POST['data'], $_POST['horario'], $_POST['mesa'], $_POST['cliente'])) {
        $mensagem = "Reserva registrado com sucesso";
        unset($_POST);
    } else {
        $erros = "";
        foreach ($control->getErros() as $e) {
            $erros = $erros . $e . "<br>";
        }
    }
}

$tomorrow = date("Y-m-d", strtotime('tomorrow'));
$mesas = $ctrlMesa->listar();
$clientes = $ctrlCliente->listar();
$idCliente;

foreach ($clientes as $c) {
    if ($c->email == $_SESSION['email']) {
        $idCliente = $c->id;
        break;
    }
}

?>
<!DOCTYPE HTML>
<html lang="en">

    <?php include 'head.php'; ?>

    <body>

        <?php include 'header.php'; ?>

        <section class="bg-6 h-500x main-slider pos-relative">
            <div class="triangle-up pos-bottom"></div>
            <div class="container h-100">
                <div class="dplay-tbl">
                    <div class="dplay-tbl-cell center-text color-white pt-90">
                        <h5><b>A MELHOR PIZZA DO MUNDO</b></h5>
                        <h3 class="mt-30 mb-15">Reservar Mesa</h3>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>

        <section class="story-area left-text center-sm-text">
            <div class="container">
                <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Reservar Mesa</h2>
                    <?php if (isset($mensagem)) { ?>
                        <div class="alert alert-success">
                            <h5 class="mt-10 mb-30"><?php echo $mensagem; ?></h5>
                        </div>
                    <?php } ?>
                    <?php if (isset($erros)) { ?>
                        <div class="alert alert-danger">
                            <h5 class="mt-10 mb-30"><?php echo $erros; ?></h5>
                        </div>
                    <?php } ?>
                </div>

                <form action="" method="POST" id="form" class="form-style-1 placeholder-1">
                    <div class="row">
                        
                        <div class="col-md-6">Data: <br> <input class="mb-20" name="data" id="data" required="required" type="date" placeholder="Data" value="<?php echo $tomorrow; ?>" min="<?php echo $tomorrow; ?>">  </div>
                        <div class="col-md-6">Horário: <br> <input class="mb-20" name="horario" id="horario" required="required" type="time" placeholder="Horário" value="18:00" min="18:00" max="22:00">  </div>
                        
                        <div class="col-md-6">Número da Mesa: <br> 
                            
                            <select class="form-control" name="mesa">
                                <option value="" placeholder="Mesa" required="required"> </option>
                                <?php foreach ($mesas as $m) { ?>
                                    <option value="<?php echo $m->id ?>"><?php echo $m->numero ?> (<?php echo $m->lugares ?> lugares)</option>
                                <?php } ?>
                            </select>
                        
                        </div>
                        
                        <input type="hidden" value="<?php echo $idCliente ?>" name="cliente" id="cliente"/>
                            
                    </div><!-- row -->
                    <div style="text-align: center">
                        <button type="submit" style="color: white"><h6 class="center-text mtb-30"><a class="btn-primaryc plr-25"><b>REGISTRAR</b></a></h6></button>
                    </div>
                </form>
            </div><!-- container -->
        </section>

        <?php include 'footer.php'; ?>

        <!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>

    </body>
</html>