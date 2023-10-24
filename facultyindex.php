<?php
 include('session.php');
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

    </head>
    
    <body>
    
        <main>

            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                    Welcome <?php echo $loggedin_session;?>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="facultyindex.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="facultyquery.php">Query</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="facultyupload.php">Upload Material</a>
</li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="facultylogout.php">Logout</a>
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
 <!-- About Start -->
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                    <h1>Innovative Way To Learn</h1>
                </div>
                <p>This website contains computer languages and many more tutorials that easy to
                    understand."TUTORIAL HUB" is our attempt to teach basic and those coding techniques to people in
                    short time.We have got you covered browse courses and find out best course for you ... " It's
                    FREE ". It's very helpful for mainly to some areas that lake money because our courses are free
                    for everyone. Any person who wants to study that can visit our website anytime and
                    anywhere.&nbsp;</p>

            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Category Start -->
<!-- <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
            <h1>Explore Top Subjects</h1>
        </div>
       <center> <button class="branch" > <a href="facultycomp.php"> COMPUTER DEPARTMENT </button> </a> <br> <br>
        <button class="branch" > <a href="facultyit.php"> IT DEPARTMENT </button> </a> <br> <br>
        <button class="branch" > <a href="facultycivil.php"> CIVIL DEPARTMENT </button> </a> <br> <br>
        <button class="branch" > <a href="facultyelectrical.php"> ELECTRICAL DEPARTMENT </button> </a> <br> <br></center>


        </div>
    </div>
</div> -->
<div style="background-color: #F5F5F5; padding: 20px;">
  <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
      <div class="text-center mb-5">
        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
        <h1 style="font-size: 3rem; font-weight: bold; color: #FF6600;">Explore Top Subjects</h1>
      </div>
      <center>
        <button class="branch" style="background-color: #1E90FF; color: #FFFFFF; border: none; border-radius: 5px; padding: 10px 20px; font-size: 1.2rem; font-weight: bold;">
          <a href="facultycomp.php" style="text-decoration: none; color: #FFFFFF;">COMPUTER DEPARTMENT</a>
        </button>
        <br> <br>
        <button class="branch" style="background-color: #1E90FF; color: #FFFFFF; border: none; border-radius: 5px; padding: 10px 20px; font-size: 1.2rem; font-weight: bold;">
          <a href="facultyit.php" style="text-decoration: none; color: #FFFFFF;">IT DEPARTMENT</a>
        </button>
        <br> <br>
        <button class="branch" style="background-color: #1E90FF; color: #FFFFFF; border: none; border-radius: 5px; padding: 10px 20px; font-size: 1.2rem; font-weight: bold;">
          <a href="facultycivil.php" style="text-decoration: none; color: #FFFFFF;">CIVIL DEPARTMENT</a>
        </button>
        <br> <br>
        <button class="branch" style="background-color: #1E90FF; color: #FFFFFF; border: none; border-radius: 5px; padding: 10px 20px; font-size: 1.2rem; font-weight: bold;">
          <a href="facultyelectrical.php" style="text-decoration: none; color: #FFFFFF;">ELECTRICAL DEPARTMENT</a>
        </button>
        <br> <br>
      </center>
    </div>
  </div>
</div>

<!-- Feedback -->

<div class="feedback-box"><form action="facultyfeedback.php" method="post">
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
      <option value="6">CIVIL</option>
      <option value="7">ELECTRICAL</option>
    </select>
  </div><br>
<!-- <button class="submit-button" type="submit">Submit</button> -->

<!-- <p class="thank-you-message">Thank you for your feedback!</p> -->
<button class="submit-button" id="Sendsignupbutton" type="submit">SUBMIT</button></form>
</div> <?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks=='success') {

$message = "Feedback Submitted Successfully.";

// Output the message
echo "<script>alert('$message');</script>";
echo '<script>
                        setTimeout(function() {
                            window.location.href = "facultyindex.php";
                        }, 1000);
               </script>';

}
if ($remarks=='failed') {
    $message = "Feedback Submitted Failed Try Again Later!.";

    // Output the message
    echo "<script>alert('$message');</script>";
echo '<script>
                       setTimeout(function() {
                           window.location.href = "facultyindex.php";
                       }, 1000);
                   </script>';
}
if ($remarks=='error') {
    $message = "Error Try Again Later!.";

    // Output the message
    echo "<script>alert('$message');</script>";
echo '<script>
                       setTimeout(function() {
                           window.location.href = "facultyindex.php";
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

        </main><br>

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
    
                                
                            </ul>
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