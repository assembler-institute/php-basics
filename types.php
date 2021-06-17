<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
    <h3>Define a new variable and assign a value to each of the following types:</h3>
    <ul>
        <li>boolean</li>
        <li>integer</li>
        <li>float</li>
        <li>string</li>
        <li>array</li>
        <li>object</li>
        <li>NULL</li>
    </ul>
    <pre>
        $boolVar = true;
        var_dump($boolVar);
        $intVar = 3;
        var_dump($intVar);
        $floatVar = 3.3;
        var_dump($floatVar);
        $stringVar = "This is a string";
        var_dump($stringVar);
        $arrayVar = array(1, 2, 3);
        var_dump($arrayVar);
        $objectVar = new DateTime();
        var_dump($objectVar);
    </pre>
    <u>Results:</u>
    <i>
        <?php
        echo ("<br>");
        $boolVar = true;
        var_dump($boolVar);
        echo ("<br>");
        $intVar = 3;
        var_dump($intVar);
        echo ("<br>");
        $floatVar = 3.3;
        var_dump($floatVar);
        echo ("<br>");
        $stringVar = "This is a string";
        var_dump($stringVar);
        echo ("<br>");
        $arrayVar = array(1, 2, 3);
        var_dump($arrayVar);
        echo ("<br>");
        $objectVar = new DateTime();
        var_dump($objectVar);
        echo ("<br>");

        ?>
    </i>
    </p>



</body>

</html>