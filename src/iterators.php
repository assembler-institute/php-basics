<div>
<h3>Using Iterators : for, foreach, while and do while</h3>

<div class="forLoop">
<h4>for</h4>
    <h5>
<?php
// using for loop 
echo '$number = 1;<br>
for ($i; $i <= 3; $i++) {<br>
    for ($j = $i; $j <= 2; $j++) {<br>
        for ($k = 1; $k <= $number; $k++) {<br>
            echo "*";<br>
        }<br>
        echo "<br>";
        $number++;<br>
    }<br>
};<p>output:</p>';
?>
</h5>
<div class="forLoopExample">
    <h5>
 <?php
$number = 1;
for ($i; $i <= 3; $i++) {
    for ($j = $i; $j <= 2; $j++) {
        for ($k = 1; $k <= $number; $k++) {
            echo "*";
        }
        echo "<br>";
        $number++;
    }
};
?>       
    </h5>

</div>

<div class="foreachLoop">
<h4>foreach</h4>
<h5>
<?php
// using foreach loop
echo '$profileData = array("Name" => "Eunyoung", "Occupation" => "Student", Age => 34, "Nationality" => "South Korea");<br>
foreach ($profileData as $key => $value) {<br>
    echo "$key: $value";<br>
}<p>output:</p>';
$profileData = array("Name" => "Eunyoung", "Occupation" => "Student", "Age" => 34, "Nationality" => "South Korea");
foreach ($profileData as $key => $value) {
    echo "$key: $value<br>";
}
?>    
</h5>
</div>
<div class="wrapper">
<div class="whileLoop inWrapper">
<h4>while</h4>
<h5>
 <?php  
 //using while loop
    echo '$i = "A"; <br> 
    while ($i < "F") {  <br> 
        echo $i . " "  <br> 
        $i++;  <br> 
    }  <p>output:</p>';
    $i = "A";  
    while ($i < "F") {  
        echo $i . " ";  
        $i++;  
    }  
?>     
</h5>

</div>

<div class="doWhileLoop inWrapper">
<h4>do while</h4>
<h5>
<?php
// using do while loop
echo '$i = 6;<br>
do{<br>
    $i--;<br>
    echo  $i . " ";<br>
}<br>
while($i >= 2);<p>output:</p>';
$i = 6;
do{
    $i--;
    echo  $i . " ";
}
while($i >= 2);
?>    
</h5>

</div>
</div>

</div>
