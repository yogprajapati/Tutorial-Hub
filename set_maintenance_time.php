<!-- set_maintenance_time.php -->
<?php
$maintenanceTimeFile = 'maintenance_time.txt';

if (isset($_POST['maintenance_time'])) {
    $maintenanceTime = $_POST['maintenance_time'];
    file_put_contents($maintenanceTimeFile, $maintenanceTime);
    $message = 'Maintenance time has been set to: ' . $maintenanceTime;
} else {
    $message = 'Maintenance time was not set.';
}

header('Location: admin.php?message=' . urlencode($message));
exit;
?>
