<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>

<body>

    <?php

    $newDate = new DateTime();

    print $newDate->format("D-M-Y H:i:s");
    print " <div>
    <a href='https://www.php.net/manual/en/datetime.format.php' target='_blank' > ⏰ Useful link to see the different time formats</a> 

    <p>Get the current Day => {$newDate->format("d")} using format('j'), with zeros we use 'd' and with letter 'D' inside format()</p> 
    <p>Get the current Month in number => {$newDate->format("n")} using format('n'), with zeros we use 'm' and with letter 'M' inside format()</p> 
    <p>Get the current minute in number => {$newDate->format("i")} using format('i')
    <div>
    ";


    ?>
</body>

</html>