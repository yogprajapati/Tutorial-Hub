<!-- toggle_maintenance.php -->
<!-- toggle_maintenance.php -->
<?php
$maintenanceFile = 'maintenance.flag';
$message = '';

if (isset($_POST['maintenance_action']) && $_POST['maintenance_action'] === 'toggle') {
    if (file_exists($maintenanceFile)) {
        unlink($maintenanceFile); // Disable maintenance mode
        $message = 'Maintenance mode has been turned off.';
    } else {
        file_put_contents($maintenanceFile, ''); // Enable maintenance mode
        $message = 'Maintenance mode has been turned on.';
    }
}

header('Location: admin.php?message=' . urlencode($message)); // Redirect back to the admin panel
exit;
?>
