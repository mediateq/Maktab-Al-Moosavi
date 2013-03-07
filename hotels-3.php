<?php include('./inc/header.php') ?>

<section class="hotels">
	<div class="title">
		<h2>الفنادق</h2>
	</div>

	<div class="badboy"></div>
	<div class="hotels-map">
		<a href="#?custom=true&width=870&height=580" rel="prettyMap"><p>خريطة الفنادق</p></a>
	</div>
	<div class="but right">
		<a href="./hotels.php">1</a>
		<a href="./hotels-2.php">2</a>
		<a href="./hotels-3.php">3</a>
	</div>
	<div class="badboy"></div>
</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
  	$("a[rel^='prettyMap']").prettyPhoto({
    	custom_markup: '<iframe width="870" height="580" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=203962002147300705700.0004d742906b21b433182&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=36.280607,59.610786&amp;spn=0.020065,0.037293&amp;z=15&amp;output=embed"></iframe>',
    	allow_resize: false,
    });
  });
</script>

<?php include('./inc/footer.php') ?>
