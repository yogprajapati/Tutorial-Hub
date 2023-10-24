<?php
 include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ECOURSES - TUTORIAL HUB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style>
        .fillin {
            background-color: blueviolet;
            color: rgb(255, 255, 255);
            line-height: 60px;
            width: 350px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border: 4px;
        }
        .container {
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: 50px;
		}

		.photo, .info {
			flex-basis: 50%;
			padding: 20px;
			box-sizing: border-box;
			border: 1px solid #ccc;
		}

		.photo img {
			max-width: 100%;
			height: auto;
		}

		.info h2 {
			font-size: 28px;
			margin-top: 0;
		}

		.info p {
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			margin-top: 20px;
        }
    </style>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">TUTORIAL&nbsp;</span>HUB</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>Sola - Bhagvat , Ahm </small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <small>tutorialhubofficial11@gmail.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+91 9054038108</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Subjects</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">IT <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="html.php" class="dropdown-item">HTML</a>
                                <a href="css.php" class="dropdown-item">CSS</a>
                                <a href="php.php" class="dropdown-item">PHP</a>
								<a href="javascript.php" class="dropdown-item">JAVA SCRIPT</a>
								<a href="my_sql.php" class="dropdown-item">MY_SQL</a>
                            </div>
                        </div>
                        <!-- <a href="" class="nav-item nav-link">CIVIL COURSE</a>
                        <a href="" class="nav-item nav-link">ELECTRICAL COURSE</a> -->
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="itindex.php" class="nav-item nav-link">Home</a>
                            <a href="itabout.php" class="nav-item nav-link">About</a>
                            <a href="it.php" class="nav-item nav-link active">Courses</a>
                            <!-- <a href="itteacher.php" class="nav-item nav-link">Teachers</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="itblog.php" class="dropdown-item">Blog List</a>
                                    
                                </div>
                            </div>
                            <a href="itcontact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" data-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="userprofile.php" class="dropdown-item">User Profile</a>
                            <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </nav>
    </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Courses</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">INFORMATION TECHNOLOGY</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">INFORMATION TECHNOLOGY</h5>
                <h1>Explore Top Subjects</h1>
            </div>
            </div>
            </div>
            <body>
                <div class="container">
                    <div class="photo">
                        <img src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/php-512.png" width="200" height="200" alt="PHP Photo">
                    </div>
                    <div class="info">
                        <h2>About PHP</h2>
                        <p>PHP is a popular server-side scripting language used for web development. It was originally created in 1994 by Rasmus Lerdorf as a set of Common Gateway Interface (CGI) scripts to track visits to his personal website. PHP has evolved over the years and is now used by millions of websites and web applications to power their back-end functionality.</p>
                    <h3> Click Below to Download ;) </h3>
                    </div>
                </div><br>
            <center>
                <form method="post" action="php.php">
                    <input type="hidden" name="pdf_id" value="1">
                    <button class="fillin" type="submit" name="retrieve_pdf">PHP</button>
                </form>
            </center> <br>
            <div class="container">
                <div class="photo">
                    <img src="https://cdn.pixabay.com/photo/2017/03/30/17/41/javascript-2189147_1280.png" width="250" height="250" alt="JAVASCRIPT Photo">
                </div>
                <div class="info">
                    <h2>About JAVASCRIPT</h2>
                    <p>JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat.</p>
                <h3> Click Below to Download ;) </h3>
                </div>
            </div><br>
            <center>
                <form method="post" action="javascript.php">
                    <input type="hidden" name="pdf_id" value="1">
                    <button type="submit" class="fillin" name="retrieve_pdf">JAVASCRIPT</button>
                </form>
            </center> <br>
            <div class="container">
                <div class="photo">
                    <img src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_1280.png" width="200" height="200" alt="HTML Photo">
                </div>
                <div class="info">
                    <h2>About HTML</h2>
                    <p>The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It is often assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.</p>
                <h3> Click Below to Download ;) </h3>
                </div>
            </div><br>
            <center>
                <form method="post" action="html.php">
                    <input type="hidden" name="pdf_id" value="1">
                    <button type="submit" class="fillin" name="retrieve_pdf">HTML</button>
                </form>
            </center> <br>
            <div class="container">
                <div class="photo">
                    <img src="https://icons-for-free.com/download-icon-development+logo+mysql+icon-1320184807686758112_512.png" width="200" height="200" alt="MY_SQL Photo">
                </div>
                <div class="info">
                    <h2>About MY_SQL</h2>
                    <p>MySQL is a relational database management system The database structure is organized into physical files optimized for speed. The logical data model, with objects such as data tables, views, rows, and columns, offers a flexible programming environment.</p>
                <h3> Click Below to Download ;) </h3>
                </div>
            </div><br>
            <center>
                <form method="post" action="my_sql.php">
                    <input type="hidden" name="pdf_id" value="1">
                    <button type="submit" class="fillin" name="retrieve_pdf">MY_SQL</button>
                </form>
            </center> <br>
            <div class="container">
                <div class="photo">
                    <img src="https://mitacademys.com/wp-content/uploads/2022/07/logo-2582747_1920-1024x1024.png" width="200" height="200" alt="CSS Photo">
                </div>
                <div class="info">
                    <h2>About CSS</h2>
                    <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML (including XML dialects such as SVG, MathML or XHTML). CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
                <h3> Click Below to Download ;) </h3>
                </div>
            </div><br>
            <center>
                <form method="post" action="css.php">
                    <input type="hidden" name="pdf_id" value="1">
                    <button type="submit" class="fillin" name="retrieve_pdf">CSS</button>
                </form>
            </center> <br>
    <!-- Category Start -->
    <div class="feedback-box"><form action="feedbackit.php" method="post">
    <h2 class="feedback-title">How would you rate your experience?</h2>
<div class="rating">
  <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
  <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
  <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
  <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
  <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
</div>
<div class="dropdown">
    <label for="feedback-dropdown"class="course">Select an Course :</label>
    <select id="feedback-dropdown" name="subject"class="select">
      <option value="1">PHP</option>
      <option value="2">JAVA SCRIPT</option>
      <option value="3">HTML</option>
      <option value="4">MY_SQL</option>
      <option value="5">CSS</option>
    </select>
  </div><br>
<!-- <button class="submit-button" type="submit">Submit</button> -->

<!-- <p class="thank-you-message">Thank you for your feedback!</p> -->
<button class="submit-button" id="Sendsignupbutton" type="submit">SUBMIT</button></form>
</div>
<center>
 <?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks=='success') {

$message = "Feedback Submitted Successfully.";

// Output the message
echo "<script>alert('$message');</script>";
echo '<script>
                        setTimeout(function() {
                            window.location.href = "it.php";
                        }, 1000);
               </script>';

}
if ($remarks=='failed') {
    $message = "Feedback Submitted Failed Try Again Later!.";

    // Output the message
    echo "<script>alert('$message');</script>";
echo '<script>
                       setTimeout(function() {
                           window.location.href = "it.php";
                       }, 1000);
                   </script>';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail">Feedback Submitted Failed! <br> Error: '.$_GET['value'].' </div> ';
echo '<script>
                       setTimeout(function() {
                           window.location.href = "it.php";
                       }, 1000);
                   </script>';
}
?>
</Center>

  </div>
  <style>
        /* Box styles */
        .feedback-box {
          max-width: 500px;
          margin: 0 auto;
          border: 2px solid #ddd;
          border-radius: 8px;
          padding: 40px 20px;
          text-align: center;
          background-color: #fff;
          box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.15);
          transition: box-shadow 0.2s;
        }
      
        .feedback-box:hover {
          box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2);
        }
      
        /* Title styles */
        .feedback-title {
          margin-top: 0;
          margin-bottom: 20px;
          font-size: 25px;
          color: #222;
          text-transform: uppercase;
          letter-spacing: 2px;
          font-weight: bold;
        }
        .course {
          margin-top: 0;
          margin-bottom: 20px;
          font-size: 18px;
          color: #222;
          text-transform: uppercase;
          letter-spacing: 2px;
          font-weight: bold;
        }
      
        /* Rating styles */
        .rating {
          display: inline-flex;
          flex-direction: row-reverse;
          position: relative;
          height: 40px;
          line-height: 40px;
          font-size: 30px;
          user-select: none;
          margin-bottom: 30px;
        }
      
        .rating input {
          display: none;
        }
      
        .rating label {
          color: #bbb;
          cursor: pointer;
          transition: color 0.2s;
        }
      
        .rating label:hover,
        .rating label:hover ~ label,
        .rating input:checked ~ label {
          color: #FFC107;
        }
      
        .rating label:before {
          content: "\2605";
          font-size: 40px;
          margin-right: 10px;
          line-height: 1;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        }
      
        /* Submit button styles */
        .submit-button {
          background-color: #FFC107;
          border: none;
          color: #fff;
          font-size: 20px;
          font-weight: bold;
          padding: 12px 28px;
          border-radius: 8px;
          cursor: pointer;
          transition: background-color 0.2s;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 2px 4px
        }    
        .select {
          background-color: #ffffff;
          border: none;
          color: #0c0c0c;
          font-size: 14px;
          font-weight: bold;
          padding: 12px 28px;
          border-radius: 8px;
          cursor: pointer;
          transition: background-color 0.2s;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 2px 4px
        }
        </style>


    <!-- Courses Start -->
  
    <!-- Courses End -->
<br>
<?php
$sql = "SELECT query_table.QUERY_TEXT, user_table.U_NAME, query_table.U_ID as query_UID, 
answer_table.ANSWER_TEXT, answer_table.U_ID as answer_UID
FROM query_table
INNER JOIN answer_table
ON query_table.Q_ID = answer_table.Q_ID
INNER JOIN user_table
ON query_table.U_ID = user_table.U_ID
";
$result=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">USERS QUERIES RESPONSES : - </h4>
				</div>
				<div class="card-body--" style="background-color: #f7f7f7; padding: 20px; border-radius: 5px; box-shadow: 0 0 5px rgba(0,0,0,0.2);">
  <div class="table-stats order-table ov-h">
    <table class="table" style="width: 100%; border-collapse: collapse;">
      <thead>
        <tr>
          <th style="padding: 10px; text-align: left;">USER</th>
          <th style="padding: 10px; text-align: left;">QUESTION</th>
          <th style="padding: 10px; text-align: left;">ANSWER</th>
          <th style="padding: 10px;"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td style="padding: 10px;"><?php echo $row['U_NAME']?></td>
          <td style="padding: 10px;"><?php echo $row['QUERY_TEXT']?></td>
          <td style="padding: 10px;"><?php echo $row['ANSWER_TEXT']?></td>
          <td style="padding: 10px;">
            <?php
            // echo "<span class='badge badge-delete'><a href='?type=delete&q_id=".$row['q_id']."'>Delete</a></span>";
            ?>
            </FORM>
          </td>
        </tr>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
</div>		 </div>
		  </div>
	   </div>
       
	</div>
</div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                    <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Sola - Bhagvat , Ahm</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 9054038108</p>
                        <p><i class="fa fa-envelope mr-2"></i>tutorialhubofficial11@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href=" https://twitter.com/Tutorial_hubb?t=PvvwlLiblva4E6I8jmvrjw&s=08"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="https://www.facebook.com/profile.php?id=100092423418526&mibextid=ZbWKwL"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="https://www.linkedin.com/in/tutorial-hub-731511276"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="https://instagram.com/tutorial.hubb?igshid=ZGUzMzM3NWJiOQ==
"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="php.php"><i class="fa fa-angle-right mr-2"></i>Php</a>
                            <a class="text-white mb-2" href="javascript.php"><i class="fa fa-angle-right mr-2"></i>Java Script</a>
                            <a class="text-white mb-2" href="html.php"><i class="fa fa-angle-right mr-2"></i>HTML</a>
                            <a class="text-white mb-2" href="my_sql.php"><i class="fa fa-angle-right mr-2"></i>My_Sql</a>
                            <a class="text-white mb-2" href="css.php"><i class="fa fa-angle-right mr-2"></i>Css</a>
							<!-- <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Civil Course</a>
							<a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Electrical Course</a> -->
                        </div>
                    </div>
                </div>
            </div>
            
                        </div>
                    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; All Rights Reserved. Designed by Team TUTORIAL HUB.
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>