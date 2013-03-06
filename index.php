<?php include('./inc/header.php') ?>

<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "fade",
	    pauseOnHover: true,
	  });
	});
</script>

<section class="content">
	<div class="slid-part">
		<div class="slideshow">
			<div class="flexslider ltr">
				<ul id="flexslider_views_slideshow_slider-block" class="flexslider-views-slideshow-main-frame slides">
				    <li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-1 views-row-odd" style="width: 100%; float: left; margin-right: -100%; display: list-item;">
				  		<div class="views-field views-field-field-slide-image">
					  		<div class="field-content">
					  			<img src="./images/slider/slide1.jpg" alt="">
					  		</div>
				  		</div>
			  		</li>
			  		<li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-2 views_slideshow_cycle_hidden views-row-even" style="width: 100%; float: left; margin-right: -100%;">
			  			<div class="views-field views-field-field-slide-image">
			  				<div class="field-content">
			  					<img src="./images/slider/slide2.jpg" alt="">
			  				</div>
			  			</div>
			  		</li>
			  		<li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-3 views_slideshow_cycle_hidden views-row-odd" style="width: 100%; float: left; margin-right: -100%;">
			  			<div class="views-field views-field-field-slide-image">
			  				<div class="field-content">
			  					<img src="./images/slider/slide3.jpg" alt="">
			  				</div>
			  			</div>
			  		</li>
			  		<li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-4 views_slideshow_cycle_hidden views-row-odd" style="width: 100%; float: left; margin-right: -100%;">
			  			<div class="views-field views-field-field-slide-image">
			  				<div class="field-content">
			  					<img src="./images/slider/slide4.jpg" alt="">
			  				</div>
			  			</div>
			  		</li>
			  		<li class="flexslider-views-slideshow-main-frame-row flexslider_views_slideshow_slide views-row-5 views_slideshow_cycle_hidden views-row-even" style="width: 100%; float: left; margin-right: -100%;">
			  			<div class="views-field views-field-field-slide-image">
			  				<div class="field-content">
			  					<img src="./images/slider/slide5.jpg" alt="">
			  				</div>
			  			</div>
			  		</li>
			    </ul>
			</div>
		</div>
		<div class="hline"></div>
		<div class="text">
			<h2>هدف ما فقط اقامت شما نیست، هدف ما لذت بردن شما از اقامتتان می باشد</h2>
		</div>
	</div>
	<div class="middle">
		<div class="works">
			<div class="first">
				<div class="tit"><h2>الفنادق</h2></div>
				<div class="pic">
					<a href="./hotels.php"><img src="./images/hotels/darvishi/1.jpg" alt="reserve hotel"></a>
				</div>
				<div class="text">
					<p>
						متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر...
					</p>
				</div>
				<div class="but left">
					<a href="#">للمزید</a>
				</div>
				<div class="badboy"></div>
			</div>
			<div class="second">
				<div class="tit"><h2>عروض خاصة</h2></div>
				<div class="pic">
					<a href="#"><img src="./images/img2.jpg" alt="reserve hotel"></a>
				</div>
				<div class="text">
					<p>
						انتظروا عروض الخاصة لمكتب الموسوي لانحاء مدن ايران:شمال ايران-قم المقدسة-اصفهان-جزيرة كيش.
أسعار ممتازه للأشخاص و الحملات،انتظرونا... 

					</p>
				</div>
				<div class="but left">
					<a href="#">للمزید</a>
				</div>
				<div class="badboy"></div>
			</div>
			<div class="third">
				<div class="tit"><h2>خدمات طبیه</h2></div>
				<div class="pic">
					<a href="./drs.php"><img src="./images/img3.jpg" alt="reserve hotel"></a>
				</div>
				<div class="text">
					<p>
						متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر متن مورد نظر...
					</p>
				</div>
				<div class="but left">
					<a href="#">للمزید</a>
				</div>
				<div class="badboy"></div>
			</div>
			<div class="badboy"></div>
		</div>
		<div class="social">
			<div class="first">
				<div class="pic">
					<img src="./images/icon3.png" alt="facebook">
				</div>
				<a href="#?custom=true&width=870&height=580" rel="prettyphoto1"><p>آب و هوای مشهد مقدس</p></a>
				<div class="hline"></div>
				<a href="#?custom=true&width=870&height=580" rel="prettyphoto2"><p>اوقات شرعی مشهد مقدس</p></a>
			</div>
			<div class="second">
				<div class="pic">
					<img src="./images/icon2.png" alt="twitter">
				</div>
				<a href="#">add Viber number</a>
				<div class="hline"></div>
				<p>
					
				</p>
			</div>
			<div class="third">
				<div class="pic">
					<img src="./images/icon1.png" alt="info">
				</div>
				<a href="#">add wahts up</a>
				<div class="hline"></div>
				<p>
					
				</p>
			</div>
			<div class="badboy"></div>
		</div>
	</div>
</section>



<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
  	$("a[rel^='prettyphoto1']").prettyPhoto({
    	custom_markup: '<iframe width="870" height="580" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="http://www.weather.com/weather/right-now/IRXX0008:1:IR"></iframe>',
    	allow_resize: false,
    });
    $("a[rel^='prettyphoto2']").prettyPhoto({
    	custom_markup: '<iframe width="870" height="580" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="http://www.islamicfinder.org/prayerDetail.php?city=Mashad&state=10&country=iran&lang=&&&lang=arabic"></iframe>',
    	allow_resize: false,
    });
  });
</script>

<?php include('./inc/footer.php') ?>
