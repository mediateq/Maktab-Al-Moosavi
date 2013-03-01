<?php include('./inc/header.php') ?>

<section class="one-hotel">
	<div class="title">
		<h2>فندق الجواد</h2>
	</div>
	<div class="text">
		<p>
			یقع فندق الجواد فی شارع الامام رضا (ع) و هو قریب الی حرم المطهر و یبعد 3 ، قائق عن الحرم .
		</p>
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