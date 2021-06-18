<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Iterators</title>
</head>

<body>
    <h1>Iterators</h1>
    <?php
    // Generate a snippet that makes use of for
    echo "<h2>For</h2>";
    echo '<pre>
    $phrase = "Welcome";
    for($i = 0; $i < strlen($phrase); $i++) {
        echo "$phrase[$i].";
    }
    </pre>';
    echo "<strong>Result: </strong>";
    $phrase = "Welcome";
    for ($i = 0; $i < strlen($phrase); $i++) {
        echo "$phrase[$i].";
    }

    // Generate a snippet that makes use of foreach
    echo "<h2>Foreach</h2>";
    echo '<pre>
    $numbers = array(1, 2, 3, 4);
    foreach($numbers as $num) {
        echo $num * 2;
    }
    </pre>';
    echo "<strong>Result: </strong>";
    $numbers = array(1, 2, 3, 4);
    foreach ($numbers as $num) {
        echo $num * 2;
    }

    // Generate a snippet that uses while
    echo "<h2>While</h2>";
    echo '<pre>
    $i = 0;
    while($i < 7) {
        echo "$i";
        $i++;
    }
    </pre>';
    echo "<strong>Result: </strong>";
    $i = 0;
    while ($i < 7) {
        echo "<p>$i</p>";
        $i++;
    }

    // Generate a snippet that uses do while
    echo "<h2>Do while</h2>";
    echo '<pre>
    $y = 0;
    do {
        echo "$y";
        $y++;
        
    } while ($y < 7);
    </pre>';

    $y = 0;
    do {
        echo "<p>$y</p>";
        $y++;
    } while ($y < 7);

    ?>
</body>

</html>