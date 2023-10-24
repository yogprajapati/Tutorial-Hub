<?php
// session_start();
include('db.php');
    // if (isset($_POST['submit'])) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION['message'] = 'Pdf Has Been Stored Successfully!';
        // $name = $_POST['name'];
        $FILE_NAME = $_POST['name'];
        $FILE_TYPE = $_POST['type'];
        $BRANCH_ID = $_POST['branch'];
        // $FILE_DATA = $_POST['pdf_file'];

        if (isset($_FILES['pdf_file']['name']))
        {
          $FILE_DATA = $_FILES['pdf_file']['name'];
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
        //   move_uploaded_file($file_tmp,"./pdf/".$file_name);
 
          $insertquery =  "INSERT INTO material_table(BRANCH_ID,FILE_NAME,FILE_TYPE,FILE_DATA) VALUES('$BRANCH_ID','$FILE_NAME','$FILE_TYPE','$FILE_DATA')";
          $iquery = mysqli_query($con, $insertquery);
        
           if (isset($_SESSION['message'])) {
             // Get the message from the session and store it in a variable
             $message = $_SESSION['message'];
         
             // Display the message
             echo "<script>alert('$message');</script>";
         
             echo '<script>
                       setTimeout(function() {
                           window.location.href = "add.php";
                       }, 1000);
                   </script>';
           
                      }
            
            }  if (empty($_POST['type'])) {
        

            // <div class=
            // "alert alert-danger alert-dismissible
            // fade show text-center">
            //   <a class="close" data-dismiss="alert"
            //      aria-label="close">×</a>
            //   <strong>Failed!</strong>
            //       File must be uploaded in PDF format!
            // </div>
            $message = "File Uploaded Failed!.";

            // Output the message
            echo "<script>alert('$message');</script>";
        echo '<script>
                               setTimeout(function() {
                                   window.location.href = "add.php";
                               }, 1000);
                           </script>';
          
        }
        }
      
      
?>