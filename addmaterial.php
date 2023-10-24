
<?php
 include('session.php');
 include('db.php');
?>
<?php
if (isset($_POST['submit']) && !empty($_FILES['file']['details'])) {
 //a $_FILES 'error' value of zero means success. Anything else and something wrong with attached file.
 if ($_FILES['image']['error'] != 0) {
 echo 'Something wrong with the file.';
 } else { //pdf file uploaded okay.
 //project_name supplied from the form field
//  $project_name = htmlspecialchars($_POST['project_name']);
 $BRANCH_ID = $_POST['BRANCH_ID'];
        $COURSE_ID = $_POST['COURSE_ID'];
        $FILE_NAME = $_POST['details'];
        $FILE_DATA = $_POST['file'];
 //attached pdf file information
 $FILE_NAME = $_FILES['image']['name'];
 $file_tmp = $_FILES['image']['tmp_name'];
 if ($pdf_blob = fopen($file_tmp, "rb")) {
 try {
//  include __DIR__."/includes/db.php";
 $insert_sql = "INSERT INTO `material_table` (BRANCH_ID,COURSE_ID,FILE_NAME,FILE_DATA)
 VALUES('$BRANCH_ID,'$COURSE_ID','$FILE_NAME','$FILE_DATA');";
 $stmt = $pdo->prepare($insert_sql);
 $stmt->bindParam(':FILE_NAME', $FILE_NAME);
 $stmt->bindParam(':FILE_DATA', $FILE_DATA, PDO::PARAM_LOB);
 if ($stmt->execute() === FALSE) {
 echo 'Could not save information to the database';
 } else {
 echo 'Information saved';
 }
 } catch (PDOException $e) {
 echo 'Database Error '. $e->getMessage(). ' in '. $e->getFile().
 ': '. $e->getLine();
 }
 } else {
 //fopen() was not successful in opening the .pdf file for reading.
 echo 'Could not open the attached pdf file';
 }
 }
} else {
 //submit button was not clicked. No direct script navigation.
//  header('Location: choose_file.php');
echo "Choose File";
}