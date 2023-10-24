<?php
 include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - TUTORIAL HUB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

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
                            <a href="#" class="nav-link" data-toggle="dropdown">COMPUTER <i class="fa fa-angle-down float-right mt-1"></i></a>
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
                            <a href="it.php" class="nav-item nav-link">Courses</a>
                            <!-- <a href="itteacher.php" class="nav-item nav-link">Teachers</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="itblog.php" class="dropdown-item">Blog List</a>
                                    
                                </div>
                            </div>
                            <a href="itcontact.php" class="nav-item nav-link active">Contact</a>
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
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form action="itquery.php" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
                            <!-- <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" name="name" />
                                <p class="help-block text-danger"></p> -->
                            
                            <select class="custom-select border-0 px-4" name="course" id="course" >
                                <option selected>Select Your Course</option>
                                <option value="01">PHP</option>
                                <option value="02">JavaScript</option>
                                <option value="03">HTML</option>
                                <option value="04">MY_SQL</option>
                                <option value="05">Css</option>
                                <option value="06">CIVIL</option>
                                <option value="07">ELECTRICAL</option>
                            </select><br>
                            <!-- <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" name="email" />
                                <p class="help-block text-danger"></p>
                            </div> -->
                            <!-- <br><div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" name="subject" />
                                <p class="help-block text-danger"></p>
                            </div> -->
                            <br><div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message" name="message" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <center> <?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks=='success') {

$message = "Query Submitted Successfully.";

// Output the message
echo "<script>alert('$message');</script>";
echo '<script>
                        setTimeout(function() {
                            window.location.href = "itcontact.php";
                        }, 1000);
               </script>';

}
if ($remarks=='failed') {
    $message = "Query Submitted Failed Try Again Later!.";

    // Output the message
    echo "<script>alert('$message');</script>";
echo '<script>
                       setTimeout(function() {
                           window.location.href = "itcontact.php";
                       }, 1000);
                   </script>';
}
if ($remarks=='error') {
// echo ' <div id="reg-head-fail">Query Submitted Failed! <br> Error: '.$_GET['value'].' </div> ';
$message = "Error Try Again Later!.";

// Output the message
echo "<script>alert('$message');</script>";
echo '<script>
                       setTimeout(function() {
                           window.location.href = "itcontact.php";
                       }, 1000);
                   </script>';
}
?>
</Center>

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


   
</body>

</html>