<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // Var declarations
    $dateTime = new DateTime();

    // Header 
    echo "<H1>DATES</H1>";

    // Vars used for examples
    echo "<H3> - Var used for examples</H3>";
    echo "\$dateTime = new DateTime(); <br>";

    // Get current date in Y-m-d  and in d-m-Y format
    echo "<H3> - <u>Get current date in Y-m-d format</u></H3>";
    echo "\$dateTime->format('Y-m-d') => "; echo $dateTime->format('Y-m-d'); echo "<br>";
    echo "<H3> - <u>Get current date in d-m-Y format</u></H3>";
    echo "\$dateTime->format('d-m-Y') => "; echo $dateTime->format('d-m-Y'); echo "<br>";
    echo "<H3> - <u>Get current date in d-M-Y format</u></H3>";
    echo "\$dateTime->format('d-M-Y') => "; echo $dateTime->format('d-M-Y'); echo "<br>";
    
    // Get Current day
    echo "<H3> - <u>Get Current day</u></H3>";
    echo "\$dateTime->format('d') => "; echo $dateTime->format('d'); echo "<br>";

    // Get current month in numerical format (1-12)
    echo "<H3> - <u>Get current month in numerical format (1-12)</u></H3>";
    echo "\$dateTime->format('n') => "; echo $dateTime->format('n'); echo "<br>";

    // Get current minute with leading zeros (00-59)
    echo "<H3> - <u>Get current minute with leading zeros (00-59)</u></H3>";
    echo "\$dateTime->format('s') => "; echo $dateTime->format('s'); echo "<br>";

    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
