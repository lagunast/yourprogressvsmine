<?php

$username = $_POST[ 'name' ];
$pass = $_POST[ 'password' ];

if( $username != 'Nick' ) {
	echo 'Forget something? Please enter your username.';
} elseif ( $pass != 1234 ) {
	echo 'Sorry wrong! Please enter the correct password.';
}

else {
	echo header("Location: ../../profile.html");
}