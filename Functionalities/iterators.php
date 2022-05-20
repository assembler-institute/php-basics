<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterators</title>
</head>
<body>
    <!-- 
        Generate a snippet that makes use of for
        Generate a snippet that makes use of foreach
        Generate a snippet that uses while
        Generate a snippet that uses do while
     -->
    <?php
        for ($i=0; $i < 5; $i++) { 
            echo "<br>* $i";
        }

        echo '<br>';
        echo '<br>';

        $nums = array('1', '2', '3', '4', '5');
        foreach ($nums as $value) {
            echo $value * 2;
        }

        echo '<br>';
        echo '<br>';

        $noms = array('pear', 'banana', 'apple');
        foreach ($noms as $key) {
            echo $key.' is a fruit'.'<br>';
        }
        echo "<br>";
        $i = 0;
        while ($i <= 10) {
            echo "Num is: $i <br>";
            $i++;
        }

        do{
            echo "$i <br>";
        } while ($i < 10);
    ?>

</body>
</html>