<?php include('./inc/header.php') ?>

<div class="containrsv">
	<div class="inside">
		<div class="condition"></div>
		<div class="reservation">
			<div class="date">
				<h2>YOUR RESERVATION</h2>
	            <div class="checkin">
	            	<p>Check in</p>
	            	<form name="month" id="month">
	              		<select name="jumpMenu" class="month" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>Month</option><option>January</option>
	                    <option>February</option><option>March</option>
	                    <option>April</option><option>May</option>
	                    <option>June</option><option>July</option>
	                    <option>August</option><option>Septamber</option>
	                    <option>Octobr</option><option>November</option>
	                    <option>December</option>
                  		</select>
              		</form>
              		<form name="day" id="day">
	              		<select name="jumpMenu" class="day" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>Day</option><option>1</option><option>2</option><option>3</option>
	                    <option>4</option><option>5</option><option>6</option><option>7</option>
	                    <option>8</option><option>9</option><option>10</option><option>11</option>
	                    <option>12</option><option>13</option><option>14</option><option>15</option>
	                    <option>16</option><option>17</option><option>18</option><option>19</option>
	                    <option>20</option><option>21</option><option>22</option><option>23</option>
	                    <option>24</option><option>25</option><option>26</option><option>27</option>
	                    <option>28</option><option>29</option><option>30</option><option>31</option>
						</select>
              		</form>
              		<form name="year" id="year">
	              		<select name="jumpMenu" class="year" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>Year</option><option>2013</option><option>2014</option>
	                   	</select>
              		</form>
	            </div><br />
	            <div class="checkout">
	            	<p>Check out</p>
	            	<form name="month" id="month">
	              		<select name="jumpMenu" class="month" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>Month</option><option>January</option>
	                    <option>February</option><option>March</option>
	                    <option>April</option><option>May</option>
	                    <option>June</option><option>July</option>
	                    <option>August</option><option>Septamber</option>
	                    <option>Octobr</option><option>November</option>
	                    <option>December</option>
                  		</select>
              		</form>
              		<form name="day" id="day">
	              		<select name="jumpMenu" class="day" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>Day</option><option>1</option><option>2</option><option>3</option>
	                    <option>4</option><option>5</option><option>6</option><option>7</option>
	                    <option>8</option><option>9</option><option>10</option><option>11</option>
	                    <option>12</option><option>13</option><option>14</option><option>15</option>
	                    <option>16</option><option>17</option><option>18</option><option>19</option>
	                    <option>20</option><option>21</option><option>22</option><option>23</option>
	                    <option>24</option><option>25</option><option>26</option><option>27</option>
	                    <option>28</option><option>29</option><option>30</option><option>31</option>
						</select>
              		</form>
              		<form name="year" id="year">
	              		<select name="jumpMenu" class="year" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>Year</option><option>2013</option><option>2014</option>
	                   	</select>
              		</form>	
	            </div><br />
	        	<div class="first">
	        		<p>Number of persons</p>
	        		<form name="person" id="person">
	              		<select name="jumpMenu" class="person" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>-Select-</option><option>1</option>
		                <option>2</option><option>3</option><option>4</option>
		                <option>more</option>
		            </select>
		        </form>
	        	</div><br />
	        	<div class="second">
	        		<p>Number of rooms</p>
	        		<form name="room" id="room">
	              		<select name="jumpMenu" class="room" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
		                <option>-Select-</option><option>1</option>
		                <option>2</option><option>3</option><option>4</option>
		                <option>more</option>
		            </select>
		        	</form>
		    	</div>
		  	</div>
			<div class="contact">
				<h2>CONTACT PERSON</h2>
				<div class="name">
					<p>First Name</p>
					<input>
				</div>
				<div class="last">
					<p>Last Name</p>
					<input>
				</div>
				<div class="company">
					<p>Company</p>
					<input>
				</div>
				<div class="email">
					<p>Email</p>
					<input>
				</div>
				<div class="phone">
					<p>Phone</p>
					<input>
				</div>
			</div>
			<div class="additional"></div>
			<div class="phones">
				<h2>PHONES</h2>	
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus portausce suscipit varius mi. Cum sociis natoque penatibus.</p>
				<p><br />For information and accommodation <br />
+1 959 603 6035

For meetings or special events 
+1 959 603 6035
For restaurant reservations 
+1 959 603 6035

Fax 
+1 101 889 9898</p>
			</div>
		</div>
	</div>
</div>

<?php include('./inc/footer.php') ?>
<!--  -->
