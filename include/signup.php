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
	//Check for empty field
	if ( empty( $first ) || empty( $last ) || empty( $dob ) || empty( $goal ) || empty( $email ) || empty( $gender ) || empty( $pwd_one ) || empty( $pwd_two ) || empty( $qoute ) ) {
		header( "Location: ../index.php?signup=empty" );
		exit();
	} else {
		//Check for password match
		if ( $pwd_one != $pwd_two ) {
			header( "Location: ../index.php?signup=password" );
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
					$pwd = md5( $pwd_one );
					$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
					$result = mysqli_query( $conn, $sql );
					$resultCheck = mysqli_num_rows( $result );

					if ( $resultCheck > 0 ) {
						header( "Location: ../index.php?signup=emailUsed" );
						exit();
					} else {
						//Hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO users (user_first, user_last, user_date, user_goal, user_email, user_gender, user_pwd, user_qoute, user_uid) VALUES ('$first', '$last', '$dob', '$goal', '$email', '$gender', '$hashedPwd', '$qoute', '$uid');";
						mysqli_query( $conn, $sql );
						header( "Location: ../profile.php?signup=success" );
						exit();
					}
				}
			}
		}

	}

} else {
	header( "Location: ../index.php" );
	exit();
}