<?php
include_once 'header.php';
?>

<body id="welcome">
  <div id="wrapper">
    <header> <img src="images/header.jpg" alt="">
      <h1><span class="char1">Y</span><span class="char2">O</span><span class="char3">U</span><span class="char4">R</span> <span class="char5">PROGRESS VS MINE</span></h1>
    </header>
    <main>
<?php
  $selector = $_GET['selector'];
  $validator = $_GET['validator'];

  if(empty($selector) || empty($validator)) {
    echo 'Could not validate your request!';
  } else {
    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ) {
      ?>

      <form action="include/reset-password.php" method="post">
        <input type="hidden" name="selector" value="<?php echo $selector ?>">
        <input type="hidden" name="validator" value="<?php echo $validator ?>">
        <input type="password" name="pwd" placeholder="Enter a new password...">
        <input type="password" name="pwd-repeat" placeholder="Repeat a new password...">
        <button type="submit" name="reset-password-submit">Reset Password</button>
      </form>

      <?php
    }
  }
?>
    </main>
  </div>
</body>
