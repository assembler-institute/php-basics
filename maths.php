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
    <h3>Define a variable whose value is the result of the function that returns an absolute value.</h3>
    <pre>
        $resultAbs = abs(-2);
        var_dump($resultAbs);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $resultAbs = abs(-2);
        var_dump($resultAbs);
        ?>
    </i>
    </p>
    <p>
    <h3>Define a variable whose value is the result of the
        function that returns a rounded value to the next highest integer.</h3>
    <pre>
        $resultCeil = ceil(2.2);
        var_dump($resultCeil);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $resultCeil = ceil(2.2);
        var_dump($resultCeil);
        ?>
    </i>
    </p>
    <p>
    <h3>Define a variable whose value is the result of the function that returns
        the highest value of a series of values ​​that are received by parameter.</h3>
    <pre>
        $resultMax = max(array(9,2,3));
        var_dump($resultMax);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $resultMax = max(array(9, 2, 3));
        var_dump($resultMax);
        ?>
    </i>
    </p>
    <p>
    <h3>Define a variable whose value is the result of the function that returns the
        lowest value of a series of values ​​that are received by parameter.</h3>
    <pre>
        $resultMin = min(array(9, 2, 3));
        var_dump($resultMin);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $resultMin = min(array(9, 2, 3));
        var_dump($resultMin);
        ?>
    </i>
    </p>
    <p>
    <h3>Define a variable whose value is
        the result of the function that returns a random number</h3>
    <pre>
        $resultRandom = rand();
        var_dump($resultRandom);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $resultRandom = rand();
        var_dump($resultRandom);
        ?>
    </i>
    </p>



</body>

</html>