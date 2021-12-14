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
    //Define a simple array composed of text strings
    echo "<h2>Array string</h2>";
        $arrStr = array(
            "a"=>"Hi",
            "b"=>"World",
            "c"=>"PHP"
        );
        print_r($arrStr);
    //Define a simple array consisting of whole numbers and decimal numbers
    echo "<h2>Array numbers</h2>";
        $arrNumbers = array(10,3,2.5);
        print_r($arrNumbers);

    //multimensional array
    echo "<h2>multimensional array</h2>";
        $multiArr = array(
                "a" => array(
                    1,2,3,5
                ),
               "b" => array(
                    "string1","string2"
                )
            );
        print_r($multiArr);
    //Execute the function that allows to obtain the length of an array
    echo "<h2>Length of an array</h2>";
        $arrlenght = print_r(count($arrNumbers));
    //Execute the function that allows to obtain the combination of two arrays
    echo "<h2>Combine two arrays</h2>";
    $combined = array_combine($arrNumbers,$arrStr);
    print_r($combined);
    //Execute the function that once is given an array return the last element of it
    echo "<h2>Return last element</h2>";
    echo $arrStr[array_key_last($arrStr)];
    //Execute the function that once is given an array add a new element to the array in question
    echo "<h2>Add new element to array</h2>";
    array_push($arrStr,"new element");
    print_r($arrStr) ;
    ?>
</body>
</html>