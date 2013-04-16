<?php include('./inc/header.php') ?>

<section class="one-hotel">
	<div class="title">
		<h2>بشری</h2>
	</div>
	<div class="text">
		<p>
			فندق بشری هو قریب عن الحرم المطهر یبعد70 مترا فقط.
فندق بشری یحتوي علی غرف كونكت، شقق ذو غرفة واحدة و ذو غرفتين مع أجمل التجهيزات.

		</p>

		<div id="boxtable">
			<table id="momt" cellpadding="10">
				<caption>أسعار الغرف الی تاریخ 2013/05/22</caption>
				<tr>
					<th>نوع الغرفه</th>
					<td>سعر الفندق</td>
					<td>عرض خاص المکتب الموسوي</td>
				</tr>
				<tr>
					<td>غرفة وصالة</td>
					<td>172500</td>
					<td>160000</td>
				</tr>
				<tr>
					<td>غرفتين وصالة</td>
					<td>322000</td>
					<td>295000</td>
				</tr>
				<tr>
					<td>ألشخص الاضافي</td>
					<td>57500</td>
					<td>53000</td>
				</tr>
				<tr>
					<td>فول بورد</td>
					<td></td>
					<td>135000</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="pics">
		<ul>
			<li>
				<a href="./images/hotels/boshra/1.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/boshra/1.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/boshra/2.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/boshra/2.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/boshra/3.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/boshra/3.jpg" alt="">
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