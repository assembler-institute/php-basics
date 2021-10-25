<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterators PHP</title>
</head>

<body>
    <div>
        <h2>Generate a snippet that makes use of for</h2>
        <p><?php
            for ($x = 0; $x <= 5; $x++) {
                echo "The number is: $x <br>";
            }
            ?></p>
    </div>
    <div>
        <h2>Generate a snippet that makes use of foreach</h2>
        <p><?php
            $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

            foreach ($age as $x => $val) {
                echo "$x = $val<br>";
            }
            ?></p>
    </div>
    <div>
        <h2>Generate a snippet that uses while</h2>
        <p><?php
            $x = 0;

            while ($x <= 50) {
                echo "The number is: $x <br>";
                $x += 10;
            }
            ?></p>
    </div>
    <div>
        <h2>Generate a snippet that uses do while</h2>
        <p><?php
            $x = 1;

            do {
                echo "The number is: $x <br>";
                $x++;
            } while ($x <= 5);
            ?></p>
    </div>
</body>

</html>