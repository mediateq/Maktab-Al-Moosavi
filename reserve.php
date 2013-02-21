<?php include('./inc/header.php') ?>

<section class="reserve">
	<div class="forms">
		<div class="title">
			<h2>استمارة الحجز</h2>
		</div>
		<form action="reserve-mail.php" method="post" target="ifrm">
			<label><p class="check">تاریخ الوصول</p>
				<select name="yearin" class="year" id="year">
                	<option>الستة</option>
                	<option>2013</option>
                	<option>2014</option>
                	<option>2015</option>
                	<option>2016</option>
                	<option>2017</option>
                	<option>2018</option>
                	<option>2019</option>
                	<option>2020</option>
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
                	<option>الستة</option>
                	<option>2013</option>
                	<option>2014</option>
                	<option>2015</option>
                	<option>2016</option>
                	<option>2017</option>
                	<option>2018</option>
                	<option>2019</option>
                	<option>2020</option>
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
			<label class="person-room"><p class="person-room">تعداد الشخاص</p>
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
            <label class="person-room"><p class="person-room">تعداد اتاق ها</p>
				<select name="room" class="room" id="room">
	                <option>-انتخب-</option>
	                <option>1</option>
	                <option>2</option>
	                <option>3</option>
	                <option>اکثر</option>
	            </select>
            </label>
            <div class="badboy"></div>
           
           	<div class="title">
				<h2>المعلومات الشخصیة</h2>
			</div>
			<label>
				<input type="radio" name="gender" id="gender" class="gender" value="آقا" />
				<p class="gender">آقا</p>
			</label>
			<label>
				<input type="radio" name="gender" id="gender" class="gender" value="خانم" />
				<p class="gender">خانم</p>
			</label>
			<div class="badboy"></div>
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
				<h2>خدمات اضافی</h2>
			</div>
			<label>
				<input type="checkbox" name="bedextra" class="bedextra" id="bedextra" value="تخت اضافی در اتاق می خواهم" />
				<p class="extra">تخت اضافه در اتاق</p>
			</label>
			<label>
				<input type="checkbox" name="carrent" class="carrent" id="carrent" value="ماشین می خواهم" />
				<p class="extra">کرایه ماشین</p>
			</label>
			<div class="badboy"></div>
			<label>
				<input type="checkbox" name="visitdr" class="visitdr" id="visitdr" value="تمایل ویزیت دکتر را دارم" />
				<p class="extra">ویزیت دکتر</p>
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
			<h2>شرایط و مقررات</h2>
			<p>
				شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو شرایط مد نظر در اینجا قید شو 
			</p>
		</div>

		<div class="title">
			<h2>آدرس</h2>
			<p>
				آدرس در این قسمت قید میشود آدرس در این قسمت قید میشود آدرس در این قسمت قید میشود آدرس در این قسمت قید میشود آدرس در این قسمت قید میشود آدرس در این قسمت قید میشود آدرس در این قسمت قید میشود آدرس در این قسمت قید میشود 
			</p>
		</div>

		<div class="title">
			<h2>تلفن</h2>
			<p>
				تلفن: 123456789
			</p>
			<p>
				فاکس: 987654321
			</p>
		</div>
	</div>
	<div class="badboy"></div>
</section>

<?php include('./inc/footer.php') ?>