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
    <h3>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</h3>
    <pre>
        $date = new DateTime("yesterday");
        var_dump($date);
        var_dump($date->format('Y-m-d'));
    </pre>
    <u>Results:</u>
    <i>
        <?php
        $date = new DateTime("yesterday");
        echo ("<br>");
        var_dump($date);
        echo ("<br>");
        var_dump($date->format('Y-m-d'));
        ?>
    </i>
    </p>
    <p>
    <h3>Get the current date in any format</h3>
    <pre>
        echo (date("l jS \of F Y"));;
    </pre>
    <u>Results:</u>
    <i>
        <?php
        echo (date("l jS \of F Y"));
        ?>
    </i>
    </p>
    <p>
    <h3>Get the current day</h3>
    <pre>
        echo (date("l"));
    </pre>
    <u>Result:</u>
    <i>
        <?php
        echo (date("l"));
        ?>
    </i>
    </p>
    <p>
    <h3>Get the current month in numerical format (1-12)</h3>
    <pre>
        var_dump(date("n"));
    </pre>
    <u>Result:</u>
    <i>
        <?php
        var_dump(date("n"));
        ?>
    </i>
    </p>
    <p>
    <h3>Get the current minute with leading zeros (00 - 59)</h3>
    <pre>
        var_dump(date("i"));
    </pre>
    <u>Result:</u>
    <i>
        <?php
        var_dump(date("i"));
        ?>
    </i>
    </p>


</body>

</html>