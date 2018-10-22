<?php

if ( isset( $_POST[ 'submit' ] ) ) {

  include_once 'dbh.php';

  $first = mysqli_real_escape_string( $conn, $_POST[ 'first' ] );
  $last = mysqli_real_escape_string( $conn, $_POST[ 'last' ] );
  $dob = mysqli_real_escape_string( $conn, $_POST[ 'dob' ] );
  $goal = mysqli_real_escape_string( $conn, $_POST[ 'goal' ] );
  $email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
  $gender = mysqli_real_escape_string( $conn, $_POST[ 'gender' ] );
  $pwd_one = mysqli_real_escape_string( $conn, $_POST[ 'pwd_one' ] );
  $pwd_two = mysqli_real_escape_string( $conn, $_POST[ 'pwd_two' ] );
  $qoute = mysqli_real_escape_string( $conn, $_POST[ 'qoute' ] );
  $uid = mysqli_real_escape_string( $conn, $_POST[ 'uid' ] );

  //Error Handler
  //Check for empty fields
  if ( empty( $first ) || empty( $last ) || empty( $dob ) || empty( $goal ) || empty( $email ) || empty( $gender ) || empty( $pwd_one ) || empty( $pwd_two ) || empty( $qoute ) ) {
    header( "Location: ../index.php?error=emptyfields" );
    exit();
  }
  // Check if email and username are valid
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
    header( "Location: ../index.php?error=invalidemailusername" );
    exit();
  }
  // Check if email is valid
  else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL) ) {
    header( "Location: ../index.php?error=invalidemail" );
    exit();
  }
  // Check if username is valid
  else if ( !preg_match( "/^[a-zA-Z0-9]*$/", $uid ) ) {
    header( "Location: ../index.php?error=invalidemail" );
    exit();
  }
  // Check if firstname or lastname are valid
  else if ( !preg_match( "/^[a-zA-Z]*$/", $first ) || !preg_match( "/^[a-zA-Z]*$/", $last ) ) {
    header( "Location: ../index.php?error=invalidfirstlast" );
    exit();
  }
  // check if passwords match
  else if ( $pwd_one !== $pwd_two ) {
    header( "Location: ../index.php?error=passwordmatch" );
    exit();
    }
  else {
    // Prepare SQL
    $sql = "SELECT user_uid FROM users WHERE user_uid=?";
    $stmt = mysqli_stmt_init( $conn );
    // Check if SQL connection fails
    if ( !mysqli_stmt_prepare( $stmt, $sql ) ) {
      header( "Location: ../index.php?error=sqlerror" );
      exit();
    }
    else {
      mysqli_stmt_bind_param( $stmt, "s", $uid );
      mysqli_stmt_execute( $stmt );
      mysqli_stmt_store_result( $stmt );
      $resultCheck = mysqli_stmt_num_rows( $stmt );
      // Check if user is being used
      if ( $resultCheck > 0 ) {
        header( "Location: ../index.php?error=usertaken" );
        exit();
      }
      else {
        //Insert the user into the database
        $sql = "INSERT INTO users (user_first, user_last, user_date, user_goal, user_email, user_gender, user_pwd, user_qoute, user_uid) VALUES(?, ?, ? ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init( $conn );
        // Check for another sql error
        if ( !mysqli_stmt_prepare( $stmt, $sql ) ) {
          header( "Location: ../index.php?error=sqlerror" );
          exit();
        }
        else {
          //Hashing the password
          $hashedPwd = password_hash( $pwd_one, PASSWORD_DEFAULT );
          // Sign in the user
          mysqli_stmt_bind_param( $stmt, "sssssssss", $first, $last, $dob, $goal, $email, $gender, $hashedPwd, $qoute, $uid );
          mysqli_stmt_execute( $stmt );
          header( "Location: ../profile.php?signup=Success" );
          exit();
         }
      }
    }
  }
    mysqli_stmt_close( $stmt );
    mysqli_close( $conn );

}
else {
  header( "Location: ../index.php" );
  exit();
}
