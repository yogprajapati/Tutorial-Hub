<?php
 include('session.php');
 include('db.php');
?>
<?php
//  DATABASE CONNECTION FOR CONTACT QUERY

$RATING = $_POST['rating'];
$COURSE_ID = $_POST['subject'];

// Check connection

// Prepare SQL statement to insert values into table
$sql = "INSERT INTO feedback (U_ID,COURSE_ID,RATING,TOTAL_RATING,AVG_RATING) VALUES ($loggedin_id,'$COURSE_ID','$RATING','$RATING','$RATING')";

// Execute SQL statement
// if (mysqli_query($con, $sql)) {
//     // echo "THANKS FOR YOUR FEEDBACK !!!:)";
//     // echo "Redirecting in 2s";
//     header("location:computer.php?remarks=success");
// }
//   else if(empty($_POST['rating'])) {
//         // Display an error message if any of the required fields are empty
//         $e=mysqli_error($con);
//         header("location: computer.php?remarks=failed");
//     } else {
//         header("location: computer.php?remarks=error");
// }

if(empty($_POST['rating']) || empty($_POST['subject'])) {
    $e=mysqli_error($con);
    header("location: computer.php?remarks=failed");
} else if  (mysqli_query($con, $sql)) {
    // echo "THANKS FOR YOUR FEEDBACK !!!:)";
    // echo "Redirecting in 2s";
    header("location:computer.php?remarks=success");
} else {
    header("location: computer.php?remarks=error");
}

?>
