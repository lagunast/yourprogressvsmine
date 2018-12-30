<?php

if ( isset( $_POST[ 'submit' ] ) ) {

  include_once 'dbh.php';

  $uid = mysqli_real_escape_string( $conn, $_POST[ 'uid' ] );
  $first = mysqli_real_escape_string( $conn, $_POST[ 'first' ] );
  $last = mysqli_real_escape_string( $conn, $_POST[ 'last' ] );
  $date = mysqli_real_escape_string( $conn, $_POST[ 'dob' ] );
  $goal = mysqli_real_escape_string( $conn, $_POST[ 'goal' ] );
  $email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
  $gender = mysqli_real_escape_string( $conn, $_POST[ 'gender' ] );
  $pwd_one = mysqli_real_escape_string( $conn, $_POST[ 'pwd_one' ] );
  $pwd_two = mysqli_real_escape_string( $conn, $_POST[ 'pwd_two' ] );
  $qoute = mysqli_real_escape_string( $conn, $_POST[ 'qoute' ] );

  // convert date to mysql
  $dob = date('Y-m-d', strtotime($date));

  // false varibles for jquery validation
  $errorEmpty = false;
  $errorInvalid = false;
  $errorEmail = false;
  $errorUser = false;
  $errorName = false;
  $errorPassword = false;

  //Check for empty fields
  if ( empty( $first ) || empty( $last ) || empty( $dob ) || empty( $email ) || empty( $gender ) || empty( $pwd_one ) || empty( $pwd_two )) {
    echo '<p>Please fill in all fields!</p>';
    $errorEmpty = true;
  }
  // Check if email and username are valid
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9]*$/', $uid)) {
    echo '<p>That was an invalid username and email!</p>';
    $errorInvalid = true;
  }
  // Check if email is valid
  else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL) ) {
    echo '<p>That was an invalid email!</p>';
    $errorEmail = true;
  }
  // Check if username is valid
  else if ( !preg_match( '/^[a-zA-Z0-9]*$/', $uid ) ) {
    echo '<p>That was an invalid username!</p>';
    $errorUser = true;
  }
  // Check if firstname or lastname are valid
  else if ( !preg_match( '/^[a-zA-Z]*$/', $first ) || !preg_match( '/^[a-zA-Z]*$/', $last ) ) {
    echo '<p>That was an invalid firstname / lastname!</p>';
    $errorName = true;
  }
  // check if passwords match
  else if ( $pwd_one !== $pwd_two ) {
    echo '<p>Password does not match!</p>';
    $errorPassword = true;
  }
  else {
    // Prepare SQL
    $sql = 'SELECT user_uid FROM users WHERE user_uid=?';
    $stmt = mysqli_stmt_init( $conn );
    // Check if SQL connection fails
    if ( !mysqli_stmt_prepare( $stmt, $sql ) ) {
      echo '<p>Connection failed One!</p>';
    }
    else {
      mysqli_stmt_bind_param( $stmt, 's', $uid );
      mysqli_stmt_execute( $stmt );
      mysqli_stmt_store_result( $stmt );
      $resultCheck = mysqli_stmt_num_rows( $stmt );
      // Check if user is being used
      if ( $resultCheck > 0 ) {
        echo '<p>This user already exist</p>';
        $errorUser = true;
      }
      else {
        //Insert the user into the database
        $sql = 'INSERT INTO users (user_first, user_last, user_date, user_goal, user_email, user_pwd, user_qoute, user_gender, user_uid) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = mysqli_stmt_init( $conn );
        // Check for another sql error
        if ( !mysqli_stmt_prepare( $stmt, $sql ) ) {
          echo '<p>Connection failed Two!</p>';
        }
        else {
          //Hashing the password
          $hashedPwd = password_hash( $pwd_one, PASSWORD_DEFAULT );
          // Sign in the user
          mysqli_stmt_bind_param( $stmt, 'sssssssss', $first, $last, $dob, $goal, $email, $hashedPwd, $qoute, $gender, $uid );
          mysqli_stmt_execute( $stmt );
          header( 'Location: ../profile.php' );
          exit();
         }
      }
    }
  }
//    mysqli_stmt_close( $stmt );
    mysqli_close( $conn );

}
// if submit not clicked send back to front page
else {
  header( 'Location: ../index.php' );
  exit();
}

?>

<script>
  $('.signup_form input').removeClass('error');
  var errorEmpty = '<?php echo $errorEmpty; ?>';

  if (errorEmpty == true) {
    $('.signup_form input').each(function () {
      if ($(this).val() == '') {
        $(this).addClass('error');
      }
    });
  }
</script>
