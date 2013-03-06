<?php include('./inc/header.php') ?>

<section class="reserve">
	<div class="forms">
		<div class="title">
			<h2>إستمارة الحجز</h2>
		</div>
		<form action="reserve-mail.php" method="post" target="ifrm">
			<label><p class="check">تاریخ الوصول</p>
				<select name="yearin" class="year" id="year">
                	<option>السنه</option>
                	<option>2013</option>
                	<option>2014</option>
                	<option>2015</option>
               	</select>
				<select name="monthin" class="month" id="month">
	                <option>الشهر</option>
	                <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>Septamber</option>
                    <option>Octobr</option>
                    <option>November</option>
                    <option>December</option>
          		</select>
          		<select name="dayin" class="day" id="day">
	                <option>اليوم</option>
	                <option>1</option>
	                <option>2</option>
	                <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
				</select>
			</label>
			<div class="badboy"></div>
			<label><p class="check">تاريخ المغاىرة</p>
				<select name="yearout" class="year" id="year">
                	<option>السنه</option>
                	<option>2013</option>
                	<option>2014</option>
                	<option>2015</option>
                </select>
				<select name="monthout" class="month" id="month">
	                <option>الشهر</option>
	                <option>January</option>
                    <option>February</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>Septamber</option>
                    <option>Octobr</option>
                    <option>November</option>
                    <option>December</option>
          		</select>
          		<select name="dayout" class="day" id="day">
	                <option>اليوم</option>
	                <option>1</option>
	                <option>2</option>
	                <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
				</select>
			</label>
			<div class="badboy"></div>
			<label class="person-room"><p class="person-room">عدد الأشخاص</p>
				<select name="person" class="person" id="person">
	                <option>-انتخب-</option>
	                <option>1</option>
	                <option>2</option>
	                <option>3</option>
	                <option>4</option>
	                <option>5</option>
	                <option>اکثر</option>
	            </select>
            </label>
            <div class="badboy"></div>
            <label class="person-room"><p class="person-room">نوع الغرفة</p>
				<select name="room" class="room" id="room">
	                <option>-انتخب-</option>
	                <option>الغرفة المفردة</option>
	                <option>الغرفة المزدوجة</option>
	                <option>الغرفة الثلاثية</option>
	                <option>الغرفة الرباعية</option>
                    <option>سويت لشخصين</option>
                    <option>سويت غرفتين و صالة</option>
                    <option>دبل كونكت</option>
                    <option>شقة غرفتين و صالة</option>
                    <option>فول بورد</option>
                </select>
            </label>
            <div class="badboy"></div>
           <label class="hotels"><p class="select-hotel">اختیار الاول للفندق</p>
				<select name="yearin" class="year" id="year">
                	<option>-انتخب-</option>
                	<option>فندق قصر طلایي الدولي</option>
                    <option>فندق درویشي الفاخر</option>
                    <option>فندق قصر الماس الدولي</option>
                    <option>فندق طوس</option>
                    <option>فندق الجواد</option>
                    <option>فردوس</option>
                    <option>بشری</option>
                    <option>کیانا</option>
                    <option>سهند</option>
                    <option>خلیج فارس</option>
               	</select>
			</label>
			<div class="badboy"></div>
			<label class="hotels"><p class="select-hotel">اختیار الثانی للفندق</p>
				<select name="yearin" class="year" id="year">
                	<option>-انتخب-</option>
                	<option>فندق قصر طلایي الدولي</option>
                	<option>فندق درویشي الفاخر</option>
                	<option>فندق قصر الماس الدولي</option>
                	<option>فندق طوس</option>
                	<option>فندق الجواد</option>
                	<option>فردوس</option>
					<option>بشری</option>
                    <option>کیانا</option>
                    <option>سهند</option>
                	<option>خلیج فارس</option>
               	</select>
			</label>
			<div class="badboy"></div>
			<label class="hotels"><p class="select-hotel">اختیار الثالث للفندق</p>
				<select name="yearin" class="year" id="year">
                	<option>-انتخب-</option>
                	<option>فندق قصر طلایي الدولي</option>
                    <option>فندق درویشي الفاخر</option>
                    <option>فندق قصر الماس الدولي</option>
                    <option>فندق طوس</option>
                    <option>فندق الجواد</option>
                    <option>فردوس</option>
                    <option>بشری</option>
                    <option>کیانا</option>
                    <option>سهند</option>
                    <option>خلیج فارس</option>
               	</select>
			</label>
			<div class="badboy"></div>

           	<div class="title">
				<h2>المعلومات الشخصیة</h2>
			</div>
			<div class="badboy"></div><br />
			<label><p class="personal">الاسم</p>
				<input type="text" name="name" id="name" class="name" placeholder="الاسم" />
			</label>
			<div class="badboy"></div>
			<label><p class="personal">المعلومات الاضافیة</p>
				<input type="text" name="family" id="family" class="family" placeholder="المعلومات الاضافیة" />
			</label>
			<div class="badboy"></div>
			<label><p class="personal">الا یمیل</p>
				<input type="text" name="mail" id="mail" class="mail ltr" placeholder="someone@example.com" />
			</label>
			<div class="badboy"></div>
			<label><p class="personal">رقم الهاتف</p>
				<input type="text" name="phone" id="phone" class="phone ltr" placeholder="985119876543" />
			</label>
			<div class="badboy"></div>
			
			<div class="title">
				<h2>تاییدیه</h2>
			</div>
			<p>
				لطفا شرایط و مقررات رزرو را که در سمت چپ قید شده است به دقت مطالعه نموده و برای تکمیل عملیات رزرو فرم پرکرده را تایید و دکمه رزرو را کلیک نمایید.
			</p>
			<label>
				<input type="radio" name="accept" class="accept" id="accept" />
				<p class="accept">اوافق قوانین مكتب الموسوي و اؤيد صحة اطلاعات الاستمارة.</p>
			</label>
			<div class="badboy"></div>

			<input type="submit" class="btn" id="reserv" value="إرسال">
			<div class="badboy"></div>
		</form>
		<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
	</div>
	<div class="detail">
		<div class="title">
			<h2>الضوابط و القوانین</h2>
			<p>
				الزائر العزيز املأ الاستماره التي موجودة هنا و تأكد من صحتها ثم ارسلها الينا. لديكم ثلاث اختيارات للفنادق، نحن نسعي أن نحجز لكم اول فندق و لكن اذا كانت الأيام زحمة والفنادق ممتلئه سوف نستفيد من باقي الاختيارات لأن لا يفوت الوقت ولا يذهب الحجز منكم .بعد ما ترسلون الرسالة الينا سوف نحجز لكم السكن المذكور ومن تم نرسل لكم رسالة عبر الانترنيت أو نتصل بكم و نعطيكم النتيجة في أسرع وقت.ثم بعدها نعطيكم رقم حساب المكتب و نرجوا منكم ان ترسلوا الرسومات الينا لمدة24 ساعة.ثم نرسل لكم وصل الحجز من مكتبا عبر الانترنيت و بهذا الوصل يمكنكم أن تذهبوا الي الفندق في يوم الوصول و تسكنون فيه و نتمنی لكم اقامة جيدة و جميلة.
			<br /><br />من أراد أن يكنسل السكن يجب أن يخبرنا قبل72 ساعة والا تحتسب ليلة علي المسافر.واذا أردتم خدمات أكثر من عندنا اكتبوا لنا المطلوب وسوف نسعي لتقديمها.</p>سيد عباس الموسوي
		</div>

		<div class="title">
			<h2>العنوان</h2>
			<p>
				ایران - مشهد المقدسة ...
			</p>
		</div>

		<div class="title">
			<h2>الاتصال</h2>
			<p>
				تلفن: 00989153113066
			</p>
			<p>
				فاکس: 00985117392460
			</p>
		</div>
	</div>
	<div class="badboy"></div>
</section>

<?php include('./inc/footer.php') ?>