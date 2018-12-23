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
        <p>We are here to help motivate you in any type of physical transformation. From Bodybuilding to Crossfit, Sports Training to General Health. The idea is to let everyone show off and post idea's to help everyone else.</p>
        <a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
      </div>
      <div class="logo"><img src="images/logo.png" alt="">
        <div class="signin">
          <h2><a href="#signin">Sign In</a></h2>
        </div>
        <div class="signup">
          <h2><a href="#signup">Sign Up</a></h2>
        </div>
      </div>

      <!--Floating Login Form-->
      <div class="container" id="signin">
        <div class="login">
          <form action="include/login.php" method="post">
            <div class="uid">
              <label for="uid">Username:</label>
              <input type="text" name="uid" required>
            </div>
            <div class="password">
              <label for="pwd">Password:</label>
              <input type="password" name="pwd" required>
            </div>
            <input type="submit" name="submit" value="Enter">
            <img src="images/signin.png" alt="">
          </form>
          <a href="#reset" class="forgotPassword">Forgot Password?</a>
        </div>
      </div>
      <!--End Floating Login Form-->

      <!--Floating Forgot Password-->
      <div class="container" id="reset">
        <div class="reset-password">
          <form action="include/reset-request.php" method="post">
            <input type="text" name="email" placeholder="Enter your email address...">
            <input type="submit" name="reset-submit" value="Enter">
          </form>
<?php
  if(isset($_GET['reset'])) {
    if($_GET['reset'] == 'success') {
      echo '<p>Check your email!</p>';
    }
  }
?>
        </div>
      </div>
      <!--End Floating Forgot Password-->

      <!--Floating Signup Form-->
      <div class="container" id="signup">
        <div class="signup_form">
          <?php
//  if (isset($_GET['signup'])) {
//    if ($_GET['signup']=='empty') {
//      echo '<p>Fill in all fields!</p>';
//    } else if ($_GET['signup']=='password') {
//      echo '<p>Passwords do not match!</p>';
//      }
//  } else if ($_GET['signup']=='success') {
//      echo '<p>Login succesful!</p>';
//    }
?>
          <form action="include/signup.php" method="post">
            <div class="uid">
              <label for="uid">Username:</label>
              <input type="text" name="uid" required>
            </div>
            <div class="name">
              <h3>Name:</h3>
              <div class="first">
                <h4>First</h4>
                <input type="text" name="first" required>
              </div>
              <div class="last">
                <h4>Last</h4>
                <input type="text" name="last" required>
              </div>
            </div>
            <div class="flex">
              <div class="dob">
                <label for="dob">DOB:</label>
                <input type="text" name="dob" id="pickDate">
              </div>
              <div class="goal">
                <label for="goal">Goal:</label>
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
            </div>
            <div class="flex">
              <div class="email">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
              </div>
              <div class="male">
                <label for="gender">Male</label>
                <input type="radio" name="gender" value="male" required>
              </div>
              <div class="female">
                <label for="gender">Female</label>
                <input type="radio" name="gender" value="female" required>
              </div>
            </div>
            <div class="password">
              <h3>PW:</h3>
              <div class="password_one">
                <h4>Enter Password</h4>
                <input type="password" name="pwd_one" required>
              </div>
              <div class="password_two">
                <h4>Password Again</h4>
                <input type="password" name="pwd_two" required>
              </div>
            </div>
            <div class="qoute">
              <label for="qoute">Qoute:</label>
              <textarea id="qoute" name="qoute"></textarea>
            </div>
            <input type="submit" name="submit" value="Submit">
          </form>
        </div>
      </div>
      <!--End Floating Signup Form-->

    </main>
  </div>
</body>
