
<?php
 include('session.php');
 include('db.php');
?>
<?php
// Check if the user is logged in and has admin role
// if (isset($_SESSION['U_ID']) && $_SESSION['U_ROLE_ID'] == "01") {
  // Check if the approve button was clicked
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['approve_button'])) {
    $user_id = $_POST['user_id'];

    // Update the user's IS_APPROVED column to 1
    $stmt = $con->prepare("UPDATE user_table SET is_approved=1 WHERE U_ID=?");
    $stmt->bind_param("s", $user_id);
    $stmt->execute();
    // Redirect back to the admin panel
    header("Location: facultyapprove.php");
    exit();
  }

// } else {
//   // If the user is not logged in or does not have admin role, redirect them to the login page
//   header("Location: signin.php");
//   exit();
// }
?>
