<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iterators</title>
</head>
<body>
    <h1>Iterators.php</h1>
    <?php
        $names = array('Juan', 'Pedro', 'Roberto', 'Carlos');
        $numbers = array(1, 2, 3, 4, 5, 6);
        $num1 = 1;
        $count = 0;

        echo '<p>1- Iterating with<b> the for loop </b>through an array of strings</p>
              <ul>';
        for($i = 0; $i < count($names); $i++){
            echo '<li>'. $names[$i] .'</li>';
        }
        echo '</ul>';

        echo '<p>2- Iterating with<b> the foreach loop </b>through an array of strings</p>
              <ul>';      
              foreach($names as $name){
                echo '<li>'. $name .'</li>';
              }
        echo '</ul>';

        echo '<p>3- Iterating with<b> the while loop </b>through an array of numbers</p>
              <table> <tr>';
        while($count < count($numbers)){
            echo '<td style="border:1px solid black; padding:10px;">' . $numbers[$count] . '</td>' ;
            $count++;
        }
        echo '</table> </tr>';

        echo '<p>4- Iterating with<b> the do while loop </b>through an array of numbers</p>
              <table><tr>';      
        do {
                echo  '<td style="border:1px solid black; padding:7px 10px;">' . $num1 .'</td>';
                $num1++;
        } while ($num1 <= 10);
        echo '</table> </tr>';



    ?>
    
</body>
</html>