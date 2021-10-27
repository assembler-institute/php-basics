<code>
<div style="padding-left: 1rem">
    
    <div style="padding-bottom: 3rem">
        <b>9.1 Define a simple array composed of text strings.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$milkshake = array("milk", "banana", "strawberries");
print_r($milkshake);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$milkshake = array("milk", "banana", "strawberries");
print_r($fruits);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>9.2 Define a simple array consisting of whole numbers and decimal numbers.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$arrayNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
print_r($arrayNumbers);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$arrayNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
print_r($arrayNumbers);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>9.3 Define a multidimensional array.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$ingredients = array(
    "chocolate chip" => array(
        "calories" => 400,
        "carbs" => 20,
        "fat" => 2,
        "protein" => 4
    ),
    "raisin" => array(
        "calories" => 400,
        "carbs" => 20,
        "fat" => 2,
        "protein" => 4
    ),
    "macadamia nut" => array(
        "calories" => 400,
        "carbs" => 20,
        "fat" => 2,
        "protein" => 4
    ),
);
print_r($ingredients);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$ingredients = array(
    "chocolate chip" => array(
        "calories" => 400,
        "carbs" => 20,
        "fat" => 2,
        "protein" => 4
    ),
    "raisin" => array(
        "calories" => 400,
        "carbs" => 20,
        "fat" => 2,
        "protein" => 4
    ),
    "macadamia nut" => array(
        "calories" => 400,
        "carbs" => 20,
        "fat" => 2,
        "protein" => 4
    ),
);
print_r($ingredients);
?>
    </i>
</div>

</div>
</code>

    <div style="padding-bottom: 3rem">
        <b>9.4 Execute the function that allows to obtain the length of an array.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$arrayLength = ["sleep", "bed", "tired", "SOS"];
echo count($arrayLength);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$arrayLength = ["sleep", "bed", "tired", "SOS"];
echo count($arrayLength);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>9.5 Execute the function that allows to obtain the combination of two arrays.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$arrayLength = ["sleep", "bed", "tired", "SOS"];
echo count($arrayLength);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$airplanes = array("Boeing", "Airbus", "Bombardier", "Embraer", "Antonov");
$colors = array("blue", "red", "green", "yellow", "black");
print_r($thirdArray = array_combine($airplanes,$colors));
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>9.6 Execute the function that once is given an array return the last element of it.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$airplanes = array("Boeing", "Airbus", "Bombardier", "Embraer", "Antonov");
echo end($airplanes);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$airplanes = array("Boeing", "Airbus", "Bombardier", "Embraer", "Antonov");
echo end($airplanes);
?>
    </i>
</div>

    <div style="padding-bottom: 2rem">
        <b>9.7 Execute the function that once is given an array add a new element to the array in question</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$myBreakfast = ["toasts", "milk"];
array_push($myBreakfast, "muffins", "orange juice", "cookies");
print_r($myBreakfast);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$myBreakfast = ["toasts", "milk"];
array_push($myBreakfast, "muffins", "orange juice", "cookies");
print_r($myBreakfast);
?>
    </i>
</div>

</div>
</code>