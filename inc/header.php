<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta charset="UTF-8">
	<title>Maktab AlMosawi</title>

	<link rel="stylesheet" href="./1styles.css" />
	<link rel="stylesheet" href="./flexslider.css">
	<link rel="stylesheet" href="./prettyphoto.css"/>
	<link rel="stylesheet" href="./weather.css">
	<link rel="stylesheet" href="./style.css" />

	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/zepto.js"></script>
	<script src="http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20location%20in%20('IRXX0008'%2C'IRXX0018'%2C'IRXX0016'%2C'IRXX0003'%2C'IRXX0015')%20and%20u%3D'c'&amp;rnd=20132511&amp;format=json&amp;callback=jsonp1362728845624"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$('#test').weatherfeed(['IRXX0008','IRXX0018','IRXX0016','IRXX0003','IRXX0015']).ajaxStop(function() {


				$("div.scrollable").scrollable({ 
		        		vertical: true,  
			        	size: 1
				}).circular().navigator().autoscroll({
					interval: 3000
				});
			});
		});
	</script>
	<script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="./js/jquery.prettyphoto.js"></script>
	<script type="text/javascript" src="./js/weather.js"></script>
	<script type="text/javascript" src="./js/scripts.js"></script>
	<!--[if lt IE 9]>
		<script src="./js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<a id="myAnchor"></a>
	<div class="contain">
		<div class="container">
			<header>
				<div class="logo">
					<a href="./"><img src="./images/logo.png" alt="maktab al moosavi" title="الصفحة الرئیسیة"></a>
				</div>
				<div class="menu">
					<nav>
						<menu>
							<li><a href="./">الصفحة الرئیسیة</a></li>
							<li><a href="./hotels.php">الفنادق</a></li>
							<li><a href="./cars.php">سیارات للأجرة</a></li>
							<li><a href="./drs.php">خدمات طبیة</a></li>
							<li><a href="./gallery.php">معرض الصور</a></li>
							<li><a href="./contact.php">اتصل بنا</a></li>
						</menu>
					</nav>
					<div class="reserve"><a href="./reserve.php"><h2>إحجز السکن الآن !</h2></a></div>
					<div class="badboy"></div>
				</div>
			</header>