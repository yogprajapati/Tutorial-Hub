<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $U_EMAIL = $_POST['email'];

    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=tutorialhub', 'root', '');

    // Check if the email address exists in the database
    $stmt = $db->prepare('SELECT U_ID FROM user_table WHERE U_EMAIL = ?');
    $stmt->execute([$U_EMAIL]);
    $user = $stmt->fetch();

    if ($user) {
        // Generate a random code and store it in the database
        // $CODE = bin2hex(random_bytes(5));
        $CODE = sprintf('%05d', mt_rand(0, 99999));
        $stmt = $db->prepare('UPDATE user_table SET CODE = ? WHERE U_ID = ?');
        $stmt->execute([$CODE, $user['U_ID']]);

        // Send the code to the user's email address
        $to = $U_EMAIL;
        $subject = 'Password reset code';
        $message = 'Your password reset code is: ' . $CODE;
        mail($to, $subject, $message);

        // Redirect the user to the code entry page
        header('Location: passcode.php');
        exit;
    }
}