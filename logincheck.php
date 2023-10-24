<?php
// Check if a session has already been started
if (session_status() === PHP_SESSION_ACTIVE) {
  // Destroy the existing session
  session_destroy();
}

// Start a new session
session_start();

// Function to generate a unique session ID
function generateSessionID() {
    return uniqid(session_id() . time(), true);
}

// Check if the UNIQUE_SESSION_ID is set
if (!isset($_SESSION['UNIQUE_SESSION_ID'])) {
  $_SESSION['UNIQUE_SESSION_ID'] = generateSessionID();
}
// Use the unique session ID for this user
session_id($_SESSION['UNIQUE_SESSION_ID']);

// Include the database connection file
include("db.php");

// Check if the login form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login_button'])) {
  // Get the username and password from the form and sanitize them
  $USERNAME = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $U_PASSWORD = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

  // Prepare the SQL statement to query the database for the user
  $stmt = $con->prepare("SELECT * FROM user_table WHERE USERNAME=?");
  $stmt->bind_param("s", $USERNAME);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if the user exists
  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashed_password_from_db = $row["U_PASSWORD"];

    // Verify the password using the hashed value stored in the database
    if (password_verify($U_PASSWORD, $hashed_password_from_db)) {
      // Set the session variables
      $_SESSION['U_ID'] = $row['U_ID'];
      $_SESSION['U_ROLE_ID'] = $row['U_ROLE_ID'];
      $_SESSION['ST_TIME'] = time();

    // Redirect the user to the appropriate dashboard page
    if ($row['U_ROLE_ID'] == "02") {
      $_SESSION['login_user'] = $USERNAME;
      header("Location: welcome.php");
      exit();
    } else if ($row['U_ROLE_ID'] == "03") {
      $_SESSION['login_user'] = $USERNAME;

      // Insert the faculty login time into the availability table
      $U_ID = $row['U_ID'];
      $ST_TIME = date('Y-m-d H:i:s');
      $DAY = date('Y-m-d');
      $sql = "INSERT INTO faculty_availability(U_ID,DAY,ST_TIME) VALUES ('$U_ID','$DAY',NOW())";
      mysqli_query($con, $sql);
      // Redirect to faculty dashboard
      header("Location: facultyindex.php");
      exit();
    } else if ($row['U_ROLE_ID'] == "01") {
      $_SESSION['login_user'] = $USERNAME;
      header("Location: admin.php");
      exit();
    }

  } else {
    // If the user does not exist, display an error message
    header("Location: signin.php?remark_login=failed");
    exit();
  }
}

// Check if the user is logged in
if (isset($_SESSION['U_ID']) && isset($_SESSION['U_ROLE_ID'])) {
  // Query the database for the user's data
  $U_ID = $_SESSION['U_ID'];
  $U_ROLE_ID = $_SESSION['U_ROLE_ID'];
  $sql = "SELECT * FROM user_table WHERE U_ID='$U_ID' AND U_ROLE_ID='$U_ROLE_ID'";
  $result = mysqli_query($con, $sql);

  // Check if the user still exists
  if (mysqli_num_rows($result) == 1) {
    // The user is still valid
    $row = mysqli_fetch_assoc($result);

    // Display the dashboard page for the user's role
    if ($U_ROLE_ID == "02") {
      // Display the student dashboard page
      echo "Welcome, student " . $row['USERNAME'] . "!";
    } else if ($U_ROLE_ID == "03") {
      // Display the faculty dashboard page
      echo "Welcome, faculty " . $row['USERNAME'] . "!";
    }
  } else {
    // If the user no longer exists, log them out
    session_unset();
    session_destroy();
    header("Location: signin.php");
    exit();
  }
} else {
  // If the user is not logged in, redirect them to the login page
} 
}


?>

<?php
// // Start the session if it hasn't already been started
// if (session_status() == PHP_SESSION_NONE) {
//   session_start();
// }

// // Check if the user is logged in
// if (!isset($_SESSION['U_ID']) || !isset($_SESSION['U_ROLE_ID'])) {
//   // Redirect to the login page
//   header("Location: signin.php");
//   exit();
// }

// // Check if the user has been inactive for more than 30 minutes
// if (isset($_SESSION['ST_TIME']) && (time() - $_SESSION['ST_TIME'] > 1800)) {
//   // Unset all session variables and destroy the session
//   session_unset();
//   session_destroy();

//   // Redirect to the login page with a message
//   header("Location: signin.php?timeout=true");
//   exit();
// }

// // Update the session start time
// $_SESSION['ST_TIME'] = time();

// // Get the user's information from the database
// include("db.php");
// $stmt = mysqli_prepare($con, "SELECT USERNAME, U_ID FROM user_table WHERE U_ID = ?");
// mysqli_stmt_bind_param($stmt, "s", $_SESSION['U_ID']);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);
// $row = mysqli_fetch_assoc($result);
// $loggedin_session = $row['USERNAME'];
// $loggedin_id = $row['U_ID'];

// // Check if the user still exists in the database
// if (!isset($loggedin_session) || $loggedin_session == NULL) {
//   // Unset all session variables and destroy the session
//   session_unset();
//   session_destroy();

//   // Redirect to the login page with a message
//   header("Location: login.php?error=true");
//   exit();
// }