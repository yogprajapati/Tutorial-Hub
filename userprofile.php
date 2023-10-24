<?php
include("logincheck.php");
include('maintenance.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
    body,li,ul{
    margin:0px auto;
   }
   body{
    background-color:white;
    width:100%;
    font-family:sans-serif;
   }
   header{
    background-color:#fff;
    width:100%;
    height:55px;
    margin:0px;
   }
   nav{
    width:100%;
    border-top:5px solid #3498DB;
   }
   nav ul{
    float:left;
    border-left:6px solid #BDC3C7;
    height:50px;
   }
   nav a{
    text-decoration:none;
    color:#3498DB;
    padding:10px;
    width:auto;
    font-size:30px;
    font-weight:bold;
    border-right:1px solid #BDC3C7;
    font-family:Gabriola;
    height:50px;
   }
   nav a:hover{
    color:#fff;
    background-color:#3498DB;
    transition:1s;
   }
   nav li{
    margin:0;
    padding:0;
    list-style:none;
    float:left;
   }
   
   #center{
    margin:0px auto;
    width:95%;
   }
   #center-set{
    float:left;
    width:100%;
    padding-top:1%;
    padding-bottom:0.5%;
    background-color:#A2DED0;
    border-top:5px solid #3498DB;
   }
   #signup{
    float:left;
    width:50%;
   }
   #signup-st,#login-st{
    background-color:#22313F;
    margin:50px;
    border-radius:20px;
    -webkit-box-shadow: 3px 3px 4px 0px rgba(0,0,0,0.85);
   }
   #reg{
    padding-top:10px;
   }
   #reg-head,#reg-bottom,#reg-head-fail{
    width:100%;
    text-align:center;
    background-color:#fff;
    font-weight:bold;
   }
   .headrg{
    border-top-left-radius:20px;
    border-top-right-radius:20px;
    padding-top:12px;
    padding-bottom:12px;
    font-size:22px;
    color:#FF6600;
   }
   .btmrg{
    padding-top:5px;
    padding-bottom:5px;
    border-bottom-left-radius:20px;
    border-bottom-right-radius:20px;
    font-size:18px;
    color:#FF6600;
   }
   #reg-head-fail{
    color:#D35400;
   }
   #reg-head:hover{
    /* color:#3498DB; */
    transition:1s;
   }
   #tb-name{
    float:right;
    font-size:20px;
   }
   #tb-box{
    height:22px;
    width:200px;
   }
   #st{
    width:100%;
    text-align:center;
    padding-top:30px;
    padding-bottom:10px;
   }
   #st-btn{
    text-align:center;
    padding:10px 21px 10px 21px;
    background-color:#FF6600;
    border:none;
    color:#fff;
    cursor:pointer;
    font-size:20px;
    font-weight:bold;
   }
   #st-btn:hover{
    color:#3498DB;
    background:#fff;
    transition:1s;
   }
   td.t-1{
    float:left;
    width:44%;
    text-align:right;
    color:#C5EFF7;
   }
   td.t-2{
    float:right;
    width:55%;
   }
   #lg-1{
    padding:10px;
    float:left;
    width:95%;
   }
   .tl-1{
    float:left;
    width:40%;
    padding-right:5%;
    text-align:center;
    color:#C5EFF7;
   }
   .tl-4{
    font-size:17px;
    font-weight:bold;
    text-align:center;
    color:#FDE3A7;
   }
   #login{
    float:right;
    width:50%;
   }
   #login-sg{
    margin-top:20%;
   }
   #footer{
    background-color:white;
    width:100%;
    height:50px;
    margin:0px;
    float:left;
    /* border-top:1px solid #3498DB; */
   }
   #footer p{
    text-align:center;
    font-size:18px;
    font-weight:bold;
    color:#FF6600;
   }
   </style>
</head>
<body>

<?php
session_start();
include_once 'db.php';

// if(!isset($_SESSION['user'])) {
//     header("Location: login.php");
// }

$U_ID = $_SESSION['U_ID'];
$sql = "SELECT * FROM user_table WHERE U_ID = $U_ID";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="profile">
    <?php while($rows=mysqli_fetch_array($result)) { ?>
    <div id="signup">
        <div id="signup-st">
            <form action="" method="POST" id="signin" id="reg">
                <div id="reg-head" class="headrg">Your Profile</div>
                <table border="0" align="center" cellpadding="2" cellspacing="0">
                    <tr id="lg-1">
                        <td class="tl-1"> <div align="left" id="tb-name">Registration Id :</div> </td>
                        <td class="tl-4"><?php echo $rows['U_ID']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1"> <div align="left" id="tb-name">Role id :</div> </td>
                        <td class="tl-4"><?php echo $rows['U_ROLE_ID']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1"><div align="left" id="tb-name">Name</div></td>
                        <td class="tl-4"><?php echo $rows['U_NAME']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1"><div align="left" id="tb-name">Username</div></td>
                        <td class="tl-4"><?php echo $rows['USERNAME']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1"><div align="left" id="tb-name">Email :</div></td>
                        <td class="tl-4"><?php echo $rows['U_EMAIL']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1"><div align="left" id="tb-name">Phone No :</div></td>
                        <td class="tl-4"><?php echo $rows['U_PHONE_NO']; ?></td>
                    </tr>
                    <tr id="lg-1">
                        <td class="tl-1"><div align="left" id="tb-name">Address :</div></td>
                        <td class="tl-4"><?php echo $rows['U_ADDRESS']; ?></td>
                    </tr>
                </table>
                <div id="reg-bottom" class="btmrg"> &copy; Tutorial - Hub</div>
            </form>
        </div>
    </div>
    <div id="login">
        <div id="login-sg">
            <div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
            <div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
            <!-- <div id="st"><a href="computer.html" id="st-btn">Back to site</a></div> -->
        </div>
    </div>
    <?php }
?>
</div>
</div>
</div>
</br>
</body>
</html>

