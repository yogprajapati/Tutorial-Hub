<?php
 include('session.php');
 include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Feedback</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
                    function get_safe_value($con,$str){
                        if($str!=''){
                            $str=trim($str);
                            return mysqli_real_escape_string($con,$str);
                        }
                    }
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$FEEDBACK_ID=get_safe_value($con,$_GET['FEEDBACK_ID']);
		$delete_sql="delete from feedback where FEEDBACK_ID='$FEEDBACK_ID'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="SELECT feedback.*, user_table.USERNAME, user_table.U_NAME
FROM feedback
JOIN user_table ON feedback.U_ID = user_table.U_ID
ORDER BY feedback.FEEDBACK_ID ASC;
";
$result=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">FEEDBACK : </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th>FEEDBACK ID</th>
							   <th>USERNAME</th>
							   <th>RATING</th>
							   <th>TOTAL RATING</th>
						       <th>AVERAGE RATING</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($result)){?>
							<tr>
							   <td><?php echo $row['FEEDBACK_ID']?></td>
							   <td><?php echo $row['USERNAME']?></td>
							   <td><?php echo $row['RATING']?></td>
							   <td><?php echo $row['TOTAL_RATING']?></td>
							   <td><?php echo $row['AVG_RATING']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&FEEDBACK_ID=".$row['FEEDBACK_ID']."'>Delete</a></span>";
								?>
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
    <!-- <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                           
                        </div>
                    </div>
                </main>
            </div> -->
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; TUTORIAL - HUB 2022</div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
