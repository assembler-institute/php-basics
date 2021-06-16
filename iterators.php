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
        <b>Generate a snippet that makes use of for</b>
        <br>
    <pre>
            for ($i = 1; $i <= 10; $i++) {
                echo $i;
            }
        </pre>
    <u>Result:</u>
    <i>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        ?>
    </i>
    </p>
    <p>
        <b>Generate a snippet that makes use of foreach</b>
        <br>
    <pre>
            $array = array(1, 2, 3, 4);
            foreach ( $array as $value) {
                echo($value);
            }
        </pre>
    <u>Result:</u>
    <i>
        <?php
        $array = array(1, 2, 3, 4);
        foreach ($array as $value) {
            echo ($value);
        }
        ?>
    </i>
    </p>
    <p>
        <b>Generate a snippet that uses while</b>
        <br>
    <pre>
            $i = 1;
            while ($i <= 10) {
                echo $i++;
            }
        </pre>
    <u>Result:</u>
    <i>
        <?php
        $i = 1;
        while ($i <= 10) {
            echo $i++;
        }
        ?>
    </i>
    </p>
    <p>
        <b>Generate a snippet that uses do while</b>
        <br>
    <p>do-while loops are very similar to while loops, except the truth
        expression is checked at the end of each iteration instead of in the beginning</p>
    <pre>
            $i = 0;
            do {
                echo $i;
            } while ($i > 0);
        </pre>
    <u>Result:</u>
    <i>
        <?php
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
        ?>
    </i>
    </p>

</body>

</html>