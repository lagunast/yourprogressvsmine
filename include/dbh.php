<?php

$dbservername = "localhost";
$dbUsername = "Nick";
$dbPassword = "ghostski";
$dbName = "yourprogressvsmine";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die('Connection Failed:'.mysqli_connect_error());
}
