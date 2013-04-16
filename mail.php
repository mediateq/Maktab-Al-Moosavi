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

		$name    = $_POST['name'];
		$email   = $_POST['mail'];
		$phone = $_POST['phone'];
		$text    = $_POST['txt'];
		
		$message = "TEL: $phone
					$text";

		if( strlen($name)>=8 && strlen($email)>=7 && strlen($text)>=10 ){
			if( @mail (
					$admin,
					"$subject",
					$message,
					"From:$name $email" )
			){
				echo '<script type="text/javascript">
						alert("إرسال البريد.");
					  </script>';

			}else{
				echo '<script type="text/javascript">
						alert("خطأ! في إرسال البريد.");
					  </script>';
			}
		}else{
			echo '<script type="text/javascript">
					alert("خطأ! التشيكية يرجى التحقق من الحقول وحاول مرة أخرى.");
				  </script>';
		}
	?>
</body>
</html>