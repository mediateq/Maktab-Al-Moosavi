<?php include('./inc/header.php') ?>

<section class="one-hotel">
	<div class="title">
		<h2>فندق درویشي الفاخر</h2>
	</div>
	<div class="text">
		<p>
			یبعد فندق فردوس 300 مترا الی الحرم المطهر و هو فی شارع الامام رضا(ع) ومسافته الی الحرم یعادل5 دقائق.
		</p>
		<div id="boxtable">
			<table id="momt" cellpadding="10">
				<caption>أسعار الغرف من تاریخ 2013/04/01</caption>
				<tr>
					<th>نوع الغرفه</th>
					<td>سعر الفندق</td>
					<td>عرض خاص المکتب الموسوي</td>
				</tr>
				<tr>
					<td>غرفة مفردة</td>
					<td>137800</td>
					<td>135000</td>
				</tr>
				<tr>
					<td>غرفة مزدوجة</td>
					<td>190000</td>
					<td>180000</td>
				</tr>
				<tr>
					<td>سويت - لشخصين</td>
					<td>265000</td>
					<td>255000</td>
				</tr>
				<tr>
					<td>ثلاثیة</td>
					<td>238000</td>
					<td>228000</td>
				</tr>
				<tr>
					<td>ألشخص الاضافي</td>
					<td>47700</td>
					<td>46000</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="pics">
		<ul>
			<li>
				<a href="./images/hotels/ferdos/1.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/ferdos/1.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/ferdos/2.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/ferdos/2.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/ferdos/3.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/ferdos/3.jpg" alt="">
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