<?php
session_start();
require_once './model/Administrador.php';
require_once './model/DaoAdministrador.php';
require_once './control/ControlAdministrador.php';
$ctrlAdmin = new ControlAdministrador();
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
                        <h3 class="mt-30 mb-15">Painel</h3>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>

        <section>
            <div class="container">
                <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Painel</h2>
                    <h5 class="mt-10 mb-30">Selecione uma Opção</h5>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <ul class="selecton brdr-b-primary mb-70">
                            <li><a class="active" href="#" data-select="*"><b>TUDO</b></a></li>
                            <li><a href="#" data-select="cliente"><b>CLIENTES</b></a></li>
                            <li><a href="#" data-select="mesa"><b>MESAS</b></a></li>
                            <li><a href="#" data-select="cardapio"><b>CARDÁPIO</b></a></li>
                            <li><a href="#" data-select="reserva"><b>RESERVAS</b></a></li>
                            <li><a href="#" data-select="desconto"><b>DESCONTO</b></a></li>
                            <li><a href="#" data-select="administrador"><b>ADMINISTRADOR</b></a></li>
                        </ul>
                    </div><!--col-sm-12-->
                </div><!--row-->

                <div class="row">
                    <div class="col-md-6 food-menu cliente">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="listar-cliente.php"><b>Listar Clientes</b></a></h5>
                                <p class="pr-70">Liste os cliente. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                    
                    <div class="col-md-6 food-menu cliente">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="registrar-cliente.php"><b>Registrar Cliente</b></a></h5>
                                <p class="pr-70">Registre um cliente. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu mesa">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="listar-mesa.php"><b>Listar Mesas</b></a></h5>
                                <p class="pr-70">Liste as mesas. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                    
                    <div class="col-md-6 food-menu mesa">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="registrar-mesa.php"><b>Registrar Mesa</b></a></h5>
                                <p class="pr-70">Registre uma mesa. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu cardapio">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="listar-item.php"><b>Listar Itens</b></a></h5>
                                <p class="pr-70">Liste os itens. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                    
                    <div class="col-md-6 food-menu cardapio">
                        <div class="sided-90x mb-30">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="registrar-item.php"><b>Registrar Item</b></a></h5>
                                <p class="pr-70">Registre um item. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                    
                    <div class="col-md-6 food-menu reserva">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="listar-reserva.php"><b>Listar Reservas</b></a></h5>
                                <p class="pr-70">Liste as reservas. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                    
                    <div class="col-md-6 food-menu reserva">
                        <div class="sided-90x mb-30">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="registrar-reserva.php"><b>Registrar Reserva</b></a></h5>
                                <p class="pr-70">Registre uma reserva. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->

                    <div class="col-md-6 food-menu desconto">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="editar-desconto.php"><b>Editar Descontos</b></a></h5>
                                <p class="pr-70">Edite os descontos. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                    
                    <div class="col-md-6 food-menu administrador">
                        <div class="sided-90x mb-30 ">
                            <div class="s-right">
                                <h5 class="mb-10"><a href="editar-administrador.php"><b>Editar Administrador</b></a></h5>
                                <p class="pr-70">Edite o administrador. </p>
                            </div><!--s-right-->
                        </div><!-- sided-90x -->
                    </div><!-- food-menu -->
                </div><!-- row -->

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