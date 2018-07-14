<?php

session_start();

if ( isset( $_POST[ 'submit' ] ) ) {

	include 'dbh.php';



	$email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
	$pwd = mysqli_real_escape_string( $conn, $_POST[ 'pwd' ] );

	//Error handler
	//check if inputs are empty
	if ( empty( $email ) || empty( $pwd ) ) {
		header( "Location: ../index.php?login=empty" );
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email = '$email'";
		$result = mysqli_query( $conn, $sql );
		$resultCheck = mysqli_num_rows( $result );
		if ( $resultCheck < 1 ) {
			header( "Location: ../index.php?login=errorone" );
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header( "Location: ../index.php?login=errortwo" );
					exit();
				} elseif ( $hashedPwdCheck == true) {
					// Log in the user here 
					$_SESSION[ 'u_id' ] = $row[ 'user_id' ];
					$_SESSION[ 'u_first' ] = $row[ 'user_first' ];
					$_SESSION[ 'u_last' ] = $row[ 'user_last' ];
					$_SESSION[ 'u_date' ] = $row[ 'user_date' ];
					$_SESSION[ 'u_goal' ] = $row[ 'user_goal' ];
					$_SESSION[ 'u_email' ] = $row[ 'user_email' ];
					$_SESSION[ 'u_qoute' ] = $row[ 'user_qoute' ];
					header( "Location: ../profile.php?login=success" );
					exit();
				}
			}
		}
	}

} else {
	header( "Location: ../index.php?login=error" );
	exit();
}