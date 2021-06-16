<div>
<h3>Using Operators : arithmetic, comparison and logical operators</h3>
<div class="arithmeticOperator">
    <h4>arithmetic operators</h4>
    <h5>
<?php 
    $x = 235;
    $y = 17;
    $z = 3;
    echo '$x = 235;
    $y = 17;
    $z = 3; </br>
    var_dump($x * $z + $y % $z - $y);';
    echo "<p>output :  </p>";
    var_dump($x * $z + $y % $z - $y);
    ?>
</h5>
</div>
<div class="comparisonOperator">
<h4>comparison operators</h4>
<h5>
<?php 
    $x = 35;
    $y = "35";
    $z = 35.0;
    echo '$x = 35;
    $y = "35";
    $z = 35.0; </br>
    var_dump($x == $y);</br>
    var_dump($x !== $z);</br>
    var_dump($y <> $z);</br>
    var_dump($x <=> $z);</br>';
    echo "<p>output :  </p>";
    var_dump($x == $y);
    echo "</br>";
    var_dump($x !== $z);
    echo "</br>";
    var_dump($y <> $z);
    echo "</br>";
    var_dump($x <=> $z);
    ?>
</h5>
</div>
<div class="logicalOperator">
<h4>logical operators</h4>
<h5>
<?php
echo '$currentHour = 9;</br>
$weekendHour = 17;</br>
$weekend = true;</br>
if($currentHour <br 10 || $currentHour > 19 ) {</br>
    echo "It is closed. </br>The store opens from 10 am to 7 pm.";</br>
}</br>
if($weekendHour > 14 && $weekend) {</br>
    echo "It is closed. The store opens until 2 pm at weekends.";</br>
}</br>';
echo "<p>output : </p>";
$currentHour = 9;
$weekendHour = 17;
$weekend = true;
if($currentHour < 10 || $currentHour > 19 ) {
    echo "<h5>It is closed. </>The store opens from 10 am to 7 pm.</h5>";
}
if($weekendHour > 14 && $weekend) {
    echo "<h5>It is closed. The store opens until 2 pm at weekends.</h5>";
}  
?>
</h5>

</div>
</div>
</html>