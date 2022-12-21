<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date</title>
</head>
<body>
    <h1>Date.php</h1>  
    <?php
    $fecha = new DateTime(null, new DateTimeZone('Europe/Madrid'));
    echo '<p><b>Current date Europe/Madrid: </b></p>';
    echo '<pre>';
    var_dump($fecha);
    echo '</pre><hr>';
    echo '<p><b>Current date: </b>'. $fecha->format('Y-m-d') . '</p>';
    echo '<p><b>Current day: </b>' . $fecha->format('d') . '</p>';
    echo '<p><b>Current month: </b>' . $fecha->format('m') . '</p>';
    echo '<p><b>Current minuts: </b>'. $fecha->format('00:i') . '</p>';
    
    ?>
    
</body>
</html>