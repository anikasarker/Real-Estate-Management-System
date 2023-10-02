<?php

	include 'config.php';
	if(isset($_GET['id'])){
		$rid = $_REQUEST['id'];
		$query = "UPDATE requestbook SET status = 'Approved' WHERE rid = '$rid'";
	
		$result = $con->query($query) or die(mysqli_error($con));
		$query1 = mysqli_query($con, "UPDATE requestbook SET status='Approved' WHERE rid = '$rid'") or die(mysqli_error($con));

	
	if($result AND $query1){
	  ?>
	         
		<?php
		 header('location:forgot/index.php');
	?>
	<?php
	}}
?>


