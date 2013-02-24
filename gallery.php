<?php include('./inc/header.php') ?>

<section class="gallery">
	<div class="title">
		<h2>مکانهای مذهبی، آثار تاریخی و مکانهای تفریحی</h2>
	</div>
	<ul>
		<li>
			<a href="./images/gallery/1.jpg" rel="prettyphoto[gallery1]" title="حرم مقدس امام رضا (ع)">
				<img src="./images/gallery/1.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>حرم مقدس امام رضا (ع)</p>
		</li>
		<li>
			<a href="./images/gallery/2.jpg" rel='prettyphoto[gallery1]' title="موزه تاریخی و آرامگاه فردوسی">
				<img src="./images/gallery/2.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>موزه تاریخی و آرامگاه فردوسی</p>
		</li>
		<li>
			<a href="./images/gallery/3.jpg" rel='prettyphoto[gallery1]' title="آبشار اخلمد">
				<img src="./images/gallery/3.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>آبشار اخلمد</p>
		</li>
		<li>
			<a href="./images/gallery/4.jpg" rel='prettyphoto[gallery1]' title="شیشلیک شاندیز">
				<img src="./images/gallery/4.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>شیشلیک شاندیز</p>
		</li>
		<li>
			<a href="./images/gallery/5.jpg" rel='prettyphoto[gallery1]' title="آرامگاه تاریخی حکیم خیام">
				<img src="./images/gallery/5.jpg" alt="" >
				<div class="effe"></div>
			</a>
			<p>آرامگاه تاریخی حکیم خیام</p>
		</li>
		<li>
			<a href="./images/gallery/6.jpg" rel='prettyphoto[gallery1]' title="سرزمین موجهای آبی مشهد">
				<img src="./images/gallery/6.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>سرزمین موجهای آبی مشهد</p>
		</li>
		<li>
			<a href="./images/gallery/7.jpg" rel='prettyphoto[gallery1]' title="سد و منطقه تفزیحی چالیدره">
				<img src="./images/gallery/7.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>سد و منطقه تفزیحی چالیدره</p>
		</li>
		<li>
			<a href="./images/gallery/8.jpg" rel='prettyphoto[gallery1]' title="بزرگترین و با شکوه ترین هتل ها">
				<img src="./images/gallery/8.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>بزرگترین و با شکوه ترین هتل ها</p>
		</li>
		<li>
			<a href="./images/gallery/6.jpg" rel='prettyphoto[gallery1]' title="سرزمین موجهای آبی مشهد">
				<img src="./images/gallery/6.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>سرزمین موجهای آبی مشهد</p>
		</li>
	</ul>
	<div class="badboy"></div>
</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyphoto']").prettyPhoto({
    	autoplay_slideshow: true,
    });
  });
</script>

<?php include('./inc/footer.php') ?>
