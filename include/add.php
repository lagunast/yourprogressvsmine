<?php

if ( isset( $_POST[ 'submit' ] ) ) {

	include_once 'dbh.php';

	$name = mysqli_real_escape_string( $conn, $_POST[ 'name' ] );
	$type = mysqli_real_escape_string( $conn, $_POST[ 'type' ] );
	$sets = mysqli_real_escape_string( $conn, $_POST[ 'sets' ] );
	$desc = mysqli_real_escape_string( $conn, $_POST[ 'description' ] );

	//Error Handler
	//Check for empty field
	if ( empty( $name ) || empty( $type ) || empty( $sets ) ) {
		header( "Location: ../profile.php#add?signup=empty" );
		exit();
	} else {
			//Insert the user workout into the database
			$sql = "INSERT INTO workout_desc (wrk_name, wrk_type, wrk_sets, wrk_desc) VALUES ('$name', '$type', '$sets', '$desc');";
			mysqli_query( $conn, $sql );
			header( "Location: ../profile.php#add_two?signup=success" );
			exit();
		}
	}