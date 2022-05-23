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
    $absValVar = abs(-9);
    $highestIntVar = floor(getrandmax());
    $arrayVar = [2,1,18,5];
    $highestValVar = max($arrayVar);
    $lowestValVar = min($arrayVar);
    $randVal = rand();

    // Header 
    echo "<H1> MATHS</H1>";

    // Vars used for examples
    echo "<H3> - Vars used for examples</H3>";
    echo "Array for the highestValVar and lowestValVar examples: <br><br> \$arrayVar = "; print_r($arrayVar); echo"<br> <br>";
    echo "<H3>Examples</H3>";
    echo "\$absValVar = $absValVar <br> \$highestIntVar = $highestIntVar <br> 
    \$highestValVar = $highestValVar <br> \$lowestValVar = $lowestValVar <br>
    \$randVal = $randVal <br>";

    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
