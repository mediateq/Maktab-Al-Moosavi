<?php include('./inc/header.php') ?>

<section class="one-hotel">
	<div class="title">
		<h2>فندق طوس</h2>
	</div>
	<div class="text">
		<p>
			یقع فندق طوس فی مکان ممتاز و فرید من نوعه بحیث یستطیع الزائر مشاهده الحرم المطهر، کما ان الفندق یقع فی جوار حرم الامام رضا(ع).
		</p>
		<div id="boxtable">
			<table id="momt" cellpadding="10">
				<caption>أسعار الغرف من تاریخ 2013/03/18 الي نهایة السنة</caption>
				<tr>
					<th>نوع الغرفه</th>
					<td>سعر الفندق</td>
					<td>عرض خاص المکتب الموسوي</td>
				</tr>
				<tr>
					<td>غرفة مزدوجة</td>
					<td>233200</td>
					<td>220000</td>
				</tr>
				<tr>
					<td>ثلاثية</td>
					<td>291500</td>
					<td>275000</td>
				</tr>
				<tr>
					<td>سويت (4 أشخاص)</td>
					<td>593600</td>
					<td>560000</td>
				</tr>
				<tr>
					<td>سويت - غرفتین وصالة</td>
					<td>805600</td>
					<td>760000</td>
				</tr>
				<tr>
					<td>ألشخص الاضافي</td>
					<td>58300</td>
					<td>55000</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="pics">
		<ul>
			<li>
				<a href="./images/hotels/toos/4.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/toos/4.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/toos/5.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/toos/5.jpg" alt="">
					<div class="effe"></div>
				</a>
			</li>
			<li>
				<a href="./images/hotels/toos/6.jpg" rel='prettyphoto[gallery1]'>
					<img src="./images/hotels/toos/6.jpg" alt="">
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