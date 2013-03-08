<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="./1styles.css" />
	<link rel="stylesheet" href="./prettyphoto.css"/>
	<link rel="stylesheet" href="./flexslider.css">
	<link rel="stylesheet" href="./weather.css">
	<link rel="stylesheet" href="./style.css" />
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/zepto.js"></script>
	<script type="text/javascript" src="./js/jquery.prettyphoto.js"></script>
	<script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="./js/weather.js"></script>
	<script type="text/javascript" src="./js/scripts.js"></script>
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
	<!--[if lt IE 9]>
		<script src="./js/html5shiv.js"></script>
	<![endif]-->

	<style>
		body{
			background: none;
		}
	</style>
</head>

<body>
	<div align="center">
		<table border="0" width="23%">
			<tr>
				<td>
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

					<div class="scrollable vertical">
						<div id="test" class="items"></div>
					</div>
					<div class="navi"></div>
				</td>
			</tr>
		</table>
	</div>

</body>

</html>