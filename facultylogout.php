<?php
include('db.php');
include('session.php');

// Store user logout time in session
$_SESSION['EN_TIME'] = time();
$EN_TIME = date("Y-m-d H:i:s", $_SESSION['EN_TIME']);
$U_ID = $_SESSION['U_ID'];
$query = "UPDATE faculty_availability SET EN_TIME=NOW() WHERE U_ID='$loggedin_id' AND EN_TIME IS NULL";
// $sql = "INSERT INTO faculty_availability(EN_TIME) VALUES ('$U_ID',NOW())";

mysqli_query($con, $query);
// Destroy session
session_destroy();

// Redirect to login page
header("Location: signin.php");
exit;
?>
