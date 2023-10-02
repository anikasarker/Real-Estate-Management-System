<?php 

	include "mailcon.php";
	//send_mail($recipient,$subject,$message);

	$error = "";

	if(count($_POST) > 0)
	{

		//something was posted
		$recipient = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if(empty($recipient)){
			$error .= "recipient can not be empty<br>";
		}

		if(empty($subject)){
			$error .= "subject can not be empty<br>";
		}

		if(empty($message)){
			$error .= "message can not be empty<br>";
		}
		
		if($error == "")
		{
			if(send_mail($recipient,$subject,$message))
			{
				$error .= "Message sent!<br>";
			}else
			{
				$error .= "Message NOT sent!<br>";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Approval Mail</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
		<link rel="stylesheet" href="assets/css/style.css">

		
</head>

<body style=" font-family: 'Marcellus SC', serif;">

	<style type="text/css">
		
		form{
			width: 300px;
			height: 400px;
			padding: 20px;
			box-shadow: 0px 0px 10px #aaa;
			margin: auto;
			margin-top: 60px;
			border-radius: 20px;
		}

		form input{
			width: 270px;
			padding: 10px;
			border: solid thin #aaa;
			border-radius: 10px;
			margin: 5px;
			outline: none;
		}

		.btn{
background-color: aquamarine;
			width: 290px;
			cursor: pointer;
		}
		.text{
			border: solid thin #aaa;
			border-radius: 10px;
			border: solid thin #aaa;
			width: 270px;
			margin-left: 5px;
			padding: 10px;
		}
		.container{
			
			
		}
	</style>
<div class="container " >
	<form method="post" style="background-color: bisque;">
		<h2 style="text-align:center;">Send Email</h2>
		<div>
			<?php if($error != ""):?>
				<span style="color: black;"><?=$error?></span>
			<?php endif;?>
		</div>
		<input type="text" name="email" placeholder="Receiver Email" autofocus="true"><br> <br>
		<input type="text" name="subject" placeholder="Subject"><br> <br>
		<textarea class="text" name="message" placeholder="Write your message">You can visit the place</textarea><br><br>
		<input class="btn btn-info" type="submit" value="Send">

	</form>
	</div>
	</div>
</body>
</html>
