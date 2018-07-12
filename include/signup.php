<?php

if ( isset( $_POST[ 'submit' ] ) ) {

	include_once '../include/dbh.php';

	$first = mysqli_real_escape_string( $conn, $_POST[ 'first' ] );
	$last = mysqli_real_escape_string( $conn, $_POST[ 'last' ] );
	$dob = mysqli_real_escape_string( $conn, $_POST[ 'dob' ] );
	$goal = mysqli_real_escape_string( $conn, $_POST[ 'goal' ] );
	$email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
	$male = mysqli_real_escape_string( $conn, $_POST[ 'male' ] );
	$female = mysqli_real_escape_string( $conn, $_POST[ 'female' ] );
	$pwd_one = mysqli_real_escape_string( $conn, $_POST[ 'pwd_one' ] );
	$pwd_two = mysqli_real_escape_string( $conn, $_POST[ 'pwd_two' ] );
	$qoute = mysqli_real_escape_string( $conn, $_POST[ 'qoute' ] );
	$image = mysqli_real_escape_string( $conn, $_POST[ 'image' ] );

	//Error Handler
	//Check for empty field
	if ( empty( $first ) || empty( $last ) || empty( $dob ) || empty( $goal ) || empty( $email ) || empty( $pwd_one ) || empty( $qoute ) ) {
		header( "Location: ../index.php?signup=empty" );
		exit();
	} else {
		//Check if input is valid
		if ( !preg_match( "/^[a-zA-Z]*$/", $first ) || !preg_match( "/^[a-zA-Z]*$/", $last ) ) {
			header( "Location: ../index.php?signup=invalid" );
			exit();
		} else {
			//Check if email is valid 
			if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
				header( "Location: ../index.php?signup=email" );
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_email = '$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=emailUsed");
					exit();
				} else {
					//Hashing the password
					$hashedPwd = password_hash($pwd_one, PASSWORD_DEFAULT);
					//insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_dob, user_goal, user_email, user_sex, user_pwd, user_qoute, user_image) VALUES ('$first', '$last', '$dob', '$goal', '$email', '$sex', '$hashedPwd', '$qoute', '$image');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}

} else {
	header( "Location: ../index.php" );
	exit();
}