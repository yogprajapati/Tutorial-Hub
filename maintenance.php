

<?php
$maintenanceFile = 'maintenance.flag';
$maintenanceTimeFile = 'maintenance_time.txt';
$maintenanceTime = '';

if (file_exists($maintenanceFile)) {
    $maintenanceTime = file_get_contents($maintenanceTimeFile);
    $remainingTime = getRemainingTime($maintenanceTime);

    if ($remainingTime > 0) {
        header('HTTP/1.1 503 Service Unavailable');
        header('Content-Type: text/html; charset=utf-8');
        header('Retry-After: ' . $remainingTime); // Retry after the remaining time in seconds
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Period</title>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                text-align: center;
                padding: 20px;
            }

            .maintenance-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .maintenance-image {
                width: 200px;
                margin-right: 20px;
            }

            .maintenance-content {
                text-align: left;
            }

            h1 {
                color: #333;
            }

            p {
                color: #666;
            }
        </style>
</head>
<body>
    
</body>
</html>
<?php


        // Display your maintenance message or HTML page
        echo '<html><head><title>Website Maintenance</title></head><body>';
        echo '<h1>Website Maintenance</h1>';
        echo '<p>We apologize for the inconvenience, but our website is currently undergoing maintenance.</p>';
        echo '<p>Maintenance will be over at: ' . $maintenanceTime . '</p>';
        echo '<script type="text/javascript">';
        echo 'setTimeout(function(){ location.reload(); }, ' . $remainingTime * 1000 . ');';
        echo '</script>';
        echo '</body></html>';
        exit;
    } else {
        // Maintenance time is over, remove maintenance file
        unlink($maintenanceFile);
        unlink($maintenanceTimeFile);
    }
}

function getRemainingTime($maintenanceTime) {
    $maintenanceTimestamp = strtotime($maintenanceTime);
    $currentTime = time();
    $remainingTime = $maintenanceTimestamp - $currentTime;
    return $remainingTime;
}
?>
