<?php

if ( isset( $_POST[ 'submit' ] ) ) {

  include_once 'dbh_inc.php';

  $name = mysqli_real_escape_string( $conn, $_POST[ 'name' ] );
  $type = mysqli_real_escape_string( $conn, $_POST[ 'type' ] );
  $sets = mysqli_real_escape_string( $conn, $_POST[ 'sets' ] );
  $desc = mysqli_real_escape_string( $conn, $_POST[ 'desc' ] );

  // Error Handler
  // Check for empty fields
  if ( empty( $name ) || empty( $type ) || empty( $sets ) ) {
    header( "Location: ../profile.php#add?signup=empty" );
    exit();
  }
  // Check if firstname or lastname are valid
  else if ( !preg_match( "/^[a-zA-Z]*$/", $name ) || !preg_match( "/^[a-zA-Z]*$/", $desc ) ) {
    header( "Location: ../index.php?error=invalidfields" );
    exit();
  }
  else {
    //Insert the user workout into the database
	$sql = "INSERT INTO workout_desc (user_id, wrk_name, wrk_type, wrk_sets, wrk_desc) VALUES ('$uid', '$name', '$type', '$sets', '$desc');";
    mysqli_query( $conn, $sql );
	header( "Location: ../profile.php#add_two?signup=success" );
    exit();
  }
}
