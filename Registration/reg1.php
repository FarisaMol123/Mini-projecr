<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

	<!-- Main Content -->
	<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3">E-TAI<span class="lohny">L</span>ORING</h1>
			<div class="w3layouts-main">
				<h2><span class="lohny">Register now</span></h2>
					<form action="reg2.php" method="post">
						<input placeholder="Name" name="name" type="text" required="" pattern="([^\s][A-Za-z\s]+)">
						<input placeholder="Email" name="email" type="email" required="" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{3,3}$" title="invalid mail format">
                      <input placeholder="contact number" name="phone_number" type="text" pattern="[+0-9]{12,13}" required="" onfocus="(this.value='+91')">
                <input placeholder="Password" name="password" type="password"  id="password1" required="" minlength="8" maxlength="20">
					   <input placeholder="Confirm Password" name="Password" type="password"  id="password2" required="" minlength="8" maxlength="20">
						<input type="submit" name="b1"value="Next">
					</form>
					<br>
					<br>
					<h4 align="left"><a href="../Homepage/home.php"><font color="orange">Home</font></a></h4>
			</div>
			<!-- //main -->
			
			<!-- password-script -->
			<script>
				window.onload = function () {
					document.getElementById("password1").onchange = validatePassword;
					document.getElementById("password2").onchange = validatePassword;
				}

				function validatePassword() {
					var pass2 = document.getElementById("password2").value;
					var pass1 = document.getElementById("password1").value;
					if (pass1 != pass2)
						document.getElementById("password2").setCustomValidity("Passwords Don't Match");
					else
						document.getElementById("password2").setCustomValidity('');
					//empty string means no validation error
				}
			</script>
			<!-- //password-script -->

			<!--footer-->
			<div>
			</div>
			<!--//footer-->
			
		</div>
	</div>
	<!-- //Main Content -->

</body>
</html>
