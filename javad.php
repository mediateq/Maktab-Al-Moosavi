<?php include('./inc/header.php') ?>

<section class="one-hotel">
	<div class="title">
		<h2>فندق الجواد</h2>
	</div>
	<div class="text">
		<p>
			یقع فندق الجواد فی شارع الامام رضا (ع) و هو قریب الی حرم المطهر و یبعد 3 ، قائق عن الحرم .
		</p>
		<div id="boxtable">
			<table id="momt" cellpadding="10">
				<caption>أسعار الغرف من تاریخ 2013/03/18 الي نهایة السنة</caption>
				<tr>
					<th>نوع الغرفه</th>
					<td>سعر الفندق</td>
					<td>سعر الخاص المکتب الموسوي</td>
				</tr>
				<tr>
					<td>غرفة مزدوجة</td>
					<td>158000</td>
					<td>150000</td>
				</tr>
				<tr>
					<td>ثلاثية</td>
					<td>192000</td>
					<td>182000</td>
				</tr>
				<tr>
					<td>ألشخص الاضافي</td>
					<td>42000</td>
					<td>40000</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="pics">
		<ul>
			<li>
				<a href="./images/hotels/javad/1.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/javad/1.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/javad/2.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/javad/2.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/javad/3.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/javad/3.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
		</ul>
		<div class="badboy"></div>
	</div>
</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyphoto']").prettyPhoto({
    	autoplay_slideshow: true,
    });
  });
</script>

<?php include('./inc/footer.php') ?>