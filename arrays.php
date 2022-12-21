<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>Arrays.php</h1>
    <?php
        echo '<b>Create a simple string array</b><br><code>$string = ["Juan", "Pepe", "Mario"]</code><br>';
        $string = ['Juan', 'Pepe', 'Mario'];
        echo '<pre>';
        var_dump($string);
        echo '</pre>';

        echo '<b>Create a simple numbers array</b><br><code>$numbers = [5, 8.1, 258, 35.9]</code><br>';
        $numbers = [5, 8.1, 258, 35.9];
        echo '<pre>';
        var_dump($numbers);
        echo '</pre>';

        echo '<b>Create a nested array</b><br><code>$nested = [[5, 8.1, 258, 35.9],["Juan", "Pepe", "Mario"]]</code><br>';
        $nested = [[5, 8.1, 258, 35.9],['Juan', 'Pepe', 'Mario']];
        echo '<pre>';
        var_dump($nested);
        echo '</pre>';

        echo '<b>Create a nested array</b><br>';
        echo '<b style="color:red;"> Array length: ' . count($string) . '</b><br><code>count($string)</code>';
        echo '<pre>';
        var_dump($string);
        echo '</pre>';

        echo '<b>Combine arrays</b><br><code>$result = array_merge($numbers, $nested)</code>';
        $result = array_merge($numbers, $nested);
        echo '<pre>';
        var_dump($result);
        echo '</pre>';

        echo '<b>Get last position of an array</b><br><code>end($string)</code><br>';
        echo '<b style="color:red;"> Last position: ' . end($string) . '</b>';
        echo '<pre>';
        var_dump($string);
        echo '</pre>';

        echo '<b>Add elements to array</b><br><code>array_push($string, "Carlos", "Julio")</code><br>';
        echo '<b> Added Carlos and Julio</b>';
        array_push($string, 'Carlos', 'Julio');
        echo '<pre>';
        var_dump($string);
        echo '</pre>';

    
    
    ?>
</body>
</html>