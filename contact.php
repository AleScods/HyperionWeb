<!DOCTYPE html>
<html lang="en">

<?php
    include "layouts/head.php";
    ?>
<body class="seo_version">

    <!-- Start header -->
	<!-- Start header -->
	<?php
    include "layouts/header.php";
    ?>
	<!-- End header -->

    <div class="all-page-title" style="background-image:url(images/pattern-4.png);">
		<!--Page -->
        <div class="page-info">
            <div class="container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="index.html">Inicio</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li><span>Contacto</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page-->
        <div class="container text-center">
            <h1>Contacto</h1>
			<p>Contacta al equipo de Hyperion LSM, dudas y comentarios.</p>
        </div>
    </div><!-- end section -->

    <div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Envía un mensaje</h3>
                <p class="lead">Nos gustaría saber que es lo que opinas de la aplicación.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" name="contactform">
                            <fieldset class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Asunto">
                                </div>                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="text-center img-st">
                                    <button type="submit" value="submit" id="submit" class="bttn-new-a">Enviar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
				
            </div><!-- end row -->
            <div class="row col-md-12" id="respuesta">
                
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

	<!-- Start footer -->
	<?php
    include "layouts/footer.php";
    ?>
	<!-- End footer -->
	

	
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">HYPERION</a> </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/tippy.all.min.js"></script>
	<script>
		tippy('.btn-a')
	</script>

</body>
</html>

