<div>
<h3>Using Iterators : for, foreach, while and do while</h3>
<div class="loopWrapper">

<div class="forLoop loopStyle">
<h4>for</h4>
<div class="forLoopExample">
<?php
$number = 1;
for ($i; $i <= 3; $i++) {
    for ($j = $i; $j <= 2; $j++) {
        for ($k = 1; $k <= $number; $k++) {
            echo "*";
        }
        echo "</br>";
        $number++;
    }
}
?>

</div>
</div>

<div class="foreachLoop loopStyle">
<h4>foreach</h4>
<h5>* Profile *</h5>
<?php
$profileData = array("Name" => "Eunyoung", "Occupation" => "Student", Age => 34, "Nationality" => "South Korea");
foreach ($profileData as $key => $value) {
    echo "<h5>$key: $value</h5>";
}
?>
</div>
</div>
<div class="loopWrapper">

<div class="whileLoop loopStyle">
<h4>while</h4>
<?php  
    $i = 'A';  
    while ($i < 'F') {  
        echo "<h5>$i </h5>";  
        $i++;  
    }  
?>  
</div>

<div class="doWhileLoop loopStyle">
<h4>do while</h4>
<?php
$i = 6;
do{
    $i--;
    echo  "<h5>$i</h5>";
}
while($i >= 2);
?>
</div>
</div>

</div>
