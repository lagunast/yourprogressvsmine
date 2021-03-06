<?php

if ( isset( $_POST[ 'submit' ] ) ) {

  require 'dbh.php';

  $uid = mysqli_real_escape_string( $conn, $_POST[ 'uid' ] );
  $pwd = mysqli_real_escape_string( $conn, $_POST[ 'pwd' ] );

  $errorEmpty = false;
  $errorPassword = false;
  $errorUser = false;

  //Error handler
  //check for empty fields
  if ( empty( $uid ) || empty( $pwd ) ) {
    echo '<p>Please fill in all fields!</p>';
    $errorEmpty = true;
  }
  //Login admin user
  else if (($_POST['uid'] == 'admin') && ($_POST['pwd'] == '123')) {
    header( "Location: ../admin.php" );
    exit();
  }
  else {
    // Prepare SQL
    $sql = "SELECT * FROM users WHERE user_uid =? OR user_email =?;";
    $stmt = mysqli_stmt_init($conn);
    // Check if SQL connection fails
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo '<p>Connection error!</p>';
    }
    else {
      mysqli_stmt_bind_param($stmt, 'ss', $uid, $uid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      // Check if hashed password is correct
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($pwd, $row['user_pwd']);
        if ($pwdCheck == false) {
          echo '<p>Wrong Password!</p>';
          $errorPassword = true;
        }
        else if ($pwdCheck == true) {

          // Insert into login details table to check when user loged in
          $userId = $row['user_id'];
          $lastActivity = date('Y-m-d H:i:s', strtotime(date('h:i:sa')));
          $loginDetails = ("INSERT INTO login_details (user_id, last_activity) VALUES ('$userId', '$lastActivity')");

          mysqli_query( $conn, $loginDetails );

          // Sign user in
          session_start();
          $_SESSION[ 'u_id' ] = $row[ 'user_id' ];
          $_SESSION[ 'u_uid' ] = $row[ 'user_uid' ];
          $_SESSION[ 'u_first' ] = $row[ 'user_first' ];
          $_SESSION[ 'u_last' ] = $row[ 'user_last' ];
          $_SESSION[ 'u_date' ] = $row[ 'user_date' ];
          $_SESSION[ 'u_goal' ] = $row[ 'user_goal' ];
          $_SESSION[ 'u_email' ] = $row[ 'user_email' ];
          $_SESSION[ 'u_gender' ] = $row[ 'user_gender' ];
          $_SESSION[ 'u_qoute' ] = $row[ 'user_qoute' ];
          header( "Location: ../profile.php" );
          exit();
        }
        else {
          echo '<p>Wrong Password!</p>';
          $errorPassword = true;
        }
      }
      else {
          echo '<p>No User!</p>';
          $errorUser = true;
      }
    }
  }

}
else {
  header( "Location: ../index.php?" );
  exit();
}

?>

<script>
  $('.uid input, .password input').removeClass('error');

  var errorEmpty = '<?php echo $errorEmpty; ?>'
  var errorPassword = '<?php echo $errorPassword; ?>';
  var errorUser = '<?php echo $errorUser; ?>';

  if (errorEmpty == true) {
    $('.login .uid input, .login .password input').addClass('error');
  }
  if (errorPassword == true) {
    $('.login .password input').addClass('error');
  }
  if (errorUser == true) {
  $('.login .uid input').addClass('error');
  }
</script>
