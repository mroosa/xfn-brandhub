<?php

/* Enter database information and rename this file to config.php */

session_start();

$host = ""; /* Host name */
$user = ""; /* User */
$password = ""; /* Password */
$dbname = ""; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
