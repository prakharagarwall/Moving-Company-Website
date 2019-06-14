<?php
$user = 'root';
$pwd = 'root';
$db = 'moving_company';
$host = 'localhost';

$link = mysqli_init();
$conn = mysqli_connect($host, $user, $pwd, $db);
    if ( !$conn ) {
        die("Connection failed : " );
        echo "connection failed";
    }
    else
    {
        echo "connected";
    }

?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Moving Company</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Animate CSS ===-->
    <link href="assets/css/plugins/animate.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
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
                        <a href="index3.html" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                        <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="#">Home</a>
                                </li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php">services</a></li>
								<li><a href="driver.php">Drivers</a></li>
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
                           
                                <li><a href="contact.php">Contact</a></li>
								<li><a href="faq.php">FAQ</a></li>
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

    <!--== Slider Area Start ==-->
    <section id="home-slider-area">
        <div class="home-slider-item slider-bg-1 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>BOOK A Truck TODAY!</h1>
                            <p>FOR AS LOW AS $30 AN HOUR PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-2 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>SAVE YOUR MONEY, BOOK AN ALIEN TO HELP YOURSELF OUT</h1>
                            <p>FOR AS LOW AS $15 AN HOUR PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item slider-bg-3 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slideshowcontent">
                            <h1>EASE YOUR HEADACHE</h1>
                            <p>FOR AS LOW AS $200 FOR COMPLETE HOUSE MOVING</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Slider Area End ==-->

    <!--== Book A Car Area Start ==-->
    <div id="book-a-car">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booka-car-content">
                        <form action="createbook.php" method= "get">
                            

                            <div class="pick-date bookinput-item">
                                <input id="startDate2" name="dates" placeholder="Date of Service" />
                            </div>

                            <div class="bookinput-item">
                                <input id="Source" name="source" placeholder="Source" />
                            </div>
                            <div class="bookinput-item">
                                <input id="Destination" name="dest" placeholder="Destination" />
                            </div>

                            <div class="car-choose bookinput-item">
                           <?php  echo   "<select class='custom-select' name='servicetype' >";?>
                                  <option selected>Service Type</option>
                                  <option value="Local">Local</option>
                                  <option value="Long Distance">Long Distance</option>
                                  <option value="International">International</option>
                                </select>
                            </div>
                            <div class="bookinput-item">
                                <?php 
                                
                                    $query = "SELECT service_id,service_name FROM service ";
                                
$result = mysqli_query ($conn,$query);
       
    if ($result->num_rows > 0) 
    {
        
        echo "<select class='custom-select' name='serviceid'> <option selected>Service Name</option>";
                                 
        while($row = $result->fetch_assoc()) 
        {       
            echo " <option value='". $row["service_id"] ."'>". $row["service_name"] ."</option>";

           }
           echo "</select>";}
                    
                    
                    

                                ?></div>

                            <div class="bookcar-btn bookinput-item">
                                <button type="submit">Book and request Quote</button>
                            </div>
                            </form>
                              </div>
               

                           <?php   
                           //$user = 'root';
//$pwd = 'root';
//$db = 'moving_company';
//$host = 'localhost:3307';

//$link = mysqli_init();
//$conn = mysqli_connect($host, $user, $pwd, $db);
 //   if ( !$conn ) {
   //     die("Connection failed : " . mysql_error());
//        echo "connection failed";
//    }
//    else
//    {
//        echo "connected";
//    }
//$con=mysqli_connect("localhost:3307","root","root","moving_company"); 


$query = "SELECT * FROM book where user_id=". 1 ;
$result = mysqli_query ($conn,$query);
       
    if ($result->num_rows > 0) 
    {
        echo "<table>";
        echo "<tr><td><h2> Services Available </h2></td></tr>";
        echo "<tr><td> booking id </td> <td>service id </td> <td>Service Type </td> <td>Source </td>  <td>Destination</td> <td>Dateofservice </td></tr>";
            
        while($row = $result->fetch_assoc()) 
        {       
            echo "<tr><td>" . $row["booking_id"] .  "</td><td>" . $row["service_id"] .  "</td><td>" . $row["Typeofservice"] .  "</td><td>  ". $row["source"] ."</td><td>".$row["Destination"]."</td><td> ".$row["Dateofservice"]."</td> ";

            echo "<td>";
                    
                    
                    echo "<a href='deletebook.php?id=". $row['booking_id'] ."' title='Delete Booking' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'>  Delete</span></a>";
                echo "</td>";
            echo "<tr>";
        }
        echo "</table>";
    
    } ?>
            </div>
            </div>
        </div>
    </div>                 
                       
                   
    <!--== Book A Car Area End ==-->
    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-1.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>RENTAL CAR</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-2.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>CAR REPAIR</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-3.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>TAXI SERVICE</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-4.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>life insurance</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-5.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>car wash</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-6.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>call driver</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->
            </div>
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">55000</span>+</p>
                                        <h4>HAPPY CLIENTS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">500</span>+</p>
                                        <h4>Trucks IN STOCK</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Our Cars Area Start ==-->
    <section id="our-cars" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Trucks</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>We have trucks available for both small space and large space capabilities</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content">
                        <div class="row">
                            <!-- OurCars Tab Menu start -->
                            <div class="col-lg-3">
                                <div class="ourcar-tab-menu">
                                    <ul class="nav nav-tabs" id="ourcartabmenu" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ourcar_item_1" data-toggle="tab" href="#ourcar_1" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_2" data-toggle="tab" href="#ourcar_2" role="tab" aria-selected="true">Audi A1 S-LINE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_3" data-toggle="tab" href="#ourcar_3" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_4" data-toggle="tab" href="#ourcar_4" role="tab" aria-selected="true">Audi A1 S-LINE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ourcar_item_5" data-toggle="tab" href="#ourcar_5" role="tab" aria-selected="true">VW Golf VII</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- OurCars Tab Menu End -->

                            <!-- OurCars Tab Content start -->
                            <div class="col-lg-9">
                                <div class="tab-content" id="ourcartabcontent">
                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade show active" id="ourcar_1" role="tabpanel" aria-labelledby="ourcar_item_1">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_2" role="tabpanel" aria-labelledby="ourcar_item_2">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_3" role="tabpanel" aria-labelledby="ourcar_item_3">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_4" role="tabpanel" aria-labelledby="ourcar_item_4">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->

                                    <!-- Single OurCars  start -->
                                    <div class="tab-pane fade" id="ourcar_5" role="tabpanel" aria-labelledby="ourcar_item_5">
                                        <div class="row">
                                            <div class="col-lg-8 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <div class="ourcar-pic">
                                                            <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="ourcar-info text-center">
                                                    <h2>$ 75.40 <span>Rent per day</span></h2>
                                                    <table class="our-table">
                                                        <tr>
                                                            <td>Model</td>
                                                            <td>Limousine</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doors</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Seats</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transmission</td>
                                                            <td>Automatic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air conditioning</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </table>
                                                    <a href="#" class="bookbtn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single OurCars End -->
                                </div>
                            </div>
                            <!-- OurCars Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Our Cars Area End ==-->


    <!--== Why Coose Us Start ==-->
    <section id="why-choose-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Why Coose Us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Moving never looked so good.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <!-- Why Choose Tab Menu -->
                        <div class="col-lg-4">
                            <ul class="nav nav-tabs" id="choosetabmenu" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="car-ins" data-toggle="tab" href="#car-insp" role="tab" aria-selected="true">EXPERTISE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="car-repair" data-toggle="tab" href="#car-repairw" role="tab" aria-selected="false">PACKING AND UNPACKING</a>
                                </li>
                              <li class="nav-item">
                                    <a class="nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab" aria-selected="false">DELIVERY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="vehiclemodels-tab" data-toggle="tab" href="#vehiclemodels" role="tab" aria-selected="false">VEHICLE AVAILABLE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ourrental-tab" data-toggle="tab" href="#ourrental" role="tab" aria-selected="false">OUR SERVICES</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Why Choose Tab Menu -->

                        <!-- Why Choose Tab Content -->
                        <div class="col-lg-8">
                            <div class="tab-content" id="choosetabcontent">
                                <div class="tab-pane fade show active" id="car-insp" role="tabpanel" aria-labelledby="car-ins">
                                    <div class="wchoose-content">
                                        <h4>EXPERTISE</h4>
                                        <p>Our crews have an average of 5+ years experience and handle 100,000+ moves each year.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>No matter the size of your household, depend on our residential movers. 
													We offer a wide variety of moving services in the Fort Worth area.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Stress less!! Our experienced Southlake moving crew can help make your transition smooth and comfortable.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>We’re here to support you through every phase of your move in Dallas. You will be assigned a 
													personal “Move Concierge” who has all the answers to your moving questions. 
													They can give you details on what to expect on move day, 
													or give you tips on the most efficient packing strategies. 
													</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>We also ensure that every moving crew comes prepared with bubble wrap, 
													blankets, and floor coverings to protect your home,
													belongings, and valuables from damages.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="car-repairw" role="tabpanel" aria-labelledby="car-repair">
                                    <div class="wchoose-content">
                                        <h4>PACKING & UNPACKING</h4>
                                        <p>We offer professional packing services that free up your valuable time. No more late nights getting ready for the move, 
										and even better… no more living out of boxes once you’re in your new home – you’ll know exactly where to find your 
										Spurs jersey.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Packing Service
													Our professional packers will take your move from stress free to hands free! 
													They will pack your belongings safely and get the job done in record time.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>Unpacking Service 
													Our professional packers can help unpack your belongings and organize each room for you! 
													Want your closet color-coded? No problem. Prepare to do absolutely nothing but relax!</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>Partial Services
													You also have the convenience of using our packing services for small jobs. 
													Whether you just need our packers to pack the kitchen or a closet - you decide when the clock stops.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Don't Just Take Our Word For It...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                                    <div class="wchoose-content">
                                        <h4>DELIVERY</h4>
                                        <p>We work with a third-party logistics partner to save money upfront. </p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>We use a cloud-based logistics platform making the delivery service more efficient by adopting logistics technology 
													that tracks the drivers, providing comprehensive data analytics.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span> We utilize automatic notifications along the delivery route. 
													Added benefits include improved customer satisfaction and reduced support burden</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>We maintain clarity on our delivery policy. 
													We are upfront and straightforward with customers about how we deliver things. </span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>We don’t make customers go 
													through a maze of pages, or register on our site just to see our shipping policy. </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="vehiclemodels" role="tabpanel" aria-labelledby="vehiclemodels-tab">
                                    <div class="wchoose-content">
                                        <h4>VEHICLE AVAILABLE</h4>
                                        <p>Cargo Van: This is a moving vehicle that has the capacity of holding studio type units and 1 bedroom apartments.</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>Pickups: This type of moving vehicle is available for small types of units. It can be used for partial moving or if you just need to move small items.
													It can also be helpful if you are going to make home improvements.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>10 foot truck: This is a type of moving trucks which is appropriate to be used for small apartments. 
													You can also move a bigger studio type apartment using this truck. 
													It is very cost effective in terms of gas consumption and it has the facilities in loading your items to make your life easier.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>17 foot truck: This moving truck is applicable for larger apartments and houses with 2 bedrooms. 
													It is very spacious which is essential if you have many things to load.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>20 foot truck: This type of moving trucks can be used for larger apartments or houses with 3 bedrooms.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="ourrental" role="tabpanel" aria-labelledby="ourrental-tab">
                                    <div class="wchoose-content">
                                        <h4>Our SERVICES</h4>
                                        <p>We provide trucks of various size for helping you move. Trucks range varies from 30$-80$ per hour</p>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-anchor"></i>
                                                    </div>
                                                    <span>We also provide national moving of your stuff, cost varies depending on the stuffs.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-delicious"></i>
                                                    </div>
                                                    <span>We also provide international moving of your stuff, cost varies depending on the stuffs and the location.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-bus"></i>
                                                    </div>
                                                    <span>We also provide aliens and avengers to help you move out quickly.</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-choose-item">
                                                    <div class="choose-icon">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                    <span>Storage solutions have never been easier if you live in the Houston area. 
													MovingCompany offers self-storage and MOVITS portable storage for your home or business.
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Why Coose Us End ==-->

    <!--== Mobile App Area Start ==-->
    <div id="mobileapp-video-bg"></div>
    <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2>SAVE 30% WITH THE APP</h2>
                        <p>Easy &amp; Fast - Book a Truck or an Alien in 60 seconds</p>
                        <div class="app-btns">
                            <a href="#"><i class="fa fa-android"></i> Android Store</a>
                            <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Mobile App Area End ==-->

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
                                    <form action="index.html">
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