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
						تستطيعون أن تشاهدوا عدد من فنادق مشهد المقدسة في هذا الموقع و في المستقبل يزيد عدد الفنادق و كذلك فنادق باقي المدن لجمهورية الاسلاميه الايرانيه .
					</p>
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
						انتظروا عروض الخاصة لمكتب الموسوي لانحاء مدن ايران:شمال ايران-قم المقدسة-اصفهان-جزيرة كيش ...

					</p>
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
						مدينة مشهد المقدسة تستقبل كل سنة عدد من الزوار في مجالات طبية.تستطيعون بامكاننا تختاروا أحسن العيادات و الأطباء في مجالات التجميل و زراعة الشعر و الأسنان و العيون .
					</p>
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
				<a href="#?custom=true&width=160&height=207" rel="prettyphoto1"><p>مشهد التقويم الفلكي</p></a>
				<div class="hline"></div>
				<a href="#?custom=true&width=265&height=130" rel="prettyphoto2"><p>الطقس في مدينة مشهد</p></a>
			</div>
			<div class="second">
				<div class="pic">
					<img src="./images/icon2.png" alt="twitter">
				</div>
				<a href="#">Connect us on twitter</a>
				<div class="hline"></div>
				<p>
					
				</p>
			</div>
			<div class="third">
				<div class="pic">
					<img src="./images/icon1.png" alt="info">
				</div>
				<a href="#">Connect us on facebook</a>
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
    	custom_markup: '<iframe src="http://oghat.toolsir.com/oghat.php?mod=0&amp;fc1=FFFFFF&amp;fc2=D9BE95&amp;bgc=83735A&amp;tz=1&amp;az=1&amp;shahr=11-17" allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" align="middle" width="160" height="205" style="border:1px solid #83735A; border-radius: 4px 4px 4px 4px;"></iframe>',
    	allow_resize: false,
    });
    $("a[rel^='prettyphoto2']").prettyPhoto({
    	custom_markup: '<table style="width: 100%;"><tbody><tr><td align="center"><span id="dnn_ctr1437_View_Label3" class="Normal">وضعیت آب و هوای شهر </span>&nbsp;<span id="dnn_ctr1437_View_LBL_City" style="font-weight:normal;">مشهد</span></td></tr><tr><td align="center"><img id="dnn_ctr1437_View_Image1" src="http://l.yimg.com/a/i/us/we/52/14.gif" style="height:70px;width:70px;border-width:0px;"></td></tr><tr><td align="center"><span id="dnn_ctr1437_View_Label4" class="Normal">دمای فعلی :</span>&nbsp;<span id="dnn_ctr1437_View_LBL_Temp" class="NormalText" style="font-weight:normal;">-5</span></td></tr><tr><td align="center"><span id="dnn_ctr1437_View_Label5" class="Normal">حداکثر دما :</span>&nbsp;<span id="dnn_ctr1437_View_LBL_High" class="NormalText" style="font-weight:normal;">-2</span></td></tr><tr><td align="center"><span id="dnn_ctr1437_View_Label6" class="Normal">حداقل دما :</span>&nbsp;<span id="dnn_ctr1437_View_LBL_Low" class="NormalText" style="font-weight:normal;">-9</span></td></tr></tbody></table>',
    	allow_resize: false,
    });
  });
</script>

<?php include('./inc/footer.php') ?>
