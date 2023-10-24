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
        <title>MANAGE QUERIES</title>
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
                            <div class="col-lg-5">
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
$query_id=get_safe_value($con,$_GET['query_id']);
$delete_sql="delete from query_table where Q_ID='$query_id'";
mysqli_query($con,$delete_sql);
}
}
$sql="SELECT user_table.USERNAME, course_master.COURSE_NAME, query_table.status , query_table.QUERY_TEXT, query_table.Q_ID AS query_id, query_table.U_ID AS user_id
FROM query_table 
JOIN user_table ON query_table.U_ID = user_table.U_ID
JOIN course_master ON query_table.COURSE_ID = course_master.COURSE_ID";
$result=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">USERS QUERIES : - </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <!-- <th></th> -->
							   <th>USERNAME</th>
							   <th>COURSE NAME</th>
							   <th>QUERY</th>
							   <th>Status</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($result)){?>
							<tr>
							   <td><?php echo $row['USERNAME']?></td>
							   <td><?php echo $row['COURSE_NAME']?></td>
							   <td><?php echo $row['QUERY_TEXT']?></td>
							   <td><?php echo $row['status']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&query_id=".$row['query_id']."'>Delete</a></span>";
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



<!-- FACULTY ANSWER -->
<?php
if(isset($_GET['type']) && $_GET['type']!=''){
$type=get_safe_value($con,$_GET['type']);
if($type=='delete1'){
$answer_id=get_safe_value($con,$_GET['answer_id']);
$delete_sql="delete from answer_table where A_ID='$answer_id'";
mysqli_query($con,$delete_sql);
}
}
$sql="SELECT user_table.USERNAME, course_master.COURSE_NAME, query_table.QUERY_TEXT, answer_table.ANSWER_TEXT, answer_table.faculty_name , query_table.Q_ID AS query_id, query_table.U_ID AS user_id, answer_table.A_ID AS answer_id
FROM query_table 
JOIN user_table ON query_table.U_ID = user_table.U_ID
JOIN course_master ON query_table.COURSE_ID = course_master.COURSE_ID
LEFT JOIN answer_table ON query_table.Q_ID = answer_table.Q_ID";
$result=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">FACULTY REPLIES : - </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
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
							$i=1;
							while($row=mysqli_fetch_assoc($result)){?>
							<tr>
							<td><?php echo $row['USERNAME'] ?></td>
                                            <td><?php echo $row['QUERY_TEXT'] ?></td>
                                            <td><?php echo $row['ANSWER_TEXT'] ?></td>
                                            <td><?php echo $row['faculty_name'] ?></td>
							   
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete1&answer_id=".$row['answer_id']."'>Delete</a></span>";
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



<!-- Footer -->
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
