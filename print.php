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
        <b>Generate an instruction that makes use of "echo" </b>
        <br>
    <pre>echo("Echo message");</pre>
    <u>Result:</u>
    <i>
        <?php
        echo ("Echo message");
        ?>
    </i>
    </p>
    <p>
        <b>Generate an instruction that makes use of "print" </b>
        <br>
    <pre>print("Print message")</pre>
    <u>Result:</u>
    <i>
        <?php
        print("Print message");
        ?>
    </i>
    </p>
    <p>
        <b>Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential</b>
        <br>
    <pre>
            $test = array(1, 2, 3);
            print_r($test);
        </pre>
    <u>Result:</u>
    <i>
        <?php
        $test = array(1, 2, 3);
        print_r($test);
        ?>
    </i>
    <br>
    <pre>
                $test1 = "This is a test";
                print_r($test1);
            </pre>
    <u>Result:</u>
    <i>
        <?php
        $test1 = "This is a test";
        print_r($test1);
        ?>
    </i>
    </p>
</body>

</html>