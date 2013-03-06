<?php include('./inc/header.php') ?>

<section class="contact">
	<div class="title">
		<h2>من نحن</h2>
	</div>
	<div class="location">
		<div class="text">
			<p>
				نحن فی مدینة مشهد المقدسة،لدينا خبرة لعدة سنين في خدمة الزوار و الحجوزات للفنادق و طيران و خدمات التوصيل و السياحية في مدينة مشهد المقدسة.و أيضا لدينا خبرة للتعامل مع الحملات و تسهيل امورهم ىاخل ايران.نحن بامكانية التكلم باللغتين العربية و الفارسية نستطيع أن نوفر خدمة أحسن و بمستوی أكثر للزوار الكرام و معنا لا تقلقون في التعامل داخل ايران.<br />
				سيد عباس الموسوي - سيد حسن الموسوي
			</p>	
		</div>
	</div>
	<div class="cform">
		<div class="info">
			<h2>معلومات الاتصال</h2>
			<p>
				للاستفسارت و التعلیقات ارسلوا لنا رسالة عبر الموقع او اتصلوا بنا و سوف نجيب علي اسئلتكم بأسرع وقت.لحجز الفنادق املأ استمارة الحجز و ارسلها الينا.و أيضا لموعد العيادة ارسلوا رسالة من الموقع أو عبر الايميل.
			</p><be />			
			<p>
				العنوان:ایران-مشهد المقدسة-......
			</p>
			<a href="#?custom=true&width=870&height=580" rel="prettyphoto">ادرس بر روی نقشه</a>
			<br /><br />
			<p class="tell">
				الهواتف:<br /><br />
				سید عباس الموسوي<span>00989153113066</span><br />
				سيد حسن الموسوي<span>00989386244563</span>
			</p>
			<p>
				فکس<span>00985117392460</span>
			</p>
			<p>
				بريد الكتروني<span>info@maktabalmosawi.ir</span>
			</p>
		</div>
		<div class="form">
			<h2>نموذج الاتصال</h2>
			<form action="mail.php" method="post" id="contact" target="ifrm">
				<p>الاسم و العائلة <span>*</span></p>
				<input type="text" class="text" name="name" id="name" autocomplete="off"/>
				<p>الايميل <span>*</span></p>
				<input	type="text" class="text" name="mail" id="mail" autocomplete="off"/>
				<p>موضوع <span>*</span></p>
				<input type="text" class="text" name="subject" id="subject" autocomplete="off" />
				<p>رسالة <span>*</span></p>
				<textarea class="messege" name="txt" id="txt"></textarea>
				<input class="button" type="submit" value="ارسال" />
			</form>
			<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
		</div>
		<div class="badboy"></div>
	</div>
</section>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyphoto']").prettyPhoto({
    	custom_markup: '<iframe width="870" height="580" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=203962002147300705700.0004d5e6c2ae38d716436&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=36.281022,59.611216&amp;spn=0.019027,0.074587&amp;z=14&amp;output=embed"></iframe>',
    	allow_resize: false,
    });
  });
</script>

<?php include('./inc/footer.php') ?>
