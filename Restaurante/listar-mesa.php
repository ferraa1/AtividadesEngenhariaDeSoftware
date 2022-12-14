<?php
require_once './model/Administrador.php';
require_once './model/DaoAdministrador.php';
require_once './control/ControlAdministrador.php';
$ctrlAdmin = new ControlAdministrador();
session_start();
if (!$_SESSION['email'] || $_SESSION['email'] != $ctrlAdmin->selecionar(1)->email) {
    header("Location: index.php");
}

require_once './model/Mesa.php';
require_once './model/DaoMesa.php';
require_once './control/ControlMesa.php';

$control = new ControlMesa();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($control->excluir(addslashes($_POST['id']))) {
        $mensagem = "Mesa excluida com sucesso";
        unset($_POST);
    } else {
        $erros = "";
        foreach ($control->getErros() as $e) {
            $erros = $erros . $e . "<br>";
        }
    }
}

$obj = $control->listar();

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
                        <h3 class="mt-30 mb-15">Listar Mesas</h3>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>

        <section class="story-area bg-seller color-white pos-relative" style="background: none">
            <div class="pos-bottom triangle-up"></div>
            <div class="pos-top triangle-bottom"></div>
            <div class="container">
                <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Mesas</h2>
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

                <form action="" method="POST" id="form">
                    <input type="hidden" value="" name="id" id="id"/>
                    <input type="hidden" value="" name="acao" id="acao"/>
                    <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3"
                         data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="false" data-swpr-responsive="[1, 2, 2, 2]">

                        <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">

                            <?php if ($obj) { foreach ($obj as $o) { ?>
                                <div class="swiper-slide">
                                    <h4><?php echo $o->numero ?></h4>
                                    <p class="color-ash mb-50 mb-sm-30 mt-20">Lugares: <?php echo $o->lugares ?></p>
                                    <h6><a href="#" class="color-primary editar" rel="<?php echo $o->id ?>">Editar</a>, <a href="#" class="color-primary excluir" rel="<?php echo $o->id ?>">Remover</a></h6>
                                </div><!-- swiper-slide -->
                            <?php } } ?>

                        </div><!-- swiper-wrapper -->

                        <div class="swiper-pagination"></div>
                    </div><!-- swiper-container -->
                </form>
            </div><!-- container -->
        </section>

<?php include 'footer.php'; ?>

        <!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>
        <script>
            $(document).ready(function () {
                $(".editar").click(function () {
                    id = $(this).attr("rel");
                    $(location).attr("href", "editar-mesa.php?id=" + id);
                });
                $(".excluir").click(function () {
                    if (confirm("Deseja realmente excluir o registro?")) {
                        id = $(this).attr("rel");
                        $("#id").val(id);
                        $("#form").submit();
                    }
                });
            });
        </script>

    </body>
</html>