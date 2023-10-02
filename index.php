<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/homestyle.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<!--	Title-->
<title>Real Estate Management System</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
		<style> @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Open+Sans:wght@300;400&display=swap'); </style>
		<style>
			*{
				font-family: 'Marcellus SC', serif;

			}
		</style>
</head>
<body>


<!--	Page Loader  -->

<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="#"><i class="fas fa-phone-alt text-info mr-1"></i>01987818351</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-info mr-1"></i>anikasarker246@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-info mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
							<a href="login.php">Login</a>&nbsp;&nbsp;
								
								| </li>
								<li><i class="fas fa-user-plus text-info mr-1"></i><a href="register.php"> Register</li><?php } ?>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/banner.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <br>
                            <h1 class="text-align-center" style="color: white; text-align:center">We are Here To Serve You</h1>
                           
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                
        <!--	Banner End  -->
        
        <!--	Text Block One-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary  text-center mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6" >
                            <div class="p-4 text-center hover-bg hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-info flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-white py-3 m-0"><a href="#">Selling Service</a></h5>
                                <p class="text-black ">We sale the available property that we have...</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-list text-info flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Rental Service</a></h5>
                                <p>We give rent the available property that we have...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-info flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Legal Investment</a></h5>
                                <p>Legal investigation can be done for verification...</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-investor text-info flat-medium icon-success" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Discussion</a></h5>
                                <p>Before selling we discuss each and everything with the client</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-----  Our Services  ---->
		
        
        
        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/why.png'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-info" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Top Rated</h5>
										<p>We are the top rated company that you will found</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-info" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>We have the experiece to give the good services to our client</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-info" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experienced Agents</h5>
										<p>We have experienced agents</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary  text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-info text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Discussion about the property</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-info text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Client can review the files</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-info text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Getting the property</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	How It Work -->
        
        <!--	Achievement-->
        <div class="full-row overlay-secondary" style="background-color:gray; background-size: cover; background-position: center center; background-repeat: no-repeat; ">
            <div class="container">
                <div class="fact-counter" >
                    <div class="row" >
                        <div class="col-md-4" >
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-info my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5" style="font-family: 'Marcellus SC', serif;">Property Available</div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-info my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5" style="font-family: 'Marcellus SC', serif;">Sale Property Available</div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-info my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5" style="font-family: 'Marcellus SC', serif;">Rent Property Available</div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
		<!--	Testonomial -->
		<div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class=" text-secondary position-relative pb-4 mb-4">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-info">
									
										<?php
													
												$query=mysqli_query($con,"select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item">
											<div class="p-4 bg-info down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-success d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"></span>
											</div>
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<!--	Testonomial -->
		
		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-info text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</body>

</html>