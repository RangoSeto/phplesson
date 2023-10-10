<?php
	// echo microtime(); // ဒါမှာ၂မျိုးပါတာ
	// echo microtime(true); //အနောက်ကရှိတဲ့ mill seconds ရမှာ
	// echo round(microtime(1));

	// echo uniqid();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link href="./style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class="container">
		
		<div id="dotbox" class="dotbox">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>

		<form id="form" action="./registerfunction.php" method="post" enctype="multipart/form-data">
			<h1>Register With Us</h1>

			<div class="page">
				<label for="email">Security :</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" />
				<input type="password" name="password" id="password" class="form-control" placeholder="Enter Passcode" autocomplete="off" />
				<div>
					<input type="radio" name="newsletter" id="agree" class="form-check-input" value="1" checked /><label for="agree" class="form-check-input"> I agree to get newsletter.</label>
					<br/>
					<input type="radio" name="newsletter" id="noagree" class="form-check-input" value="0" /><label for="noagree" class="form-check-input"> I don't agree to get newsletter.</label>
				</div>
			</div>

			<div class="page">
				<label for="firstname">Personal Info :</label>
				<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname" autocomplete="off" />
				<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname" autocomplete="off" />
				<div>
					<label for="profile">Profile Picture</label>
					<input type="file" name="profile[]" id="profile" class="form-control" />
				</div>
			</div>

			<div class="page">
				<label for="dob">Date Of Bath :</label>
				<input type="date" name="dob" id="dob" class="form-control" />
			</div>

			<div class="page">
				<label for="phone">Contact Info :</label>
				<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" autocomplete="off" />
				<input type="text" name="address" id="address" class="form-control" placeholder="Enter Detail Address" autocomplete="off" />
				<div>
					<input type="checkbox" name="documents[]" id="docnrc" class="form-check-input" value="nrc" /><label for="docnrc" class="form-check-input"> I have NRC.</label>
					<br/>
					<input type="checkbox" name="documents[]" id="docpassport" class="form-check-input" value="passport" /><label for="docpassport" class="form-check-input"> I have passport.</label>
				</div>
			</div>

			<div class="d-flex">
				<button type="button" id="prevbtn" class="btn" onclick="gonow(-1)">Previous</button>
				<button type="button" id="nextbtn" class="btn" onclick="gonow(1)">Next</button>
			</div>

            <p>Already register? <a href="./signin.php">Signin here !!!</a></p>


		</form>

		<div id="result-container"></div>

	</div>

	

	<script src="./app.js" type="text/javascript"></script>
</body>
</html>

