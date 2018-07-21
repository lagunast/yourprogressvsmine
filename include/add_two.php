<?php

if ( isset( $_POST[ 'submit' ] ) ) {

	include_once 'dbh.php';

	$name = mysqli_real_escape_string( $conn, $_POST[ 'name' ] );
	$equip = mysqli_real_escape_string( $conn, $_POST[ 'equipment' ] );
	$sets = mysqli_real_escape_string( $conn, $_POST[ 'sets' ] );
	$reps = mysqli_real_escape_string( $conn, $_POST[ 'reps' ] );
	$time = mysqli_real_escape_string( $conn, $_POST[ 'time' ] );

	//Error Handler
	//Check for empty field
	if ( empty( $name ) ) {
		header( "Location: ../profile.php?add_two=empty" );
		exit();
	} else {
		//Insert the workouts into the database
		$sql = "INSERT INTO workout_details (add_name, add_equip, add_sets, add_reps, add_time) VALUES ('$name', '$equip', '$sets', '$reps', '$time');";
		mysqli_query( $conn, $sql );
		header( "Location: ../profile.php?add_two=success" );
		exit();
	}
} else {
	header( "Location: ../profile.php" );
	exit();
}