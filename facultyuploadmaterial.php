<?php
include('db.php');
include('session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $FILE_NAME = $_POST['name'];
    $BRANCH_ID = $_POST['branch'];
    $COURSE_ID = $_POST['course'];
    $FILE_TYPE = $_FILES['pdf_file']['type'];
    $FILE_DATA = $_FILES['pdf_file']['name'];
    $file_tmp = $_FILES['pdf_file']['tmp_name'];
    $file_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $FILE_DATA;

    // Only accept PDF files
    $allowedTypes = array('application/pdf');
    if (!in_array($FILE_TYPE, $allowedTypes)) {
        $message = "File upload failed. Only PDF files are allowed.";
        echo "<script>alert('$message');</script>";
        echo '<script>
              setTimeout(function() {
                  window.location.href = "facultyupload.php";
              }, 1000);
          </script>';
        exit();
    }

    // Insert the file information into the database
    $insertquery = "INSERT INTO material_table(BRANCH_ID,COURSE_ID,FILE_NAME, FILE_TYPE, FILE_PATH, FILE_DATA) 
                    VALUES ('$BRANCH_ID','$COURSE_ID', '$FILE_NAME', '$FILE_TYPE', '$file_path', '$FILE_DATA')";
    $iquery = mysqli_query($con, $insertquery);

    $_SESSION['message'] = 'PDF has been stored successfully!';

    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        echo "<script>alert('$message');</script>";
        echo '<script>
              setTimeout(function() {
                  window.location.href = "facultyupload.php";
              }, 1000);
          </script>';
    }
}
?>
