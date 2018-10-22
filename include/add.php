<?php

if ( isset( $_POST[ 'submit' ] ) ) {

	include_once 'dbh_inc.php';

	$name = mysqli_real_escape_string( $conn, $_POST[ 'name' ] );
	$type = mysqli_real_escape_string( $conn, $_POST[ 'type' ] );
	$sets = mysqli_real_escape_string( $conn, $_POST[ 'sets' ] );
	$desc = mysqli_real_escape_string( $conn, $_POST[ 'desc' ] );

	/*$get = "SELECT user_id FROM users";
	$uid = mysqli_query( $conn, $get );*/

	//Error Handler
	//Check for empty field
	if ( empty( $name ) || empty( $type ) || empty( $sets ) ) {
		header( "Location: ../profile.php#add?signup=empty" );
		exit();
	} else {
		//Insert the user workout into the database
		$sql = "INSERT INTO workout_desc (user_id, wrk_name, wrk_type, wrk_sets, wrk_desc) VALUES ('$uid', '$name', '$type', '$sets', '$desc');";
		mysqli_query( $conn, $sql );
		header( "Location: ../profile.php#add_two?signup=success" );
		exit();
	}
}
