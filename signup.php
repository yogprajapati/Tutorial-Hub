<?php
include('db.php');
?>
<?php
// Sanitize user input
$USERNAME = mysqli_real_escape_string($con, $_POST['username']);
$U_NAME = mysqli_real_escape_string($con, $_POST['name']);
$U_EMAIL = mysqli_real_escape_string($con, $_POST['email']);
$U_PHONE_NO = mysqli_real_escape_string($con, $_POST['phoneno']);
$U_PASSWORD = mysqli_real_escape_string($con, $_POST['password']);
$U_ADDRESS = mysqli_real_escape_string($con, $_POST['address']);
$U_ROLE_ID = mysqli_real_escape_string($con, $_POST['role']);

// Validate email address format
if (strlen($U_PASSWORD) < 8 || !preg_match('/[A-Z]/', $U_PASSWORD) || !preg_match('/[a-z]/', $U_PASSWORD) || !preg_match('/[0-9]/', $U_PASSWORD)) {
    // Password doesn't meet complexity requirements, redirect with failed message
    header("Location: signin.php?remarks=passworderror");
    exit();
}


// Hash the password securely
$hashed_password = password_hash($U_PASSWORD, PASSWORD_DEFAULT);

// Check if the username or email already exists
$stmt = mysqli_prepare($con, "SELECT * FROM user_table WHERE USERNAME=? OR U_EMAIL=?");
mysqli_stmt_bind_param($stmt, "ss", $USERNAME, $U_EMAIL);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) {
    // Username or email already exists, redirect with failed message
    header("Location: signin.php?remarks=failed");
    exit();
} else {
    // Insert the new user into the database
    $stmt = mysqli_prepare($con, "INSERT INTO user_table (U_NAME,USERNAME,U_EMAIL,U_PHONE_NO,U_PASSWORD,U_ADDRESS,U_ROLE_ID) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssss", $U_NAME, $USERNAME, $U_EMAIL, $U_PHONE_NO, $hashed_password, $U_ADDRESS, $U_ROLE_ID);
    if (mysqli_stmt_execute($stmt)) {
      
//       $U_NAME = $_POST['name'];
// $U_EMAIL = $_POST['email'];

// Email subject
$subject = "Registration Confirmation";

// Email body
$message = "<html>
<head>
<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333333;
    }
    h2 {
        color: #007BFF;
    }
    ul {
        margin: 0;
        padding-left: 20px;
    }
</style>
</head>
<body>
<h2>Dear $U_NAME,</h2>
<p>Thank you for registering on our website! We are delighted to have you as a member.</p>
<p>Please keep this email for your records. Here are a few instructions to get started:</p>
<ul>
    <li>Visit our website at <a href='localhost/tutorialhub/'>localhost/tutorialhub/</a></li>
    <li>Login with your email address: $U_EMAIL</li>
    <li>Explore the various features and resources available</li>
</ul>
<p>If you have any questions or need assistance, please don't hesitate to contact us.</p>
<p>Best regards,<br>Your Website Team</p>
</body>
</html>";

// Email headers
$headers = "From:tutorialhubofficial11@gmail.com\r\n";
$headers .= "Reply-To: $U_EMAIL\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "X-Priority: 1\r\n"; // Set email priority

// Send the email
$mailSent = mail($email, $subject, $message, $headers);
        

        // Set a secure cookie with the username and email
        $cookie_name = 'user_data';
        $cookie_value = base64_encode($USERNAME . '|' . $U_EMAIL);
        $cookie_expiry = time() + (86400 * 30); // 30 days
        $cookie_path = '/';
        $cookie_domain = $_SERVER['HTTP_HOST'];
        $cookie_secure = true; // Only transmit cookie over HTTPS
        $cookie_httponly = true; // Prevent JavaScript access to cookie
        setcookie($cookie_name, $cookie_value, $cookie_expiry, $cookie_path, $cookie_domain, $cookie_secure, $cookie_httponly);

        // Redirect with success message
        header("Location: signin.php?remarks=success");
        exit();
    } else {
        // Redirect with error message
        $error_message = mysqli_error($con);
        header("Location: signin.php?remarks=error&value=$error_message");
        exit();
    }
}
?>
