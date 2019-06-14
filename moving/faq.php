<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Moving Company</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Richardson, Texas
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +1 214 931 7441
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Sun 09.00 - 21.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index3.php" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->
      <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="index3.php">Home</a>
                                </li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php">services</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#">FAQ</a></li>
								<?php
						
								if(isset($_SESSION["user"])){
								$user = $_SESSION["user"];
								if(strlen($user) > 0){
									echo "<li><a href='logout.php'>$user</a></li>";
								}
								}else{
									echo "<li><a href='login.php'>Login/Signup</a>
                                </li>";
								}
								?>
                                
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>FAQ's</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Some of the most frequently asked questions are mentioned below.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== FAQ Area Start ==-->
    <section id="faq-page-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- FAQ Content Start -->
				<div class="col-lg-8">
					<div class="faq-details-content">
						<!-- Single FAQ Subject  Start -->
						<div class="single-faq-sub">
							<h3>Payment</h3>
							<div class="single-faq-sub-content">
								<div id="accordion">
									<!-- Single FAQ Start -->
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<span>How much does it cost to do a moving?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>

										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
												Basically, it depends upon what type of moving you are requesting, like Local moving has a different cost, National moving has a different cost, International moving has a different.
												Costs also depends upon how much you have to move, and do you require man power, packing, unpacking, loading, unloading.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->
									
									<!-- Single FAQ Start -->
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  			<span>Do I have to make reservation?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
									  		</button></h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
											Yes, you have to make a reservation for a specific date, by mentioning the source and the destination, as we are in huge demand so beacause of it 
											a particular date might not be available.
											</div>
										</div>
									</div>
									<!-- Single FAQ Start -->
									
									<!-- Single FAQ End -->
									<div class="card">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  			<span>What is your refund policy?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
											We do not require any refunding policy, because we do not charge you untill the complete moving is done, we send you the
											quotes for the complete cost that you need to pay for moving, and then we help you in best way possible, if any extra service
											is being provided by us then we charge extra accordingly.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->
								</div>
							</div>
						</div>
						<!-- Single FAQ Subject End -->
						
						<!-- Single FAQ Subject  Start -->
						<div class="single-faq-sub">
							<h3>Preparation</h3>
							<div class="single-faq-sub-content">
								<div id="accordion_2">
									<!-- Single FAQ Start -->
									<div class="card">
										<div class="card-header" id="heading4">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
												<span>Do I have to pack and unpack the items to be moved?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>

										<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion_2">
											<div class="card-body">
												It Depends whether you are asking for the man power along with the moving service to pack and unpack. If you have already taken the service
												then sit tight we will do everything, else you have to pack and unpack everything in the best possible way.So, that your stuff is safe.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->
									<div class="card">
										<div class="card-header" id="headingFive">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									  			<span>What is your refund policy?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>
										<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion_2">
											<div class="card-body">
											Since we do not charge you before any serice is been provided, therefore there is no as such refund policy, for more inofrmation you can conatct us.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->
									
									<!-- Single FAQ End -->
									<div class="card">
										<div class="card-header" id="headingSix">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									  			<span>Can’t Find Answer? Ask Us</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>
										<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion_2">
											<div class="card-body">
												If you cannot find the answer or the question you are looking for Email us or text us, we will get back to you ASAP.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->
								</div>
							</div>
						</div>
						<!-- Single FAQ Subject End -->
					</div>
				</div>
                <!-- FAQ Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>For More Informations</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +1-(214)-(931)-7441</p>
                                <p><i class="fa fa-clock-o"></i> Mon - Sun 9.00 - 21.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Rental Tips</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service1-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h6>Use Your Towels and Sheets</h6>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h6>Pack a electronics properly</h6>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service2-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h6>Find Free Moving Boxes</h6>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h6>Pack Mirrors and Pictures</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Connect with Us</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== FAQ Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="assets/img/logo.png" alt="JSOFT">
                                <p>Movingcompany helps people and businesses move their goods from one place to another. It offers all inclusive services for
								relocations like packing, loading, moving, unloading, unpacking, arranging of items to be shifted. 
								Additional services may include cleaning services for houses, offices or warehousing facilities.</p>

                                <div class="newsletter-area">
                                    <form action="index3.php">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>We are available 24*7, Contact us below</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Richardson Texas</li>
                                    <li><i class="fa fa-mobile"></i> +12149317441</li>
                                    <li><i class="fa fa-envelope"></i> MovingCompany@gmail.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/M3grMfvRbJ82" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->
    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>