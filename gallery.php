<?php include('./inc/header.php') ?>

<section class="gallery">
	<div class="title">
		<h2>معرض الصور</h2>
	</div>
	<ul>
		<li>
			<a href="./images/gallery/gallery1/1.jpg" rel="prettyphoto[gallery1]" title="حرم الامام رضا (ع)">
				<img src="./images/gallery/gallery1/1.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>حرم الامام رضا (ع)</p>
		</li>
		<li>

			<a href="./images/gallery/gallery1/2.jpg" rel='prettyphoto[gallery1]' title="متحف و مرقد الشاعر الایراني فرىوسي">
				<img src="./images/gallery/gallery1/2.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>متحف و مرقد الشاعر الایراني فردوسي</p>
		</li>
		<li>
			<a href="./images/gallery/gallery1/3.jpg" rel='prettyphoto[gallery1]' title="مسجد جوهرشاد">
				<img src="./images/gallery/gallery1/3.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مسجد جوهرشاد</p>
		</li>
		<li>
			<a href="./images/gallery/gallery1/4.jpg" rel='prettyphoto[gallery1]' title="حرم الامام رضا (ع)">
				<img src="./images/gallery/gallery1/4.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>حرم الامام رضا (ع)</p>
		</li>
		<li>
			<a href="./images/gallery/gallery1/5.jpg" rel='prettyphoto[gallery1]' title="متحف الملك نادر">
				<img src="./images/gallery/gallery1/5.jpg" alt="" >
				<div class="effe"></div>
			</a>
			<p>متحف الملك نادر</p>
		</li>
		<li>
			<a href="./images/gallery/gallery1/6.jpg" rel='prettyphoto[gallery1]' title="سرزمین موجهای آبی مشهد">
				<img src="./images/gallery/gallery1/6.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>سرزمین موجهای آبی مشهد</p>
		</li>
		<li>
			<a href="./images/gallery/gallery1/7.jpg" rel='prettyphoto[gallery1]' title="جالیدره">
				<img src="./images/gallery/gallery1/7.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>جالیدره</p>
		</li>
		<li>
			<a href="./images/gallery/gallery1/8.jpg" rel='prettyphoto[gallery1]' title="ریش شاندیز">
				<img src="./images/gallery/gallery1/8.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>ریش شاندیز</p>
		</li>
		<li>
			<a href="./images/gallery/gallery1/9.jpg" rel='prettyphoto[gallery1]' title="مجمع الماس">
				<img src="./images/gallery/gallery1/9.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مجمع الماس</p>
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
