<?php
require_once './model/Administrador.php';
require_once './model/DaoAdministrador.php';
require_once './control/ControlAdministrador.php';
$ctrlAdmin = new ControlAdministrador();
session_start();
if (!$_SESSION['email'] || $_SESSION['email'] != $ctrlAdmin->selecionar(1)->email) {
    header("Location: index.php");
}

require_once './model/Desconto.php';
require_once './model/DaoDesconto.php';
require_once './control/ControlDesconto.php';

$control = new ControlDesconto();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($control->editar($_POST['quantidadeVisitas'], $_POST['descontoVisitas'], $_POST['quantidadeConsumo'], $_POST['descontoConsumo'], $_POST['descontoAniversario'])) {
        $mensagem = "Descontos editados com sucesso";
        unset($_POST);
    } else {
        $erros = "";
        foreach ($control->getErros() as $e) {
            $erros = $erros . $e . "<br>";
        }
    }
}

$obj = $control->selecionar(1);
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
                        <h3 class="mt-30 mb-15">Descontos</h3>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>

        <section class="story-area left-text center-sm-text">
            <div class="container">
                <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Descontos</h2>
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
                        <div class="col-md-6">Quantidade de Visitas: <br> <input class="mb-20" name="quantidadeVisitas" id="quantidadeVisitas" required="required" type="number" placeholder="Quantidade de Visitas" value="<?php echo $obj->quantidadeVisitas ?>" min="1">  </div>
                        <div class="col-md-6">Desconto de Visitas: <br> <input class="mb-20" name="descontoVisitas" id="descontoVisitas" required="required" type="number" placeholder="Desconto de Visitas" value="<?php echo $obj->descontoVisitas ?>" min="0" max="100">  </div>
                        <div class="col-md-6">Quantidade de Consumo: <br> <input class="mb-20" name="quantidadeConsumo" id="quantidadeConsumo" required="required" type="number" placeholder="Quantidade de Consumo" value="<?php echo $obj->quantidadeConsumo ?>" min="1">  </div>
                        <div class="col-md-6">Desconto de Consumo: <br> <input class="mb-20" name="descontoConsumo" id="descontoConsumo" required="required" type="number" placeholder="Desconto de Consumo" value="<?php echo $obj->descontoConsumo ?>" min="0" max="100">  </div>
                        <div class="col-md-6">Desconto de Aniversário: <br> <input class="mb-20" name="descontoAniversario" id="descontoAniversario" required="required" type="number" placeholder="Desconto de Aniversário" value="<?php echo $obj->descontoAniversario ?>" min="0" max="100">  </div>
                    </div><!-- row -->
                    <div style="text-align: center">
                        <button type="submit" style="color: white"><h6 class="center-text mtb-30"><a class="btn-primaryc plr-25"><b>EDITAR</b></a></h6></button>
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