<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
	<style type="text/css">
		body {
			background-color: #F4F4F4;
		}

		.ok {
			color:#23B3AB;
		}

		.err {
			color:#BD5B3D;
		}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		$admin = 'amjadi.mojtaba@gmail.com';

		$year = $_POST['yearin'];
		$month = $_POST['monthin'];
		$day = $_POST['dayin'];

		$year = $_POST['yearout'];
		$month = $_POST['monthout'];
		$day = $_POST['dayout'];

		$person = $_POST['person'];
		$room = $_POST['room'];

		$gender = $_POST['gender'];
		$name    = $_POST['name'];
		$family    = $_POST['family'];
		$email   = $_POST['mail'];
		$phone = $_POST['phone'];

		$bedextra = $_POST['bedextra'];
		$rentcar = $_POST['carrent'];
		$visitdr = $_POST['visitdr'];

		$accept = $_POST['accept'];

		if ($accept) {
			if( strlen($name)>=3 && strlen($email)>=7 && strlen($subject)>=5 && strlen($text)>=10 ){
				if( @mail (
						$admin,
						"$subject",
						$text,
						"From:$name $email" )
				){
					echo '<script type="text/javascript">
							alert("Mail sent.");
						  </script>';

				}else{
					echo '<script type="text/javascript">
							alert("Error in sending mail!");
						  </script>';
				}
			}else{
				echo '<script type="text/javascript">
						alert("Access Restricted!");
					  </script>';
			}
		}else{
			echo '<script type="text/javascript">
					alert("Please accept the data!");
				  </script>';
		}
	?>
</body>
</html>