<?php
 include('session.php');
 include('db.php');
?>
<?php
//  DATABASE CONNECTION FOR CONTACT QUERY

// $U_NAME = $_POST['name'];
$COURSE_ID = $_POST['course'];
$QUERY_TEXT = $_POST['message'];
$status = "pending";
// Check connection
// Prepare SQL statement to insert values into table
$sql = "INSERT INTO query_table (U_ID,COURSE_ID,QUERY_TEXT,status) VALUES ('$loggedin_id','$COURSE_ID','$QUERY_TEXT','$status')";

// Execute SQL statement
if (mysqli_query($con, $sql)) {
    header("location: civilcontact.php?remarks=success");
}  if (empty($_POST['message']) ) {
    // Display an error message if any of the required fields are empty
    $e=mysqli_error($con);
    header("location: civilcontact.php?remarks=failed");
} else {
    
}
?>