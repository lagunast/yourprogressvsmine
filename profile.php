<?php
include_once 'header.php';
?>

<body id="profile">

	<!--Floating View Form-->
	<div class="container" id="view">
		<div class="view">
			<div class="overlay"><a href="#" class="close">X</a>
				<div class="view_heading">
					<div class="view-icon"><img src="images/icon/Strength.png" alt="">
					</div>
					<div class="view_content">
						<h2>Name</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum veritatis asperiores tempore, atque modi, voluptatum a magni suscipit, repudiandae culpa esse. Placeat, doloremque?</p>
					</div>
				</div>
				<div class="workout">
					<table>
						<tr>
							<th></th>
							<th>Sets</th>
							<th>Reps</th>
							<th>Time</th>
							<th></th>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>5</td>
							<td>12</td>
							<td></td>
							<td><a href="#">View</a>
							</td>
						</tr>
						<tr>
							<td>Name Of Exercise</td>
							<td>3</td>
							<td>10</td>
							<td></td>
							<td><a href="#">View</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>8</td>
							<td></td>
							<td>1:00</td>
							<td><a href="#">View</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">View</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">View</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">View</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">View</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="next-page">
					<h3 class="back"><a href="#">Back</a></h3>
					<h3 class="next"><a href="#">Next</a></h3>
				</div>
				<div class="follow">
					<h3><a href="#">Follow</a></h3>
				</div>
			</div>
		</div>
	</div>
	<!--End Floating View Form-->

	<!--Floating Add Form-->
	<div class="container" id="add">
		<div class="add">
			<div class="overlay"><a href="#" class="close">X</a>
				<div class="add_heading">
					<h3 class="desc-h">Workout Description</h3>
					<h3 class="details">Workout Details</h3>
				</div>
				<form action="include/add.php" method="post">
					<div class="add_top">
						<div class="name">
							<h3>Name:</h3>
							<input type="text" name="name">
						</div>
						<div class="type">
							<h3>Type:</h3>
							<select name="type">
								<option value="Strength">Strength</option>
								<option value="Cardio">Cardio</option>
								<option value="Stretching">Stretching</option>
								<option value="Plyometrics">Plyometrics</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="sets">
						<h3>Sets:</h3>
						<input type="text" name="sets">
					</div>
					<div class="desc">
						<h3>Description:</h3>
						<textarea id="desc" name="desc"></textarea>
					</div>
					<input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>
	<!--End Floating Add Form-->

	<!--Floating Add_Two Form-->
	<div class="container" id="add_two">
		<div class="add_two">
			<div class="overlay"><a href="#" class="close">X</a>
				<div class="add_heading">
					<h3 class="desc-h">Workout Description</h3>
					<h3 class="details">Workout Details</h3>
				</div>
				<form action="include/add_two.php" method="post">
					<div class="add_top">
						<div class="name">
							<h3>Name:</h3>
							<input type="text" name="name">
						</div>
						<div class="equipment">
							<h3>Equipment:</h3>
							<input type="text" name="equipment">
						</div>
					</div>
					<div class="setup">
						<div class="sets_two">
							<h3>Sets:</h3>
							<input type="text" name="sets">
						</div>
						<div class="reps">
							<h3>Reps:</h3>
							<input type="text" name="reps">
						</div>
						<div class="time">
							<h3>Time:</h3>
							<input type="text" name="time">
						</div>
						<input type="submit" name="submit">
					</div>
				</form>

				<div class="workout">
					<table>
						<tr>
							<th></th>
							<th>Sets</th>
							<th>Reps</th>
							<th>Time</th>
							<th></th>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>5</td>
							<td>12</td>
							<td></td>
							<td><a href="#">Edit</a>
							</td>
						</tr>
						<tr>
							<td>Name Of Exercise</td>
							<td>3</td>
							<td>10</td>
							<td></td>
							<td><a href="#">Edit</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>8</td>
							<td></td>
							<td>1:00</td>
							<td><a href="#">Edit</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">Edit</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">Edit</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">Edit</a>
							</td>
						</tr>
						<tr>
							<td>Name of Exercise</td>
							<td>2</td>
							<td></td>
							<td></td>
							<td><a href="#">Edit</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="done"><a>Done</a></div>
			</div>
		</div>
	</div>
	<!--End Floating Add_Two Form-->

	<div id="wrapper">
		<main>
			<div class="profile_head"><img class="profile_img" src="images/collorrun social.jpg" alt="">
				<div class="qouted">
					<h1>"Today I will do what others won't so tomorrow I can do what others can't."</h1>
				</div>
			</div>

			<!-- Schedule -->
			<div class="nav"><a>Notifications</a>
			<a>Logout</a></div>
			<div class="schedule">
				<div id="sunday">
					<div class="rest_day">
						<p>Sunday</p>
						<h1>Rest</h1>
					</div>
				</div>
				<div id="monday">
					<div class="view_day">
						<a href="#view">
							<p>Monday</p>
							<img src="images/icon/Plyometrics.png" alt="">
							<div>
								<h4>Plyo</h4>
								<div class="dropdown"> <a href="#view">View</a> <a href="#">Follow</a> </div>
							</div>
						</a>
					</div>
				</div>
				<div id="tuesday">
					<div class="view_day">
						<a href="#view">
							<p>Tuesday</p>
							<img src="images/icon/Other.png" alt="">
							<div>
								<h4>Strength</h4>
								<div class="dropdown"> <a href="#view">View</a> <a href="#">Follow</a> </div>
							</div>
						</a>
					</div>
				</div>
				<div id="wednesday">
					<div class="view_day">
						<a href="#view">
							<p>Wednesday</p>
							<img src="images/icon/Cardio.png" alt="">
							<div>
								<h4>Cardio</h4>
								<div class="dropdown"> <a href="#view">View</a> <a href="#">Follow</a> </div>
							</div>
						</a>
					</div>
				</div>
				<div id="thursday">
					<div class="view_day">
						<a href="#view">
							<p>Thursday</p>
							<img src="images/icon/Abs.png" alt="">
							<div>
								<h4>Abs</h4>
								<div class="dropdown"> <a href="#view">View</a> <a href="#">Follow</a> </div>
							</div>
						</a>
					</div>
				</div>
				<div id="friday">
					<div class="view_day">
						<a href="#view">
							<p>Friday</p>
							<img src="images/icon/Stretching.png" alt="">
							<div>
								<h4>Stretch</h4>
								<div class="dropdown"> <a href="#view">View</a> <a href="#">Follow</a> </div>
							</div>
						</a>
					</div>
				</div>
				<div id="saturday">
					<div class="add_day"><a href="#add">
          <h1>+</h1>
          </a>
					
					</div>
				</div>
			</div>
			<!--<div class="next-page">
				<h3 class="back"><a href="#">Back</a></h3>
				<h3 class="next"><a href="#">Next</a></h3>
			</div>-->
			<!-- End Schedule -->

			<div class="flex">

				<!-- User Info -->
				<div class="info">
					<div class="info_head"> <img src="images/icon/Strength.png" alt="">
						<div class="flex">
							<h3>Name:</h3>
							<h4>Nick Simpson</h4>
						</div>
						<div class="flex">
							<h3>Goal:</h3>
							<h4>Strength</h4>
						</div>
						<div class="flex">
							<h3>Weight:</h3>
							<h4>220</h4>
						</div>
					</div>
					<h3>Today's Workout</h3>
					<table>
						<tr>
							<td>Name of Exercise</td>
							<td>Type</td>
							<td>Sets</td>
							<td><a href="#">View</a>
							</td>
						</tr>
					</table>
				</div>
				<!-- End User Info -->

				<!-- Leader Board -->
				<div class="leader">
					<h2>Leader Board</h2>
					<div class="score">
						<table>
							<tr>
								<th></th>
								<th>Name</th>
								<th>Week</th>
								<th>Followers</th>
								<th></th>
							</tr>
							<tr>
								<td>1</td>
								<td>Jason Roberts</td>
								<td>5</td>
								<td>223</td>
								<td><a href="#">View</a>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jason Roberts</td>
								<td>5</td>
								<td>223</td>
								<td><a href="#">View</a>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Jason Roberts</td>
								<td>5</td>
								<td>223</td>
								<td><a href="#">View</a>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Jason Roberts</td>
								<td>5</td>
								<td>223</td>
								<td><a href="#">View</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- End Leader Board -->

			</div>

			<!-- Social Area -->
			<div class="social">

				<!-- Live Updates -->
				<aside>
					<h2>Live Update</h2>
					<div class="update">
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
						<div class="user_update">
							<p class="name"><span>Nick Simpson:</span> Added a new workout today! <a href="#">View</a>
							</p>
						</div>
					</div>
				</aside>
				<!-- End Live Updates -->

				<!-- Chat Box -->
				<div class="messenger">
					<h2>Chat</h2>
					<div class="chatbox">
						<div class="chatlogs">
							<div class="chat friend">
								<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
								</div>
								<p class="chat-message">What's up, Brother..!!</p>
							</div>
							<div class="chat self">
								<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
								</div>
								<p class="chat-message">What's up 1234..!!</p>
							</div>
							<div class="chat friend">
								<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
								</div>
								<p class="chat-message">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. </p>
							</div>
							<div class="chat friend">
								<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
								</div>
								<p class="chat-message">What's up, Brother..!!</p>
							</div>
							<div class="chat self">
								<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
								</div>
								<p class="chat-message">What's up..!!</p>
							</div>
						</div>
					</div>
					<div class="chat-form">
						<textarea></textarea>
						<button>Submit</button>
					</div>
				</div>
				<!-- End Chat Box -->

				<!-- Who's Online -->
				<aside>
					<h2>Who's Online</h2>
					<div class="users">
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpson</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick ci</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpso fafda</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpson</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpson</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpson</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpson</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpson</p>
						</div>
						<div class="online">
							<div class="user-photo"><img src="images/collorrun social.jpg" alt="">
							</div>
							<p class="name">Nick Simpson</p>
						</div>
					</div>
				</aside>
				<!-- End Who's Online -->

			</div>
			<!-- End Social Area -->

			<div class="flex">
				<div class="nutr"><img src="images/ripped-meal-plan.png" alt="">
				</div>
				<div class="sup"><img src="images/body_building_ad.jpg" alt="">
				</div>
			</div>
		</main>
	</div>
	<script src="js/main.js">
	</script>
</body>
</html>