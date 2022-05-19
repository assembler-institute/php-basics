<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths</title>
</head>

<body>
    <?php
    function absoluteValue($a)
    {
        return abs($a);
    };
    $absolute = absoluteValue(5.3);


    function roundedValue($a)
    {
        return round($a);
    };
    $rounded = roundedValue(35.4, 1);

    function getHighest($array)
    {
        $highest = 0;
        foreach ($array as $item) {
            if ($item > $highest) {
                $highest = $item;
            }
        }
        return $highest;
    };
    $highestNumber = getHighest(array(1, 2, 3, 4, 5));

    function getLowest($array)
    {
        $lowest = $array[0];
        foreach ($array as $item) {
            if ($item <= $lowest) {
                $lowest = $item;
            }
        }
        return $lowest;
    };
    $lowest = getLowest(array(1, 2, 3, 4, 5, 6,));


    function getRandomNumber($min, $max)
    {
        return random_int($min, $max);
    };
    $randomNumber = getRandomNumber(1, 9);
    ?>
</body>

</html>