<?php
$hostname     = "localhost"; // Enter Your Host Name
$username     = "hackuliv_hack2";      // Enter Your Table username
$password     = "hackathon@123";          // Enter Your Table Password
$databasename = "hackuliv_hack2"; // Enter Your database Name
$con = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

