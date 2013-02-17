<?php include('./inc/header.php') ?>

<section class="contact">
	<div class="title">
		<h2>تماس با ما</h2>
	</div>
	<div class="location">
		<div class="map">
			<iframe width="870" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=203962002147300705700.0004d5e6c2ae38d716436&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=36.281022,59.611216&amp;spn=0.019027,0.074587&amp;z=14&amp;output=embed"></iframe>
		</div>
	</div>
	<div class="cform">
		<div class="info">
			<h2>اطلاعات تماس</h2>
			<p>
				اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد اطلاعات تماس در این قسمت قرار میگیرد 
			</p>
			<br />
			<p>
				آدرس در این قسمت قرار میگیرد آدرس در این قسمت قرار میگیرد آدرس در این قسمت قرار میگیرد آدرس در این قسمت قرار میگیرد
			</p>
			<br />
			<p>
				تلفن: 123456789
			</p>
			<p>
				فاکس: 987654321
			</p>
			<p>
				ایمیل: 
			</p>
		</div>
		<div class="form">
			<h2>فرم تماس</h2>
			<form action="mail.php" method="post" id="contact" target="ifrm">
				<p>نام و نام خانوادگی <span>*</span></p>
				<input type="text" class="text" name="name" id="name" autocomplete="off"/>
				<p>ایمیل <span>*</span></p>
				<input	type="text" class="text" name="mail" id="mail" autocomplete="off"/>
				<p>موضوع <span>*</span></p>
				<input type="text" class="text" name="subject" id="subject" autocomplete="off" />
				<p>پیام <span>*</span></p>
				<textarea class="messege" name="txt" id="txt"></textarea>
				<input class="button" type="submit" value="ارسال" />
			</form>
			<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
		</div>
		<div class="badboy"></div>
	</div>
</section>

<?php include('./inc/footer.php') ?>
