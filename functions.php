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
    echo "<H1> FUNCTIONS</H1>";

    // Var declarations
    $firstNumVar = 2;
    $secondNumVar = 4;

    // Vars used for examples
    echo "<H3> - Vars used for examples</H3>";
    echo "\$firstNumVar = $firstNumVar <br>"; 
    echo "\$secondNumVar = $secondNumVar <br>"; 

    // Function that given two numbers returns the sum of both
    echo "<H3> - Function that given two numbers returns the sum of both</H3>";
    echo "
    <pre>
        <code>
        function sum(\$a, \$b){
            return \$a + \$b;
        }
        </code>
    </pre>
    ";

    function sum($a, $b){
        return $a + $b;
    };

    echo "The addition of \$firstNumVar and \$secondNumVar is "; echo sum($firstNumVar,$secondNumVar); echo"<br>";

    // Function that given two numbers returns the first one times the second one
    echo "<H3> - Function that given two numbers returns the first one times the second one</H3>";
    echo "
    <pre>
        <code>
        function mul(\$a, \$b){
            return \$a * \$b;
        }
        </code>
    </pre>
    ";

    function mul($a, $b){
        return $a * $b;
    };

    // Function that given two numbers returns the divison of the first by the second
    echo "<H3> - Function that given two numbers returns the divison of the first by the second</H3>";
    echo "
    <pre>
        <code>
        function div(\$a, \$b){
            return \$a / \$b;
        }
        </code>
    </pre>
    ";

    function div($a, $b){
        return $a / $b;
    };

    // Depending on the type of operation received by parameter, the function will execute the function responsible 
    // for performing the operation, since you have previously implemented the function for each operation separately.
    echo "<H3> - Depending on the type of operation received by parameter, the function will execute the function responsible <br> 
    for performing the operation, since you have previously implemented the function for each operation separately.</H3>";
    echo "
    <pre>
        <code>
        function(\$a, \$b, \$operation){
            if(\$operation == 'sum'){
                echo 'The addition of \$a and \$b is '; echo sum(\$a,\$b);
            }
            elseif(\$operation == 'mul')'
                echo 'The multiplication of \$a by \$b is '; echo mul(\$a,\$b);
            }else{
                echo 'The division of \$a by \$b is '; echo div(\$a,\$b);
            }
        }
        </code>
    </pre>
    ";

    function quickMaths($a, $b, $operation){
        if($operation == "sum"){
            echo "The addition of \$a and \$b is "; echo sum($a,$b); echo"<br>";
        }
        elseif($operation == "mul"){
            echo "The multiplication of \$a by \$b is "; echo mul($a,$b); echo"<br>";
        }else{
            echo "The division of \$a by \$b is "; echo div($a,$b); echo"<br>";
        }
    };

    echo "<H4> Sum example</H4>";
    echo quickMaths($firstNumVar, $secondNumVar, "sum");

    echo "<H4> Mul example</H4>";
    echo quickMaths($firstNumVar, $secondNumVar, "mul");

    echo "<H4> Div example</H4>";
    echo quickMaths($firstNumVar, $secondNumVar, "div");

    ?>

    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
