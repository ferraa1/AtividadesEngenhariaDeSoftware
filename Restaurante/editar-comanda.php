<?php
require_once './model/Administrador.php';
require_once './model/DaoAdministrador.php';
require_once './control/ControlAdministrador.php';
$ctrlAdmin = new ControlAdministrador();
session_start();
if (!$_SESSION['email'] || $_SESSION['email'] != $ctrlAdmin->selecionar(1)->email) {
    header("Location: index.php");
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
                        <h3 class="mt-30 mb-15">Reserva</h3>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>

        <section class="story-area left-text center-sm-text">
            <div class="container">
                <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Reserva</h2>
                </div>

                <form class="form-style-1 placeholder-1">
                    <div class="row">
                        <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Name">  </div>
                        <div class="col-md-6"> <input class="mb-20" type="text" placeholder="E-mail">  </div>
                        <div class="col-md-12"><input class="mb-20" type="text" placeholder="Subject">  </div>
                        <div class="col-md-12">
                            <textarea class="h-200x ptb-20" placeholder="Message"></textarea></div>
                    </div><!-- row -->
                    <h6 class="center-text mtb-30"><a href="#" class="btn-primaryc plr-25"><b>RESERVAR</b></a></h6>
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