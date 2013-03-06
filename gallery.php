<?php include('./inc/header.php') ?>

<section class="gallery">
	<div class="title">
		<h2>معرض الصور</h2>
	</div>
	<ul>
		<li>
			<a href="./images/gallery/1.jpg" rel="prettyphoto[gallery1]" title="حرم الامام رضا (ع)">
				<img src="./images/gallery/1.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>حرم الامام رضا (ع)</p>
		</li>
		<li>
			<a href="./images/gallery/2.jpg" rel='prettyphoto[gallery1]' title="متحف و مرقد الشاعر الایراني فرىوسي">
				<img src="./images/gallery/2.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>متحف و مرقد الشاعر الایراني فرىوسي</p>
		</li>
		<li>
			<a href="./images/gallery/3.jpg" rel='prettyphoto[gallery1]' title="مسجد جوهرشاد">
				<img src="./images/gallery/3.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مسجد جوهرشاد</p>
		</li>
		<li>
			<a href="./images/gallery/4.jpg" rel='prettyphoto[gallery1]' title="حرم الامام رضا (ع)">
				<img src="./images/gallery/4.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>حرم الامام رضا (ع)</p>
		</li>
		<li>
			<a href="./images/gallery/5.jpg" rel='prettyphoto[gallery1]' title="متحف الملك نادر">
				<img src="./images/gallery/5.jpg" alt="" >
				<div class="effe"></div>
			</a>
			<p>متحف الملك نادر</p>
		</li>
		<li>
			<a href="./images/gallery/6.jpg" rel='prettyphoto[gallery1]' title="سرزمین موجهای آبی مشهد">
				<img src="./images/gallery/6.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>سرزمین موجهای آبی مشهد</p>
		</li>
		<li>
			<a href="./images/gallery/7.jpg" rel='prettyphoto[gallery1]' title="جالیدره">
				<img src="./images/gallery/7.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>جالیدره</p>
		</li>
		<li>
			<a href="./images/gallery/8.jpg" rel='prettyphoto[gallery1]' title="ریش شاندیز">
				<img src="./images/gallery/8.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>ریش شاندیز</p>
		</li>
		<li>
			<a href="./images/gallery/9.jpg" rel='prettyphoto[gallery1]' title="مجمع الماس">
				<img src="./images/gallery/9.jpg" alt="">
				<div class="effe"></div>
			</a>
			<p>مجمع الماس</p>
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
