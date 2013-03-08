<?php include('./inc/header.php') ?>

<section class="gallery">
	<div class="title">
		<h2>معرض الصور</h2>
	</div>
	<ul>
		<li>
			<a href="./images/gallery/gallery3/1.jpg" rel="prettyphoto[gallery1]" title="اصفهان">
				<img src="./images/gallery/gallery3/1.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>اصفهان</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/2.jpg" rel='prettyphoto[gallery1]' title="اصفهان">
				<img src="./images/gallery/gallery3/2.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>اصفهان</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/3.jpg" rel='prettyphoto[gallery1]' title="اصفهان">
				<img src="./images/gallery/gallery3/3.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>اصفهان</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/4.jpg" rel='prettyphoto[gallery1]' title="اصفهان">
				<img src="./images/gallery/gallery3/4.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>اصفهان</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/5.jpg" rel='prettyphoto[gallery1]' title="جزیرة کیش">
				<img src="./images/gallery/gallery3/5.jpg" alt="" >
				<div class="effe"></div>
			</a>
			<p>جزیرة کیش</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/6.jpg" rel='prettyphoto[gallery1]' title="جزیرة کیش">
				<img src="./images/gallery/gallery3/6.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>جزیرة کیش</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/7.jpg" rel='prettyphoto[gallery1]' title="جزیرة کیش">
				<img src="./images/gallery/gallery3/7.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>جزیرة کیش</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/8.jpg" rel='prettyphoto[gallery1]' title="جزیرة کیش">
				<img src="./images/gallery/gallery3/8.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>جزیرة کیش</p>
		</li>
		<li>
			<a href="./images/gallery/gallery3/9.jpg" rel='prettyphoto[gallery1]' title="جزیرة کیش">
				<img src="./images/gallery/gallery3/9.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>جزیرة کیش</p>
		</li>
	</ul>
	<div class="badboy"></div>
	<div class="but right">
		<a href="./gallery.php">1</a>
		<a href="./gallery-2.php">2</a>
		<a href="./gallery-3.php">3</a>
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
