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

    // Header 
    echo "<H1> ARRAYS</H1>";

    // Var declarations
    $stringArrayVar = ["I'm", "an", "arrayVar", "baby"];
    $numbersArrayVar = [1, 2.5, 6, 9, 10.11];
    $multiDimArrayVar = [array(1,2,3,5,8), array(3,8,7,1,10)];
    $newArrayEntryVar = "I'm new";

    // Vars used for examples
    echo "<H3> - Vars used for examples</H3>";
    echo "\$stringArrayVarr = "; print_r($stringArrayVar); 
    echo"<br> \$numbersArrayVar = "; print_r($numbersArrayVar); 
    echo"<br> \$multiDimArrayVar ="; print_r($multiDimArrayVar); echo"<br>"; 

    // Execute the function that allows to obtain the length of an array
    echo "<H3> - Execute the function that allows to obtain the length of an array</H3>";
    echo "The length of \$stringArrayVarr is "; echo sizeof($stringArrayVar);

    // Execute the function that allows to obtain the combination of two arrays
    echo "<H3> - Execute the function that allows to obtain the combination of two arrays</H3>";
    echo "The merge between \$stringArrayVarr and \$numbersArrayVar is "; print_r(array_merge($stringArrayVar, $numbersArrayVar));
    
    // Execute the function that once is given an array return the last element of it
    echo "<H3> - Execute the function that once is given an array return the last element of it</H3>";
    echo "The last element of \$stringArrayVarr is "; echo array_key_last($stringArrayVar);
    
    // Execute the function that once is given an array add a new element to the array in question
    echo "<H3> - Execute the function that once is given an array add a new element to the array in question</H3>";
    echo "The current elements of \$stringArrayVarr are <br>"; print_r($stringArrayVar); echo"<br> <br>";
    array_push($stringArrayVar, $newArrayEntryVar);
    echo "The elements of \$stringArrayVarr after adding \$newArrayEntryVar are <br>"; print_r($stringArrayVar); echo"<br>";

    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
