<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Printing</title>
</head>

<body>
    <h1>Printing</h1>
    <?php
    // Generate an instruction that makes use of "echo"
    echo "<h2>Echo</h2>";
    echo '<pre>echo "This is an echo";</pre>';
    echo '<p><strong>Result:</strong> This is an echo</p>';

    // Generate an instruction that makes use of "print"
    echo "<h2>Print</h2>";
    echo '<pre>print("I\'m printing this");</pre>';
    print("<p><strong>Result:</strong> I'm printing this<p>");


    // Generate an instruction that makes use of "print_r",
    // it is important that you assign a complex value to analyze its potential
    echo "<h2>Print_r</h2>";
    echo '<pre>print_r(array(array("I\'m", "printing", "arrays"), array(1, 2, 6, 12), array("Last", "array")));</pre>';
    echo '<p><strong>Result:</strong> ';
    print_r(array(array("I'm", "printing", "arrays"), array(1, 2, 6, 12), array("Last", "array")));
    ?>
</body>

</html>