<!DOCTYPE html>
<html lang="en">
<?php
    include "layouts/head.php";
    ?>

<body class="seo_version">

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-new">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
			<div class="text">CARGANDO..</div>
		</div>
	</div>
	<!-- END LOADER -->

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
                        <li><span>Acerca de</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page-->
        <div class="container text-center">
            <h1>Sobre HYPERION LSM</h1>
			<p>Aplicación de aprendizaje de lengua de señas mexicano (LSM)</p>
        </div>
        <div class="container">
            <p> <b> Directora del proyecto: </b> <br>
                Dra. Aída Lucina González Lara <a style="font-color:white" href="mailto:aida.gonzalezlr@uanl.edu.mx "> aida.gonzalezlr@uanl.edu.mx  </a><br>
                <b> Estudiantes: </b><br>
                Orlando Miguel Leija Alvarez <br>
                Alejandra Monzerrat Fuentes Gonzalez <br>
                Luis Andrés García Contreras  <br>

             </p>
        </div>
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">GreatSEO</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/tippy.all.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
		tippy('.btn-a')
	</script>

</body>
</html>