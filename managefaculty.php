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
        <title> Manage Faculty</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <!-- <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                           
                        </div>
                    </div> -->
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
		$U_ID=get_safe_value($con,$_GET['U_ID']);
		$delete_sql="delete from user_table where U_ID='$U_ID'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="SELECT * FROM user_table where U_ROLE_ID = '03'";
$result=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">REGISTERED FACULTY : - </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th>FACULTY ID</th>
							   <th>NAME</th>
							   <th>USERNAME</th>
							 
						       <th>EMAIL</th>
                               <th>PHONE NO</th>
                               <th>ADDRESS</th>
                               <th>ROLE ID</th>
                               <th>Reset Password Code</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($result)){?>
							<tr>
							   <td><?php echo $row['U_ID']?></td>
							   <td><?php echo $row['U_NAME']?></td>
							   <td><?php echo $row['USERNAME']?></td>
	
							   <td><?php echo $row['U_EMAIL']?></td>
                               <td><?php echo $row['U_PHONE_NO']?></td>
                               <td><?php echo $row['U_ADDRESS']?></td>
                               <td><?php echo $row['U_ROLE_ID']?></td>
                               <td><?php echo $row['CODE']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&U_ID=".$row['U_ID']."'>Delete</a></span>";
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
                </main>

<!-- Faculty Availability -->
<?php
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete1'){
		$FA_ID=get_safe_value($con,$_GET['FA_ID']);
		$delete_sql="delete from faculty_availability where FA_ID='$FA_ID'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="SELECT * FROM faculty_availability where FA_ID";
$result=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">FACULTY AVAILABILITY : - </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th>FACULTY AVALABILITY ID</th>
							   <th>FACULTY ID</th>
							   <th>DAY</th>
							   <th>LOGIN TIME</th>
						       <th>LOGOUT TIME</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($result)){?>
							<tr>
							   <td><?php echo $row['FA_ID']?></td>
							   <td><?php echo $row['U_ID']?></td>
							   <td><?php echo $row['DAY']?></td>
							   <td><?php echo $row['ST_TIME']?></td>
							   <td><?php echo $row['EN_TIME']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete1&FA_ID=".$row['FA_ID']."'>Delete</a></span>";
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
                </main>

            </div>
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
