<?php
	// echo microtime(); // ဒါမှာ၂မျိုးပါတာ
	// echo microtime(true); //အနောက်ကရှိတဲ့ mill seconds ရမှာ
	// echo round(microtime(1));

	// echo uniqid();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link href="./style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class="container">
		
		<div id="dotbox" class="dotbox">
			<span class="dot"></span>
		</div>

		<form id="form" action="./loginfunction.php" method="post">
			<h1>Login With Us</h1>

			<div>
				<label for="email">Security :</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" />
				<input type="password" name="password" id="password" class="form-control" placeholder="Enter Passcode" autocomplete="off" />
				
			</div>

			<div class="d-flex">
				<button type="submit" id="submit" class="btn">Login</button>
			</div>

            <p>You don't have account? <a href="./signup.php">Signup here !!!</a></p>

		</form>


	</div>

	

	<script src="./app.js" type="text/javascript"></script>
</body>
</html>

