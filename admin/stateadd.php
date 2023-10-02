<?php
session_start();
require("config.php"); 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
///code
$error="";
$msg="";
if(isset($_POST['insert']))
{
	$state=$_POST['state'];
	
	if(!empty($state)){
		$sql="insert into state (sname) values('$state')";
		$result=mysqli_query($con,$sql);
		if($result)
			{
				$msg="<p class='alert alert-success'>State Inserted Successfully</p>";
				header('location:statelist.php');
						
			}
			else
			{
				$error="<p class='alert alert-warning'>* State Not Inserted</p>";
			}
	}
	else{
		$error = "<p class='alert alert-warning'>* Fill all the Fields</p>";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>State</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/1.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/citystatestyle.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
		
			<?php include("header.php");?>	
			<!-- Page Wrapper -->
            <div class="page-wrapper" style="background-color: bisque;">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header bg  ">
						<div class="row">
							<div class="col">
								<h3 class="page-title " style ="  ">State</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item "><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">State</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
				<!-- state add section --> 
					<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="card-header bg ">
									<h4 class="card-title " style= " ">Add State</h4>
									<?php echo $error;?>
									<?php echo $msg;?>
									<?php 
										if(isset($_GET['msg']))	
										echo $_GET['msg'];	
									?>
								</div>
								<form method="post" id="insert product" enctype="multipart/form-data">
									<div class="card-body">
											<div class="row">
												<div class="col-xl-6 ">
													<h5 class="card-title" style="  ">State Details</h5>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label" style=" ">State Name</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="state">
														</div>
													</div>
												</div>
											</div>
											<div class="text-left">
												<a href="statelist.php"></a>
												<input type="submit" class="btn btn-info"  value="Submit" name="insert" style="margin-left:200px;">
												</a></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!----End state add section  --->
				
				<!----view state  --->
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
