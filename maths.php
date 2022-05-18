<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Maths</title>
</head>
<body>
    <?php
    $absolute = abs(-5);
    $rounded = ceil(2.5);
    $highest = max(1,3,6,8,9);
    $lowest = min(2,4,5,7,8);
    $random = rand();
    echo "<p>Absolute: $absolute </p>";
    echo "<p>Rounded: $rounded </p>";
    echo "<p>Highest: $highest </p>";
    echo "<p>Lowest: $lowest </p>";
    echo "<p>Random: $random </p>";
    ?>
    
</body>
</html>