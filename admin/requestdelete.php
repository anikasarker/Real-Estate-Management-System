<?php
include("config.php");
$rid = $_GET['id'];
$sql = "DELETE FROM requestbook WHERE rid = {$rid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-info'>Request Deleted</p>";
	header("Location:requestview.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Request Not Deleted</p>";
	header("Location:requestview.php?msg=$msg");
}
mysqli_close($con);
?>
