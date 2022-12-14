<?php session_start(); ?>
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
                        <h5><b>DIGA OLÁ</b></h5>
                        <h3 class="mt-30 mb-15">Contato</h3>
                    </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
            </div><!-- container -->
        </section>


        <section class="story-area left-text center-sm-text">
            <div class="container">
                <div class="heading">
                    <img class="heading-img" src="images/heading_logo.png" alt="">
                    <h2>Diga olá</h2>
                    <h5 class="mt-10 mb-30">Diga olá, envie uma mensagem</h5>
                    <p class="mx-w-700x mlr-auto">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium
                        elit elementum quis. Enean porttitor eros non ultrices convallis.
                        Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem.
                        Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus</p>
                </div>

                <form class="form-style-1 placeholder-1">
                    <div class="row">
                        <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Nome">  </div>
                        <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Email">  </div>
                        <div class="col-md-12"><input class="mb-20" type="text" placeholder="Assunto">  </div>
                        <div class="col-md-12">
                            <textarea class="h-200x ptb-20" placeholder="Mensagem"></textarea></div>
                    </div><!-- row -->
                    <h6 class="center-text mtb-30"><a href="#" class="btn-primaryc plr-25"><b>ENVIAR MENSSAGEM</b></a></h6>
                </form>
            </div><!-- container -->
        </section>


        <div class="map-area h-700x mb--30">
            <div id="map" style="height:100%;"></div>
        </div><!-- map-area -->

        <?php include 'footer.php'; ?>

        <!-- SCIPTS -->
        <script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
        <script src="plugin-frameworks/bootstrap.min.js"></script>
        <script src="plugin-frameworks/swiper.js"></script>
        <script src="common/scripts.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap"></script>

    </body>
</html>