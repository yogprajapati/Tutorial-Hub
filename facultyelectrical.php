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
            <!-- body start -->
            <div class="container-fluid py-5">
                <div class="container pt-5 pb-3">
                    <div class="text-center mb-5">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">electrical</h5>
                        <h1>Explore Top Subjects</h1>
                    </div>
                    </div>
                    </div>
                    <center> <div class="container">
                        <div class="photo">
                            <img src="img/electrical-engineering-electronic-circuit-technology.jpg" width="250" height="250" alt="JAVASCRIPT Photo">
                        </div><br>
                        <div class="info">
                            <h2>About ELECTRICAL</h2><br>
                            <p>Electrical engineering is an engineering discipline concerned with the study, design, and application of equipment, devices, and systems which use electricity, electronics, and electromagnetism. It emerged as an identifiable occupation in the latter half of the 19th century after commercialization of the electric telegraph, the telephone, and electrical power generation, distribution, and use..</p>
                        <h3> Click Below to Download ;) </h3>
                        </div>
                    </div><br>
                    <center>
                        <form method="post" action="civil.php">
                            <input type="hidden" name="pdf_id" value="1">
                            <button type="submit" class="fillin" name="retrieve_pdf">CIVIL</button>
                        </form><center><br><br>
            
           
<!-- footer - start -->

<footer class="site-footer">
                <div class="container">
                    <div class="row">
    
                        <div class="col-12">
                            <h5 class="text-white">
                                <i class="bi-geo-alt-fill me-2"></i>
                                Sola Bhagvat , Ahm
                            </h5>
                            <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                                tutorialhub.officiall@gamil.com
                            </a>
                        </div>
    
                        <div class="col-6">
                            <p class="copyright-text mb-0">Copyright © Tutorial - Hub  
                            
                            <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">Tutorial - Hub</a></p>
                        
                        </div>
    
                        <div class="col-lg-3 col-5 ms-auto">
                            <ul class="social-icon">
                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>
    
                                <li><a href="#" class="social-icon-link bi-twitter"></a></li>
    
                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
    
                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>
    
                                <li><a href="#" class="social-icon-link bi-youtube"></a></li>
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