 <?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body style="background-color:#B6BABD">

	<div id="main">
		<label align="center" id="registration_hdng"><b>Registration Page</b></h2></label>
		<div style="width:200px; height:250px;"> </div><img src="Images/male.png" class="profile"><br><br>


	<form class="myform" action="register.php" method="post">		<!--php code on register.php will be executed-->

		<label><b>First Name:</b></label>
		<input type="text" class="names" name="first_name"/><br><br>
		<label><b>Middle Name:</b></label>
		<input type="text" class="names" name="middle_name"/><br><br>
		<label><b>Last Name:</b></label>
		<input type="text" class="names" name="last_name" /><br><br>

		<!--------------------------------------------------------------------------------------------------------------------->

		<label><b>Gender:</b></label>
		<input type="radio" class="radiobutton" name="gender" value="male" checked required/>Male
		<input type="radio" class="radiobutton" name="gender" value="female" required/>Female<br><br>

		<!--------------------------------------------------------------------------------------------------------------------->

		<label><b>Date of birth:</b></label>
		<select size="1" class=" validate['required']" title="" name="dob">
		<option value="1" selected="selected">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		</select>
		<select size="1" class=" validate['required']" title="" name="dob">
		<option value="January" selected="selected">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
		</select>
		<select size="1" class=" validate['required']" title="" name="dob">
		<option value="2017" selected="selected">2017</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
		<option value="1995">1995</option>
		<option value="1994">1994</option>
		<option value="1993">1993</option>
		<option value="1992">1992</option>
		<option value="1991">1991</option>
		<option value="1990">1990</option>
		<option value="1989">1989</option>
		<option value="1988">1988</option>
		<option value="1987">1987</option>
		<option value="1986">1986</option>
		<option value="1985">1985</option>
		<option value="1984">1984</option>
		<option value="1983">1983</option>
		<option value="1982">1982</option>
		<option value="1981">1981</option>
		<option value="1980">1980</option>
		<option value="1979">1979</option>
		<option value="1978">1978</option>
		<option value="1977">1977</option>
		<option value="1976">1976</option>
		<option value="1975">1975</option>
		<option value="1974">1974</option>
		</select>
		<!--<script="text/javascript">
				for(var i = 0; i<32; i++)

		</script>-->

		<br><br>
		<label for="uname"><b>Username:</b></label>
		<input name="username" type= "text" class= "inputvalues" placeholder="Enter your username" required/><br><br>	<!-- to make it as a required field to(NOT NULL)-->
		<label><b>Password:</b></label>
		<input name="password" type= "password" class= "inputvalues" placeholder="Enter your password" required/><br><br>
		<label><b>Confirm Password:<b/></label>
		<input name="cpassword" type= "password" class= "inputvalues" placeholder="Re-type your password" required/><br>
		</br>

		<!--------------------------------------------------------------------------------------------------------------------->

		<label>Passport Number:</label>
		<input type="text" name="passport_no" class="general"/><br><br>
		<label>Nationality:</label>
		<input type="text" name="nationality" class="general"/><br><br>
		<label>Profession:</label>
		<input type="text" name="profession" class="general" /><br><br>
		<label>Contact No.:</label>
		<input type="text" name="contact_no" class="general"/><br><br>
		<label>Mobile No.:</label>
		<input type="text" name="mobile_no" class="general"/><br><br>
		<label>Email Address:</label>
		<input type="text" name="Email" class="general"/><br><br>

		<!--------------------------------------------------------------------------------------------------------------------->

		<label>Address:</label>
		<input type="text" name="address" class="ad" placeholder="Enter your street number, street name and building name "/><br><br>

		<!--------------------------------------------------------------------------------------------------------------------->

		<label><b>Admission Type:</b></label>
		<input type="radio" class="radiobutton" name="admission_type" value="Regular" checked required/>Regular
		<input type="radio" class="radiobutton" name="admission_type" value="Shifting" required/>Shifting<br><br>

		<label>Resident of:</label>
		<select size="1" class=" validate['required']" title="" name="Resident_of">
		<option value="Dubai"selected="selected">Dubai</option>
		<option value="Sharjah">Sharjah</option>
		<option value="Ajman">Ajman</option>
		<option value="Abu Dhabi">Abu Dhabi</option>
		<option value="Al Ain">Al Ain</option>
		<option value="Other">Other</option>
		</select>
		<br><br>
		<label>Applying for:</label>
		<select size="1" class="" title="" name="ApplyFor">
		<option value="">Please select</option>
		<option value="Light Motor Vehicle">Light Motor Vehicle</option>
		<option value="Motor Cycle">Motor Bike</option>
		<option value="Heavy Bus">Heavy Bus</option>
		<option value="Heavy Truck">Heavy Truck</option>
		</select><br><br>

		<!--------------------------------------------------------------------------------------------------------------------->

		<input name="submit_btn" type= "submit" id= "submit_btn" value="Sign Up"/><br>
		<a href="index.php"><input type= "button"  id= "back_btn" value="Back"/></a>
		</form>


	<?php
	//POST- whenever u enter/send data fron the fronte to the server, this data can be accessed		;password shd not be displayed in the url implies post method
	//GET- whenever u enter/send data fron the fronte to the server, this data will be visible in the address(search) bar (of the window)

		if(isset($_POST['submit_btn']))   //to check if the button is clicked or not
		{
			//echo'<script type="text/javascript"> alert("Sign-up button clicked")</script>';
			$username = $_POST['username'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			if($password==$cpassword)
			{

				$query= "select Username from login where Username='$username'";			//checks database if the username already exits
				$query_run = mysqli_query($con,$query);								//mysqli_query executes the query in its parameter						//returns the table
				$result = mysqli_num_rows($query_run);
				echo $result;
				if(mysqli_num_rows($query_run)>0){

					echo '<script type="text/javascript"> alert("User already exists. Try another username") </script>';
				}else{
					$query= "insert into login values ('$username','$password')";	//adding the new username and password to the db
					$query_run= mysqli_query($con,$query);

					if($query_run)													//if the db is successfully updated
					{
						echo '<script type="text/javascript"> alert("User Registered. Proceed to the login page.")</script>';
					}
					else															//if the db is NOT successfully updated
					{
						echo '<script type="text/javascript">alert("Error!")</script>';
					}
				}
			}
			else
			{
				echo '<script type="text/javascript">alert("Password and Confirm password does not match.")</script>';
			}
		}
		?>

	</div>
</body>
</html>
