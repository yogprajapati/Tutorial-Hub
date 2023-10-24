<?php
session_set_cookie_params(0);
// Start the session if it hasn't already been started
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Function to generate a unique session ID
function generateSessionID() {
    return uniqid(session_id() . time(), true);
}

// Check if the UNIQUE_SESSION_ID is set
if (!isset($_SESSION['UNIQUE_SESSION_ID'])) {
  $_SESSION['UNIQUE_SESSION_ID'] = generateSessionID();
}

// Use the unique session ID for this user
// session_id($_SESSION['UNIQUE_SESSION_ID']);

// Check if the user is logged in
if (!isset($_SESSION['U_ID']) || !isset($_SESSION['U_ROLE_ID'])) {
  // Redirect to the login page
  header("Location: signin.php");
  exit();
}

// Check if the user has been inactive for more than 30 minutes
$timeout_duration = 30; // session timeout duration in minutes
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($timeout_duration * 60))) {
  // Unset all session variables and destroy the session
  session_unset();
  session_destroy();

  // Redirect to the login page with a message
  header("Location: signin.php?timeout=true");
  exit();
}

// Update the last activity time stamp
$_SESSION['LAST_ACTIVITY'] = time();

// Get the user's information from the database
include("db.php");
$stmt = mysqli_prepare($con, "SELECT USERNAME, U_ID FROM user_table WHERE U_ID = ?");
mysqli_stmt_bind_param($stmt, "s", $_SESSION['U_ID']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
$loggedin_session = $row['USERNAME'];
$loggedin_id = $row['U_ID'];

// Check if the user still exists in the database
if (!isset($loggedin_session) || $loggedin_session == NULL) {
  // Unset all session variables and destroy the session
  session_unset();
  session_destroy();

  // Redirect to the login page with a message
  header("Location: login.php?error=true");
  exit();
}

// Set the session cookie to expire when the browser is closed

// Create a unique session ID for each user based on their ID
session_regenerate_id(true);
?>
