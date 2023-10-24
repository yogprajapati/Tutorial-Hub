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
                            <li class="nav-item active">
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


            <style>
  .form-box {
    width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
  }
  .form-input {
    margin-bottom: 20px;
  }
  .form-control {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
  }
  .custom-select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='%23000' d='M4.6 7.6l3.6 3.6c.2.2.5.2.7 0l3.6-3.6c.4-.4 0-1-.6-1H5.2c-.6 0-1 .6-.6 1z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right .75rem center;
    background-size: 12px;
  }
  .btn-submit {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }
  .btn-submit:hover {
    background-color: #3e8e41;
  }
  </style>
  
  <div class="form-box">
    <form action="facultyuploadmaterial.php" method="post" enctype="multipart/form-data">
      <div class="form-input">
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Enter File Name" required>
        </div><br>
        <div class="form-group">
          <input type="text" class="form-control" name="type" placeholder="Enter File Type" required>
        </div><br>
        <div class="form-group">
          <select class="custom-select" name="branch" id="role" required>
            <option selected>Select Branch</option>
            <option value="7">Computer Dept</option>
            <option value="16">IT Dept</option>
            <option value="9">Electrical Dept</option>
            <option value="6">Civil Dept</option>
          </select>
        </div><br>
        <div class="form-group">
          <select class="custom-select" name="course" id="course" required>
            <option selected>Select Course</option>
            <option value="1">PHP</option>
            <option value="2">JAVASCRIPT</option>
            <option value="3">HTML</option>
            <option value="4">MY-SQL</option>
            <option value="5">CSS</option>
            <option value="6">CIVIL</option>
            <option value="7">ELECTRICAL</option>
          </select>
        </div><br>
        <div class="form-group">
          <input type="file" name="pdf_file" class="form-control" accept=".pdf" title="Upload PDF" required>
        </div><br>
        <div class="form-group">
          <input type="submit" class="btn-submit" name="submit" value="Submit">
        </div>
      </div>
    </form>
  </div><br><br><br>
  

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
    