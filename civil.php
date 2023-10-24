<?php
 include('session.php');
?>
<?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorialhub";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the PDF file
    $M_ID = $_POST['M_ID'];
    $sql = "SELECT FILE_DATA FROM material_table WHERE M_ID = 6";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $FILE_DATA = $row['FILE_DATA'];
        // Display the PDF file
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="document.pdf" ');
        header('Content-Length: ' . strlen($FILE_DATA));
        echo $FILE_DATA;
    } else {
        echo "PDF file not found.";
    }
?>