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
			<div class="text">LOADING...</div>
		</div>
	</div>
	<!-- END LOADER -->

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
                        <li><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li><span>Contact</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page-->
        <div class="container text-center">
            <h1>Contact</h1>
			<p>Mauris ornare tellus nec urna tincidunt, eget posuere velit tempus.</p>
        </div>
    </div><!-- end section -->

    <div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get In Touch</h3>
                <p class="lead">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, true generator<br> on the Internet. It uses a dictionary of over..</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contactaction.php" name="contactform" method="post">
                            <fieldset class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Website">
                                </div>                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center img-st">
                                    <button type="submit" value="SEND" id="submit" class="bttn-new-a">Get a Quote</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
				<div class="col-md-6">
					<div class="map-box">
						<div id="custom-places" class="small-map"></div>
					</div>
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="support" class="section db">
        <div class="container">
            <div class="row">
                <div id="logo-carousel" class="owl-carousel">
					<div> <img src="images/logo_01.png" alt=""> </div>
					<div> <img src="images/logo_02.png" alt=""> </div>
					<div> <img src="images/logo_03.png" alt=""> </div>
					<div> <img src="images/logo_04.png" alt=""> </div>
					<div> <img src="images/logo_05.png" alt=""> </div>
					<div> <img src="images/logo_06.png" alt=""> </div>
					<div> <img src="images/logo_01.png" alt=""> </div>
					<div> <img src="images/logo_02.png" alt=""> </div>
				</div>
            </div><!-- end row -->
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
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">GreatSEO</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/tippy.all.min.js"></script>
	<script>
		tippy('.btn-a')
	</script>

</body>
</html>

