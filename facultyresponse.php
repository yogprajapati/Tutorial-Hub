<?php
 include('session.php');
include('db.php');
?>
<?php
    $U_ID = $_POST['U_ID'];
    $Q_ID = $_POST['Q_ID'];
$ANSWER_TEXT = $_POST['answer'];

//  if(mysqli_query($con,"INSERT INTO answer_table (U_ID,Q_ID,ANSWER_TEXT) VALUES ('$U_ID','$Q_ID','$ANSWER_TEXT')")){ 
    $sql = "INSERT INTO answer_table(U_ID,Q_ID,ANSWER_TEXT) VALUES ('$U_ID','$Q_ID','$ANSWER_TEXT')";
  
  if (empty($_POST['U_ID']) || empty($_POST['Q_ID']) || empty($_POST['answer'])) {
    // Display an error message if any of the required fields are empty
    $e=mysqli_error($con);
    header("location: facultyquery.php?remarks=failed");
  } else if (mysqli_query($con, $sql)){
    header("location:facultyquery.php?remarks=success");
   } else {
        header("location: facultyquery.php?remarks=error");
      }
      

 
?>