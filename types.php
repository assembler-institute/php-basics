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
    echo "<H1> Types</H1>";

    // Example class
    echo "<H3> - Example class</H3>";
    
    echo "<pre>
            <code>
    class foo
    {
        function do_foo()
        {
            echo 'Doing foo.'; 
        }
    }
            </code>
        </pre>";

    class foo
    {
        function do_foo()
        {
            echo "Doing foo."; 
        }
    }

    // Var declarations
    $boolVar = true;
    $intVar = 2;
    $floatVar = 3.5;
    $stringVar = "I'm a string baby";
    $arrayVar = ["I'm", "an", "arrayVar", "baby"];
    $objectVar = new foo();
    $nullVar = NULL;

    // Vars used for examples
    echo "<H3> - Vars used for examples</H3>";
    echo "\$boolVar = $boolVar <br> \$intVar = $intVar <br> 
    \$floatVar = $floatVar <br> \$stringVar = $stringVar <br>";
    echo "\$arrayVar = "; print_r($arrayVar); echo "<br> \$objectVar = "; 
    print_r($objectVar); echo "<br> \$nullVar = $nullVar";

    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
