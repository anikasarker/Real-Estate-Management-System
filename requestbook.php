<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
$error="";
$msg="";
if(isset($_POST['send']))
	{

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
    $title=$_POST['title'];
	
	
	if(!empty($name) && !empty($email) && !empty($phone)   && !empty($message) &&  !empty($title))
	{
		
		$sql="INSERT INTO requestbook (uname,uemail,phone,message,title) VALUES ('$name','$email','$phone','$message', '$title')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Request Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Request Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
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

<!--	Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/requeststyle.css">

<!--	Title -->
<title>Real Estate Management System</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row">
        <!--	Header start  -->
		<?php include "include/header.php";?>
        <!--	Header end  -->
		<div class="full-row bg-gray">
            <div class="container ">
                <div class="container ">

                </div>
                <div class="row ml-12">
                <div class="col-lg-12">
								<h2 class="text-secondary  text-center mb-5">Send Your Booking Request</h2>
								<?php echo $msg; ?><?php echo $error; ?>
							</div>
						</div>
						<div class="row ml-5 pl-5">
							<div class="col-md-12">
								<form class="w-100" action="requestbook.php" method="post">
									<div class="row ml-5">
										<div class="row ml-5 mb-6">
											<div class="form-group col-lg-5">
												<input type="text"  name="name" class="form-control" placeholder="Your Name*" style="font-family: 'Marcellus SC', serif;">
											</div>
											
											<div class="form-group col-lg-5">
											<input type="text"  name="phone" class="form-control" placeholder="Phone" maxlength="11"pattern="[0-9]{11,11}"style=" font-family: 'Marcellus SC', serif;">
											</div>
                                            <div class="form-group col-lg-5">
												<input type="email"  name="email" class="form-control" placeholder="Email Address*" style="    font-family: 'Marcellus SC', serif;">
											</div>
											<div class="form-group col-lg-5">
											<?php
													
													$query=mysqli_query($con,"select * from property ");
													while($row=mysqli_fetch_row($query))
													{
												?>
												<input type="text"  value="<?php echo $row['0']; ?>" name="title" class="form-control" placeholder="Title" style="    font-family: 'Marcellus SC', serif;">
												<?php
												} 
												?>
											</div>
											
											<div class="col-lg-10">
												<div class="form-group">
													<textarea name="message" class="form-control" rows="5" placeholder="Write your message" style="    font-family: 'Marcellus SC', serif;"></textarea>
												</div>
											</div>
										</div>
                                        <div class="row ml-5 md-5">
                                        <button type="submit" value="send message" name="send" class="btn btn-info">Send Request</button>

                                        </div>
										
									</div>
                                    
											</form>

                        </div>
                    </div>
                </div>
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

<!--	Js Link -->
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