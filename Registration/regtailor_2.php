	<!--A Design by W3layouts 
	Author: W3layout
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
	-->
	<?php
session_start();
require_once("../db.class.php");
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>E-TAILORING</title>
	 
		<!-- Meta-Tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta charset="utf-8">
	    <meta name="keywords" content="Space Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	    <script>
	        addEventListener("load", function () {
	            setTimeout(hideURLbar, 0);
	        }, false);

	        function hideURLbar() {
	            window.scrollTo(0, 1);
	        }
	    </script>
	    <!-- //Meta-Tags -->

		<!-- css files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- css files -->

		<!-- Online-fonts -->
		<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
		<!-- //Online-fonts -->

	</head>
	<body>
	<?php
		$ob=new db_operations();
	$_SESSION['name']=$_POST['name'];
	$_SESSION['username']=$_POST['email'];
	$_SESSION['password']=$_POST['password'];
	$_SESSION['phoneno']=$_POST['phone_number'];
	$email=$_POST['email'];
    $phone=$_POST['phone_number'];
    echo $_SESSION['phoneno'];
    $sel1="select * from registration where user_name='$email'";
     $sel2="select * from registration where contact_number='$phone'";
		   $res1=$ob->db_read($sel1);
		    $res2=$ob->db_read($sel2);
  if(mysqli_num_rows($res1))
  	{
  	 ?>
<script>
alert("user already exist");
window.location='regtailor_1.php'
</script>;
<?php 
}
	if(mysqli_num_rows($res2))
  	{?>
<script>
alert("contact number already exist");
window.location='regtailor_1.php'
</script>;
<?php
}
?>



		<!-- Main Content -->
		<div class="main">
			<div class="main-w3l">
				<h1 class="logo-w3">E-TAI<span class="lohny">L</span>ORING</h1>
				<div class="w3layouts-main">
					<br>
						<form action="regtailor_3.php" method="post">
										<div class="radio">
														<p align="center">
														<label>
														  <input type="radio" name="gender" value=0 required="">
														  male
														</label>
														<label>
														<input type="radio" name="gender" value=1 required="">
														female
														</label>
														<label>
														<input type="radio" name="gender" value=2 required="">
														other
														</label>
													</p>
												</div>
												<br>
							<input placeholder="House name" name="housename" type="text" required="" pattern="([^\s][A-Za-z\s]+)">


							<select id="country" name="country" required="">
								<option value="" disabled selected hidden>Select country</option>
								<?php
								$contryData="select id,country_name from country";
								$result=$ob->db_read($contryData);
								if(mysqli_num_rows($result)>0)
								{
									while($arr=mysqli_fetch_assoc($result))
									{
                                     ?>
                                     <option value="<?php echo $arr['country_name']; ?>"><?php echo $arr['country_name']; ?></option>
                                 <?php } } ?>
                             </select>
							

							<br>
							<br>

							<select name="state" id="state" required="">
								<option value="">Select state</option>
							</select>
							<br>
							<br>

							<select name="district" id="district" required="">
								<option value="">Select district</option>
							</select>
							
							<br>
							<input placeholder="city" name="city" type="text" required="" pattern="([^\s][A-Za-z\s]+)">
							<br>
							<br>
							<input type="submit" name="b2" value="NEXT">
						<br><br>
						</form>
				</div>
				<!-- //main -->
				
				<!-- password-script --><!--footer-->
				<div>
				</div>
				<!--//footer-->
				
			</div>
		</div>
		<!-- //Main Content -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="ajax-script.js" type="text/javascript">
</script>

	</body>
	</html>
