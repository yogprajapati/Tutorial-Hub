<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="signin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  <style>
	form i {
    margin-left: -30px;
    cursor: pointer;
}
.select {
          background-color: #ffffff;
          border: none;
          color: black;
          font-size: 14px;
		  font-color: black;
          /* font-weight: bold; */
          padding: 12px 28px;
          border-radius: 8px;
          cursor: pointer;
          transition: background-color 0.2s;
          text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 2px 4px
		  
        }
       
  </style>
</head>


<body>
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Register  / Login</div> ';
}
if ($remarks=='success') {
// echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
// }
$message = "Registration Success.";

// Output the message
echo "<script>alert('$message');</script>";
echo '<script>
                        setTimeout(function() {
                            window.location.href = "signin.php";
                        }, 1000);
               </script>';
					}
if ($remarks=='failed') {
// echo ' <div id="reg-head-fail" class="headrg">Registration Failed ! Email or Username exists</div> ';
// }
$message = "Registration Failed ! Email or Username Exists.";

// Output the message
echo "<script>alert('$message');</script>";
echo '<script>
                        setTimeout(function() {
                            window.location.href = "signin.php";
                        }, 1000);
               </script>';
}
if ($remarks=='passworderror') {
	
	$message = "Write Complex Password! (A-z,@-#,1-2-3)";
	
	// Output the message
	echo "<script>alert('$message');</script>";
	echo '<script>
							setTimeout(function() {
								window.location.href = "signin.php";
							}, 1000);
				   </script>';
	}

?>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" onsubmit="return validateForm()" method="post">
			<h3>Create Account</h3>
			<span>Welcome</span>
			<input type="text" required="required" id="name" name="name" placeholder="Name" />
			<input type="text"  id="name" required="required" name="username" placeholder="Username" />
			<input type="email" required="required" name="email"  placeholder="Email" />
			<input type="number" required="required" name="phoneno" placeholder="Phone no" />
			  <input type="password" required="required" name="password" id="password" placeholder="Password" />
			
			<input type="password" required="required" name="password" id="password" placeholder="Confirm Password" />
			<input type="text" name="address" placeholder="Address" /> <br>

			<label for="feedback-dropdown"class="course">Select Your Role :</label><br>
			<select class="select" name="role" id="role">
				<!-- <option selected>Select Your Role</option> -->
				<option value="02">Student</option>
				<option value="03">Faculty</option>
			</select><br>
            <button id="Sendsignupbutton" type="submit">Sign up</button>
			
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="logincheck.php"  method="post">
		<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Login Here</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
}
?>
			<h1>LOG IN</h1>
			<span>Welcome Back...</span>
			<input type="text" id="" name="username" placeholder="Username" />
			<input type="password" id="password" name="password" placeholder="Password" />
			<a href="passmail.php">Forgot your password?</a>
			<button type="submit" name="login_button" >Log In</button>
			<!-- <input type="submit" name="button" onclick="auth()" id=""> -->
		</form>
	</div>
	
	<!-- <script>
	   function auth(){
		var email = document.getElementById("email").value;
		var password = docuemnt.getElementById("password").value;
		if(email == "yogaprajapati19@gmail.com" && password =="Yog@1234"){
			window.location.assign("successfullregistration.html");
			alert("login successfully");
		}
		else {
			alert("Invalid Information");
			return;
		}
	}
	</script> -->
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal details</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hi There!</h1>
				<p>Enter your personal details to open an account with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="script.js" charset="utf-8"></script>
</body>

</html>