<?php
 include('session.php');
 include('db.php');
?>
<?php
// Check if the user is logged in and has admin role
// if (isset($_SESSION['U_ID']) && $_SESSION['U_ROLE_ID'] == "1") {
  // Query the database for the pending faculty accounts
  $sql = "SELECT * FROM user_table WHERE U_ROLE_ID='03' AND is_approved='0'";
  $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
</head>
<body>
  <h1>Admin Panel</h1>
  <h2>Pending Faculty Accounts</h2>
  <table>
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Loop through each pending faculty account
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['USERNAME'] . "</td>";
          echo "<td>" . $row['U_EMAIL'] . "</td>";
          echo "<td>";
          echo "<form method='post' action='approve_faculty.php'>";
          echo "<input type='hidden' name='user_id' value='" . $row['U_ID'] . "' />";
          echo "<button type='submit' name='approve_button'>Approve</button>";
          echo "</form>";
          echo "</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>

<?php
// } else {
//   // If the user is not logged in or does not have admin role, redirect them to the login page
//   header("Location: signin.php");
//   exit();

?>
