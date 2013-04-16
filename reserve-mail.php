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

		$admin = 'info@maktabalmosawi.ir';

		$yearin = $_POST['yearin'];
		$monthin = $_POST['monthin'];
		$dayin = $_POST['dayin'];

		$yearout = $_POST['yearout'];
		$monthout = $_POST['monthout'];
		$dayout = $_POST['dayout'];

		$persons = $_POST['persons'];
		$room = $_POST['room'];

		$priority1 = $_POST['prohotels1'];
		$priority2 = $_POST['prohotels2'];
		$priority3 = $_POST['prohotels3'];

		$name    = $_POST['name'];
		$country    = $_POST['country'];
		$email   = $_POST['mail'];
		$phone = $_POST['phone'];
		$extra = $_POST['extra'];

		$accept = $_POST['accept'];
				
		$subject = "سفارش رزرو";

		$message = "$gender $name $family
				Country: $country
			    Tel: $phone
			    Email: $email
			    Entry date: $yearin-$monthin-$dayin 
			    Exit date: $yearout-$monthout-$dayout
			    Number of people: $persons
			    Number of rooms: $room
			    First priority: $priority1
			    Second priority: $priority2
			    Third priority: $priority3
			    Extra description: $extra";
		

		if ($accept) {
			if( strlen($name)>=8 && strlen($country)>=2  && strlen($email)>=7 && strlen($persons)>=1 ){
				if( @mail (
						$admin,
						$subject,
						$message,
						"From: $name $email"
						
					 )
				){
					echo '<script type="text/javascript">
							alert("أرسلت النموذج.");
						  </script>';

				}else{
					echo '<script type="text/javascript">
							alert("خطأ! في إرسال النموذج.");
						  </script>';
				}
			}else{
				echo '<script type="text/javascript">
						alert("خطأ! التشيكية يرجى التحقق من الحقول وحاول مرة أخرى.");
					  </script>';
			}
		}else{
			echo '<script type="text/javascript">
					alert("يرجى قبول البيانات.");
				  </script>';
		}
	?>
</body>
</html>