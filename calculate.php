<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include "config.php";

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
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
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
<link rel="stylesheet" href="css/calcstyle.css">


<!--	Title> -->
<title>Real Estate Management System</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row">
        <!--	Header start  -->
		<?php include "include/header.php";?>
        <!--	Header end  -->
        <div class="full-row bg-gray" >
            <div class="container">
            <center>
                <div class="row-md-6">

                    <div class="col-lg-6">
                    
                        <h4 class=" text-secondary position-relative pb-4 my-4">Check out the installment</h4>
                        <form class="d-inline-block w-100" action="calc.php" method="get">

                            <label class="sr-only" >Property Amount </label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                    <?php
													
													$query=mysqli_query($con,"select * from property");
													while($row=mysqli_fetch_row($query))
													{
												?>

                                </div>
                                <input type="text" class="form-control" name="amount" value="<?php echo $row['13']; ?>" placeholder="Property Price">
                                <?php
												} 
												?>
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Month">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate" value="30">
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-info mt-4">Calclute Instalment</button> 
                        </form>

                    </div>
                </div>
                </center>
            </div>
            </div>


         <!--	Footer   start-->
		<?php include "include/footer.php";?>
		<!--	Footer   start-->


        <!-- Scroll to top -->
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
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
<script src="js/custom.js"></script>

</body>

</html>