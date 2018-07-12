<?php
include_once 'header.php';
?>

<body id="welcome">
	<div id="wrapper">
		<header> <img src="images/header.jpg" alt="">
			<h1><span class="char1">Y</span><span class="char2">O</span><span class="char3">U</span><span class="char4">R</span> <span class="char5">PROGRESS VS MINE</span></h1>
		</header>
		<main>
			<div class="content">
				<h2>Welcome to the home of Your Progress VS Mine </h2>
				<p>We’re here to help motivate you in any type of physical transformation. From Bodybuilding to Crossfit, Sports Trainiing to General Health. The idea is to let everyone show off and post idea’s to help everyone else. Create your profile and share your idea’s.</p>
			</div>
			<div class="logo"><img src="images/logo.png" alt="">
				<div class="signin">
					<h2><a href="#modal">Sign In</a></h2>
				</div>
				<div class="signup">
					<h2><a href="#signup">Sign Up</a></h2>
				</div>
			</div>

			<!--Floating Login Form-->
			<div class="container" id="modal">
				<div class="login">
					<div class="overlay"> <a href="#" class="close">X</a> <span class="login_heading">Sign In</span>
						<form action="assets/php/login.php" method="post">
							<h3>Email:</h3>
							<input type="text" name="name">
							<h3>Password:</h3>
							<input type="password" name="password">
							<input type="submit" name="submit" value="Enter">
							<img src="images/signin.png" alt="">
						</form>
						<a href="" class="forgotPassword"> Forgot Password? </a> </div>
				</div>
			</div>
			<!--End Floating Login Form-->

			<!--Floating Signup Form-->
			<div class="container" id="signup">
				<div class="signup_form">
					<div class="overlay"> <a href="#" class="close">X</a> <span class="signup_form_heading">Sign Up</span>
						<form action="include/signup.php" method="post">
							<div class="name">
								<h3>Name:</h3>
								<div class="first">
									<h4>First</h4>
									<input type="text" name="first">
								</div>
								<div class="last">
									<h4>Last</h4>
									<input type="text" name="last">
								</div>
							</div>
							<div class="dob">
								<h3>DOB:</h3>
								<input type="date" name="dob">
							</div>
							<div class="goal">
								<h3>Goal:</h3>
								<select name="goal">
									<option value="Build Muscle">Build Muscle</option>
									<option value="Lose Fat">Lose Fat</option>
									<option value="Transform">Transform</option>
									<option value="Improve">Improve</option>
									<option value="Endurance">Endurance</option>
									<option value="Flexibility">Flexibility</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="email">
								<h3>Email:</h3>
								<input type="email" name="email">
							</div>
							<div class="male">
								<h3>Male</h3>
								<input type="radio" name="gender" value="male">
							</div>
							<div class="female">
								<h3>Female</h3>
								<input type="radio" name="gender" value="female">
							</div>
							<div class="password">
								<h3>PW:</h3>
								<div class="password_one">
									<h4>Enter Password</h4>
									<input type="password" name="pwd_one">
								</div>
								<div class="password_two">
									<h4>Password Again</h4>
									<input type="password" name="pwd_two">
								</div>
							</div>
							<div class="qoute">
								<h3>Qoute:</h3>
								<textarea id="qoute" name="qoute"></textarea>
							</div>
							<div class="image">
								<h3>image:</h3>
								<input type="file" name="image">
							</div>
							<input type="submit" name="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
			<!--End Floating Signup Form-->

		</main>
	</div>
</body>