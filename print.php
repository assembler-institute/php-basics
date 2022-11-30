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
    $intVar1 = 1;
    $intVar2 = 2;
    $stringVar = "I'm a stringVar";
    $arrayVar = ["I'm", "an", "arrayVar"];

    // Header 
    echo "<H1> PRINTS</H1>";
    // Generate an instruction that makes use of "echo"
    echo "<H3> - <u>Echo</u> allows me to output one or more strings</H3>";
    echo " * Printing an int variable <u>$intVar1</u><br>";
    echo " * Printing a string variable <u>$stringVar</u>";

    //Generate an instruction that makes use of "print"
    echo "<H3> - <u>Print</u> allows me to output a string</H3>";
    print "* <u>hello</u> ";
    print "<u>world</u><br>";
    print " * <u>This string spans
    multiple lines. The newlines will be
    output as well</u>";

    // Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
    echo "<H3> - <u>Print_r</u> displays information about a variable in a way that's readable by humans.</H3>";
    echo"* ";
    print_r($arrayVar);

    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
