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
	<script src="http://cdn.jquerytools.org/1.1.2/full/jquery.tools.min.js"></script>
	<script type="text/javascript" src="./js/weather.js"></script>
	<script type="text/javascript" src="./js/zepto.js"></script>
	<script type="text/javascript" src="./js/jquery.prettyphoto.js"></script>
	<script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="./js/scripts.js"></script>
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
		<table border="0">
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