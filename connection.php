<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "tutorialhub";  
      
    $U_PASSWORD = $_POST['password'];
    $U_EMAIL = $_POST['email'];
    
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  