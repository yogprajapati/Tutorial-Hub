<?php
 include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - TH Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a style="color: #FF6600;"class="navbar-brand ps-3" href="index.html">TH Admin Panal</a>
            <!-- Sidebar Toggle-->
          <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #FF6600;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">&nbsp;</div>
                          <a style="color: black;"class="nav-link" href="admin.php">
                                <div style="color: black;" class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Admin's information 
                            </a>
                            <div style="color: black;" class="sb-sidenav-menu-heading">Interface</div>
                            <a style="color: black;"class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div style="color: black;" class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div style="color: black;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a style="color: black;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div style="color: black;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div style="color: black;"class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a style="color: black;"class="nav-link" href="manageuser.php">Manage User</a>
                                            <a style="color: black;"class="nav-link" href="managefaculty.php">Manage Faculty</a>
                                            <a style="color: black;"class="nav-link" href="managefeedback.php">Manage Feedback</a>
                                            <a style="color: black;"class="nav-link" href="managequery.php">Manage Query</a>
                                            <a style="color: black;"class="nav-link" href="facultyapprove.php">Faculty Approval</a>
                                        </nav>
                                    </div>
                                    <a style="color: black;" class="nav-link collapsed" href="add.php">
                                        Add Materials </a>
                                        <!-- <div style="color: black;"class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a> -->
                                    <!-- <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a style="color: black;"class="nav-link" href="addcomputer.html">Computer </a>
                                            <a style="color: black;"class="nav-link" href="addit.html">Information Technology</a>
                                            <a style="color: black;"class="nav-link" href="addcivil.html">Civil</a>
                                            <a style="color: black;"class="nav-link" href="addelectrical.html">Electrical</a>
                                        </nav>
                                    </div> -->
                                </nav>
                            </div>
                            <!-- <div style="color: black;"class="sb-sidenav-menu-heading">Overview</div>
                            <a style="color: black;"class="nav-link" href="charts.html">
                                <div style="color: black;"class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>   
                                Charts
                            </a> -->
                            <!-- <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <h2 align='center'>Welcome <?php echo $loggedin_session;?></h2>
                <h3 align='center'>Admin ID : <?php echo $loggedin_id;?></h3>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TUTORIAL - HUB &nbsp;</h1>
                        <ol class="breadcrumb mb-4">
                          <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                        
                            
                        <!-- <div class="row">
                            <div class="col-xl-20">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Publish a new article
                                    </div>
                                    
                                </div>
                            </div> -->
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Admin table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age &nbsp;</th>
                                            <th>Joining Year &nbsp;</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                        
                                        <tr>
                                            <td>Yash Patel</td>
                                            <td>Front-End&nbsp;&nbsp;</td>
                                            <td>Ahmedabad &nbsp;</td>
                                            <td>19</td>
                                            <td>2022</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Yog Prajapati</td>
                                            <td>Back-End&nbsp;</td>
                                            <td>Ahmedabad</td>
                                            <td>18</td>
                                            <td>2022</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Vrunda Pipaliya</td>
                                            <td>Content-Management&nbsp;&nbsp;</td>
                                            <td>Ahmedabad</td>
                                            <td>18</td>
                                            <td>2022</td>
                                            
                                        </tr>
										
                                    </tbody>
                                </table>
                            </div>
     <!-- admin.php -->
<!-- admin.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <center>
    <h1>Maintenance Mode</h1>
    <?php
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo '<p>' . htmlspecialchars($message) . '</p>';
    }
    ?>
    <form method="post" action="toggle_maintenance.php">
        <input type="hidden" name="maintenance_action" value="toggle">
        <button type="submit">ON/OFF</button>
    </form>
    <br>
    <form method="post" action="set_maintenance_time.php">
        <label for="maintenance_time">Set Maintenance Time:</label>
        <input type="datetime-local" id="maintenance_time" name="maintenance_time">
        <button type="submit">Set</button>
    </form>
    <script type="text/javascript">
        setTimeout(function () {
            location.reload();
        }, 60000); // Refresh the page every 1 minute
    </script>
</center>
</body>
</html>


                            <style>
                                .social-media {
                                  display: flex;
                                  justify-content: center;
                                  align-items: center;
                                  background-color: #f4f4f4;
                                  padding: 20px;
                                  border-radius: 10px;
                                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                                }
                                
                                .social-media a {
                                  margin: 0 10px;
                                  transition: transform 0.3s ease-in-out;
                                  border-radius: 50%;
                                  overflow: hidden;
                                }
                                
                                .social-media a:hover {
                                  transform: translateY(-5px);
                                  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                                }
                                
                                .social-media img {
                                  width: 50px;
                                  height: 50px;
                                  object-fit: cover;
                                  object-position: center;
                                  transition: transform 0.3s ease-in-out;
                                }
                                
                                .social-media a:hover img {
                                  transform: scale(1.1);
                                }
                              </style>
                              
                              <div class="social-media">
                                <a href="https://www.facebook.com/"><img src="https://e7.pngegg.com/pngimages/670/159/png-clipart-facebook-logo-social-media-facebook-computer-icons-linkedin-logo-facebook-icon-media-internet.png" alt="Facebook"></a><br>
                                <!-- <a href="https://www.twitter.com/"><img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-twitter-social-media-round-icon-png-image_6315985.png" alt="Twitter"></a>
                                <a href="https://www.instagram.com/"><img src="https://www.citypng.com/public/uploads/preview/-11590304172n1klp7ohcb.png" alt="Instagram"></a>
                                <a href="https://www.linkedin.com/"><img src="https://logowik.com/content/uploads/images/329_linkedin.jpg" alt="LinkedIn"></a> -->
                              <h4>Mail id : tutorialhubofficial11@gmail.com | Password : YYV@1234</h4>
                              </div>
                              
                              <div class="social-media">
                                
                              <a href="https://www.twitter.com/"><img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-twitter-social-media-round-icon-png-image_6315985.png" alt="Twitter"></a>
                                
                              <h4>Username : Tutorial_hubb | Password : yyv@1234</h4>
                              
                              </div>
                              
                              <div class="social-media">
                               
                                <a href="https://www.instagram.com/"><img src="https://www.citypng.com/public/uploads/preview/-11590304172n1klp7ohcb.png" alt="Instagram"></a>
                               
                              <h4>Username : tutorial.hubb | Password : yyv@123</h4>
                              
                              </div>
                              
                              <div class="social-media">
                               
                                <a href="https://www.linkedin.com/"><img src="https://logowik.com/content/uploads/images/329_linkedin.jpg" alt="LinkedIn"></a> 
                                
                              <h4>Mail id : tutorialhubofficial11@gmail.com | Password : yyv@123</h4>
                              
                              </div>
                              
                              
                              
                        </div>
                  </div>
                </main>
               
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
