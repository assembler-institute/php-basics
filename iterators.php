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
    $arrayVar = ["I'm", "an", "arrayVar"];

    // Header 
    echo "<H1> ITERATORS</H1>";

    // Generate a snippet that makes use of for
    echo "<H3> - <u>for loop</u> allows you to loop over a structure using an index iterator</H3>";
    for($i=0; $i<sizeof($arrayVar); $i++){
        echo "index "."$i => "."$arrayVar[$i] <br>";
    }

    //Generate a snippet that makes use of foreach
    echo "<H3> - <u>foreach loop</u> allows you to loop over a structure using a key iterator</H3>";
    foreach($arrayVar as $key){
        echo "keyValue => "."$key <br>";
    }

    // Generate a snippet that uses while
    echo "<H3> - <u>while loop</u> allows you to loop over a structure using a condition before the start of every iteration (first iteration might not happen)</H3>";
    $i = 0;
    echo "conditon => (\$i < sizeof(\$arrayVar)) <br>";
    while($i <sizeof($arrayVar)){
        echo "index "."$i => "."$arrayVar[$i] <br>";
        $i++;
    }

    //Generate a snippet that uses do while
    echo "<H3> - <u>do while loop</u> allows you to loop over a structure using a condition at the end of every iteration (first iteration always happens)</H3>";
    $i = 0;
    echo "conditon => (\$i < sizeof(\$arrayVar)) <br>";
    do{
        echo "index "."$i => "."$arrayVar[$i] <br>";
        $i++;
    }while($i <sizeof($arrayVar))
    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
