<?php
 include('session.php');
 include('db.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>TH Faculty</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
        <style>
              td.t-1{
    float:left;
    width:44%;
    text-align:right;
    color:#C5EFF7;
   }
   td.t-2{
    float:right;
    width:55%;
   } */
    .tl-1{
    float:left;
    width:40%;
    padding-right:5%;
    text-align:center;
    color:#FF6600;
   }
   .tl-4{
    font-size:17px;
    font-weight:bold;
     /* text-align:center; */
    color:Black;
   }

   .submit{
    height:30px;
    width:20%;
    background-color:black;
    color:white
   }
        </style>

    </head>
    
    <body>
 

        <main>

            <section class="hero" id="hero">
                <div class="heroText">
                <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                    Hey <?php echo $loggedin_session;?>
                    </h1>

                    <!-- <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        create a great video for your <strong class="custom-underline">website</strong>
                    </p> -->
                </div>

                <div class="videoWrapper">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.jpg">
                        <source src="videos/pexels-weldi-studio-design-8675552-1920x1080-30fps.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="overlay"></div>
            </section>

            <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <strong>Tutorial - Hub</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="facultyindex.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="facultyquery.php">Query</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="facultyupload.php">Upload Material</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#news">News & Events</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        

<?php
// Select data from multiple tables using JOIN
$sql = "SELECT user_table.USERNAME, course_master.COURSE_NAME, query_table.status, answer_table.faculty_name, query_table.QUERY_TEXT, query_table.Q_ID AS query_id, query_table.U_ID AS user_id
        FROM query_table 
        JOIN user_table ON query_table.U_ID = user_table.U_ID
        JOIN course_master ON query_table.COURSE_ID = course_master.COURSE_ID
        LEFT JOIN answer_table ON query_table.Q_ID = answer_table.Q_ID";

$result = mysqli_query($con, $sql);

function get_safe_value($con, $value)
{
    $value = mysqli_real_escape_string($con, $value);
    $value = trim($value);
    return $value;
}

// Check if the answer form has been submitted
if (isset($_POST['submit'])) {

    $query_id = get_safe_value($con, $_POST['query_id']);
    $U_ID = get_safe_value($con, $_POST['U_ID']);
    $answer = get_safe_value($con, $_POST['answer']);
    $sql = "UPDATE query_table SET status='replied' WHERE Q_ID='$query_id'";
    mysqli_query($con, $sql);
    $sql =$sql = "INSERT INTO answer_table (Q_ID, U_ID, faculty_name, ANSWER_TEXT) VALUES ('$query_id', '$U_ID','$loggedin_session','$answer')";

    mysqli_query($con, $sql);
    exit();
}

?>
<?php
// Check if the delete button has been clicked
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);
    if ($type == 'delete1') {
        $query_id = get_safe_value($con, $_GET['query_id']);
        $delete_sql = "DELETE FROM query_table WHERE Q_ID = '$query_id'";
        mysqli_query($con, $delete_sql);
       
        exit();
    }
}
?>
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">USERS QUERIES: </h4>
                    </div>
                    <div style="border: 1px solid #ddd; padding: 20px; border-radius: 10px;">
                        <div style="overflow-x: auto;">
                            <table style="width: 100%;" class="table ">
                                <thead>
                                    <tr>
                                        <th style="text-align: left;">USER</th>
                                        <th style="text-align: left;">COURSE</th>
                                        <th style="text-align: left;">QUERY</th>
                                        <th style="text-align: left;">REPLY</th>
                                        <th style="text-align: left;">Status</th>
                                        <th style="text-align: center;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <?php
                                        // Loop through the query results and display the data
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['USERNAME'] ?></td>
                                                <td><?php echo $row['COURSE_NAME'] ?></td>
                                                <td><?php echo $row['QUERY_TEXT'] ?></td>
                                                <td>
                                                    <!-- Check if the status is "replied" and the logged-in user matches the faculty name -->
                                                    <?php if ($row['status'] !== 'replied' || $row['faculty_name'] === $loggedin_session) { ?>
                                                        <!-- Create a form to submit the answer -->
                                                        <input type="text" name="answer" placeholder="Enter answer here" <?php echo $row['status'] === 'replied' ? 'style="display: none;"' : ''; ?>>
                                                        <input type="submit" name="submit" value="Submit" <?php echo $row['status'] === 'replied' ? 'style="display: none;"' : ''; ?>>
                                                        <input type="hidden" name="query_id" value="<?php echo $row['query_id'] ?>">
                                                        <input type="hidden" name="U_ID" value="<?php echo $row['user_id'] ?>">
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo $row['status'] ?></td>

                                                <td style="text-align: center;">
                                                    <!-- Check if the logged-in user matches the faculty name to allow deletion -->
                                                    <?php if ($row['faculty_name'] === $loggedin_session) { ?>
                                                        <!-- Add a delete link to delete the query -->
                                                        <span style='background-color: #; color: red; padding: 5px 10px; border-radius: 5px;'>
                                                            <a href='?type=delete1&query_id=<?php echo $row['query_id'] ?>'>Delete </a>
                                                        </span>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php


// Connect to the database
$con = mysqli_connect("localhost", "root", "", "tutorialhub");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Check if the edit form was submitted
if (isset($_POST['edit_answer'])) {
    $answer_id = $_POST['answer_id'];
   
    $new_answer_text = $_POST['new_answer_text'];

    // Retrieve the faculty name from the answer table
    $faculty_name = getFacultyNameByAnswerId($answer_id);  // Function to retrieve the faculty name associated with the answer

    // Check if the faculty is authorized to edit the answer
    $current_faculty_name = "$loggedin_session";  // Assuming the current faculty's name is John
    if ($current_faculty_name == $faculty_name){
        // Prepare the update statement
        $update_sql = "UPDATE answer_table SET ANSWER_TEXT = ? WHERE A_ID = ?";
        $stmt = mysqli_prepare($con, $update_sql);
        mysqli_stmt_bind_param($stmt, 'si', $new_answer_text, $answer_id);

        // Execute the update statement
        if (mysqli_stmt_execute($stmt)) {
            // Update successful
            echo '<div class="alert alert-success" role="alert">Answer updated successfully!</div>';
            echo '<meta http-equiv="refresh" content="5">';
        } else {
            // Error updating answer
            echo '<div class="alert alert-danger" role="alert">Error updating answer. Please try again.</div>';
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Faculty not authorized to edit this answer
        echo '<div class="alert alert-danger" role="alert">You are not authorized to edit this answer.</div>';
        echo '<meta http-equiv="refresh" content="5">';
    }
}

// Function to retrieve the faculty name associated with the answer
function getFacultyNameByAnswerId($answer_id)
{
   
    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "tutorialhub");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // Retrieve the faculty name from the answer table
    $select_sql = "SELECT faculty_name FROM answer_table WHERE A_ID = ?";
    $stmt = mysqli_prepare($con, $select_sql);
    mysqli_stmt_bind_param($stmt, 'i', $answer_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $faculty_name);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Close the database connection ($con)
    // ...

    return $faculty_name;
}
?>


<!-- Rest of the HTML code remains unchanged -->



<?php

$sql = "SELECT user_table.USERNAME, course_master.COURSE_NAME, query_table.QUERY_TEXT, answer_table.ANSWER_TEXT, answer_table.faculty_name , query_table.Q_ID AS query_id, query_table.U_ID AS user_id, answer_table.A_ID AS answer_id
        FROM query_table 
        JOIN user_table ON query_table.U_ID = user_table.U_ID
        JOIN course_master ON query_table.COURSE_ID = course_master.COURSE_ID
        LEFT JOIN answer_table ON query_table.Q_ID = answer_table.Q_ID";
$result = mysqli_query($con, $sql);
?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">FACULTY REPLIED RESPONSES :</h4>
                    </div>
                    <div style="border: 1px solid #ddd; padding: 20px; border-radius: 10px;">
                        <div style="overflow-x: auto;">
                            
                            <table style="width: 100%;" class="table ">
                                <thead>
                                    <tr>
                                        <th style="text-align: left;">USER</th>
                                        <th style="text-align: left;">QUERY</th>
                                        <th style="text-align: left;">ANSWER</th>
                                        <th style="text-align: left;">FACULTY NAME</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Loop through the query results and display the data
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['USERNAME'] ?></td>
                                            <td><?php echo $row['QUERY_TEXT'] ?></td>
                                            <td><?php echo $row['ANSWER_TEXT'] ?></td>
                                            <td><?php echo $row['faculty_name'] ?></td>
                                            <td>
                                           
    <button class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editModal<?php echo $row['answer_id'] ?>">Edit</button>


                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="editModal<?php echo $row['answer_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $row['answer_id'] ?>" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel<?php echo $row['answer_id'] ?>">Edit Answer</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST">
                                                                    <input type="hidden" name="answer_id" value="<?php echo $row['answer_id'] ?>">
                                                                    <div class="form-group">
                                                                        <label for="new_answer_text">New Answer:</label>
                                                                        <textarea class="form-control" id="new_answer_text_<?php echo $row['answer_id'] ?>" name="new_answer_text"><?php echo $row['ANSWER_TEXT'] ?></textarea>
                                                                    </div>
                                                                    <button type="submit" name="edit_answer" class="btn btn-primary">Save Changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include the necessary JavaScript and jQuery libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    // Add event listener to the edit buttons
    $(document).ready(function() {
        $('.edit-btn').click(function() {
            var answerId = $(this).data('target').substring(10); // Extract the answer_id from the data-target attribute
            var answerText = $('#new_answer_text_' + answerId).val(); // Get the current answer text

            // Set the value of the textarea in the modal
            $('#new_answer_text_' + answerId).val(answerText);
        });
    });
</script>




<!-- <div style="border: 1px solid #ddd; padding: 20px; border-radius: 10px;">
   <form action="facultyresponse.php" method="post">
      <h3 style="margin-bottom: 20px;">Reply to User:</h3>
      <div style="display: flex; flex-direction: column; margin-bottom: 20px;">
         <label style="margin-bottom: 5px;">USER ID:</label>
         <input type="text" required="required" name="U_ID" placeholder="USER_ID" style="padding: 5px; border: 1px solid #ddd; border-radius: 5px;">
      </div>
      <div style="display: flex; flex-direction: column; margin-bottom: 20px;">
         <label style="margin-bottom: 5px;">QUERY ID:</label>
         <input type="text" required="required" name="Q_ID" placeholder="QUERY ID" style="padding: 5px; border: 1px solid #ddd; border-radius: 5px;">
      </div>
      <div style="display: flex; flex-direction: column; margin-bottom: 20px;">
         <label style="margin-bottom: 5px;">RESPONSE:</label>
         <input type="text" required="required" name="answer" placeholder="RESPONSE" style="padding: 5px; border: 1px solid #ddd; border-radius: 5px;">
      </div>
      <input type="submit" value="Give Reply" style="background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px; border: none; cursor: pointer;">
   </form>
</div> -->
<!-- <div id="reg-bottom" class="btmrg">Copyright &copy; TUTORIAL - HUB</div> -->
<center>
<center> <?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks=='success') {

$message = "Query Response Submitted Successfully.";

// Output the message
echo "<script>alert('$message');</script>";
echo '<script>
                        setTimeout(function() {
                            window.location.href = "facultyquery.php";
                        }, 1000);
               </script>';

}
if ($remarks=='failed') {
    $message = "Query Response Submitted Failed Try Again Later!.";

    // Output the message
    echo "<script>alert('$message');</script>";
echo '<script>
                       setTimeout(function() {
                           window.location.href = "facultyquery.php";
                       }, 1000);
                   </script>';
}
if ($remarks=='error') {
    $message = "Query Submitted Failed Try Again Later!.";

    // Output the message
    echo "<script>alert('$message');</script>";
echo '<script>
                       setTimeout(function() {
                           window.location.href = "facultyquery.php";
                       }, 1000);
                   </script>';
}
?>
</Center></center>

<!-- footer - start -->
<br>
<footer class="site-footer">
                <div class="container">
                    <div class="row">
    
                        <div class="col-12">
                            <h5 class="text-white">
                                <i class="bi-geo-alt-fill me-2"></i>
                                Sola Bhagvat , Ahm
                            </h5>
                            <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                                tutorialhubofficial11@gmail.com
                            </a>
                        </div>
    
                        <div class="col-6">
                            <p class="copyright-text mb-0">Copyright © Tutorial - Hub  
                            
                            <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">Tutorial - Hub</a></p>
                        
                        </div>
    
                        <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                                <li><a href="https://www.facebook.com/profile.php?id=100092423418526&mibextid=ZbWKwL" class="social-icon-link bi-facebook"></a></li>
    
                                <li><a href=" https://twitter.com/Tutorial_hubb?t=PvvwlLiblva4E6I8jmvrjw&s=08
" class="social-icon-link bi-twitter"></a></li>
    
                                <li><a href="https://www.linkedin.com/in/tutorial-hub-731511276
" class="social-icon-link bi-whatsapp"></a></li>
    
                                <li><a href=" https://instagram.com/tutorial.hubb?igshid=ZGUzMzM3NWJiOQ==
" class="social-icon-link bi-instagram"></a></li>
                        </div>
    
                    </div>
                </section>
            </footer>
    
            <!-- JAVASCRIPT FILES -->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/aos.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/magnific-popup-options.js"></script>
            <script src="js/scrollspy.min.js"></script>
            <script src="js/custom.js"></script>
    
        </body>
    </html>
