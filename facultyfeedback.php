<?php
 include('session.php');
 include('db.php');
?>
<?php
//  DATABASE CONNECTION FOR CONTACT QUERY

$RATING = $_POST['rating'];
$COURSE_ID = $_POST['subject'];

// Prepare SQL statement to insert values into table
$sql = "INSERT INTO feedback (U_ID,COURSE_ID,RATING,TOTAL_RATING,AVG_RATING) VALUES ($loggedin_id,'$COURSE_ID','$RATING','$RATING','$RATING')";

if(empty($_POST['rating']) || empty($_POST['subject'])) {
    $e=mysqli_error($con);
    header("location: facultyindex.php?remarks=failed");
} else if  (mysqli_query($con, $sql)) {
    // echo "THANKS FOR YOUR FEEDBACK !!!:)";
    // echo "Redirecting in 2s";
    header("location:facultyindex.php?remarks=success");
} else {
    header("location: facultyindex.php?remarks=error");
}

?>
