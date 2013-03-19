<?php include('./inc/header.php') ?>

<section class="gallery">
	<div class="title">
		<h2>معرض الصور</h2>
	</div>
	<ul>
		<li>
			<a href="./images/gallery/gallery4/1.jpg" rel="prettyphoto[gallery1]" title="اصفهان">
				<img src="./images/gallery/gallery4/1.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>اصفهان</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/2.jpg" rel='prettyphoto[gallery1]' title="شمال ایران">
				<img src="./images/gallery/gallery4/2.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>شمال ایران</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/3.jpg" rel='prettyphoto[gallery1]' title="شمال ایران">
				<img src="./images/gallery/gallery4/3.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>شمال ایران</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/4.jpg" rel='prettyphoto[gallery1]' title="شمال ایران">
				<img src="./images/gallery/gallery4/4.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>شمال ایران</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/5.jpg" rel='prettyphoto[gallery1]' title="شمال ایران">
				<img src="./images/gallery/gallery4/5.jpg" alt="" >
				<div class="effe"></div>
			</a>
			<p>شمال ایران</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/6.jpg" rel='prettyphoto[gallery1]' title="طرقبه و شاندیز">
				<img src="./images/gallery/gallery4/6.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>طرقبه و شاندیز</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/7.jpg" rel='prettyphoto[gallery1]' title="مجمع آلتون">
				<img src="./images/gallery/gallery4/7.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مجمع آلتون</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/8.jpg" rel='prettyphoto[gallery1]' title="مسبح سرزمین آفتاب">
				<img src="./images/gallery/gallery4/8.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مسبح سرزمین آفتاب</p>
		</li>
		<li>
			<a href="./images/gallery/gallery4/9.jpg" rel='prettyphoto[gallery1]' title="سرزمین موجهای آبی مشهد">
				<img src="./images/gallery/gallery4/9.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>سرزمین موجهای آبی مشهد</p>
		</li>
	</ul>
	<div class="badboy"></div>
	<div class="but right">
		<a href="./gallery.php">1</a>
		<a href="./gallery-2.php">2</a>
		<a href="./gallery-3.php">3</a>
		<a href="./gallery-4.php">4</a>
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
