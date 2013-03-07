<?php include('./inc/header.php') ?>

<section class="gallery">
	<div class="title">
		<h2>معرض الصور</h2>
	</div>
	<ul>
		<li>
			<a href="./images/gallery/gallery2/1.jpg" rel="prettyphoto[gallery1]" title="کوهسنجی">
				<img src="./images/gallery/gallery2/1.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>کوهسنجی</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/2.jpg" rel='prettyphoto[gallery1]' title="مجمع بروما">
				<img src="./images/gallery/gallery2/2.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مجمع بروما</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/3.jpg" rel='prettyphoto[gallery1]' title="اخلمد">
				<img src="./images/gallery/gallery2/3.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>اخلمد</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/4.jpg" rel='prettyphoto[gallery1]' title="ضریح الامام رضا(ع)">
				<img src="./images/gallery/gallery2/4.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>ضریح الامام رضا(ع)</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/5.jpg" rel='prettyphoto[gallery1]' title="حديقة ملت">
				<img src="./images/gallery/gallery2/5.jpg" alt="" >
				<div class="effe"></div>
			</a>
			<p>حديقة ملت</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/6.jpg" rel='prettyphoto[gallery1]' title="طرقبه و شاندیز">
				<img src="./images/gallery/gallery2/6.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>طرقبه و شاندیز</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/7.jpg" rel='prettyphoto[gallery1]' title="مسبح سرزمین آفتاب">
				<img src="./images/gallery/gallery2/7.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مسبح سرزمین آفتاب</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/8.jpg" rel='prettyphoto[gallery1]' title="مدينة ألعاب مشهد">
				<img src="./images/gallery/gallery2/8.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مدينة ألعاب مشهد</p>
		</li>
		<li>
			<a href="./images/gallery/gallery2/9.jpg" rel='prettyphoto[gallery1]' title="مسبح موجهای آبی">
				<img src="./images/gallery/gallery2/9.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مسبح موجهای آبی</p>
		</li>
	</ul>
	<div class="badboy"></div>
	<div class="but right">
		<a href="./gallery.php">1</a>
		<a href="./gallery-2.php">2</a>
	</div>
	<div class="badboy"></div><br />
</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyphoto']").prettyPhoto({
    	autoplay_slideshow: true,
    });
  });
</script>

<?php include('./inc/footer.php') ?>
