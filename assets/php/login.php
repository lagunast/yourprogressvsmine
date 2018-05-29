<?php

$username = $_POST[ 'name' ];
$pass = $_POST[ 'password' ];

if ( strlen( $username ) == 0 ) {
	echo 'Forget something? Please enter your username.';
} elseif ( $pass != 1234 ) {
	echo 'Sorry wrong! Please enter the correct password.';
}

else {
	echo file_get_contents("../../profile.html");
}