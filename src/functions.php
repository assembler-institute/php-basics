<code>
<div style="padding-left: 1rem">
    
    <div style="padding-bottom: 3rem">
        <b>10.1 Create a function that given two numbers returns the sum of both.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
function sum($a, $b) {
return $a + $b;
}
sum(6, 2);

            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
function sum($a, $b) {
    return $a + $b;
}
echo sum(6, 2);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>10.2 Create a function that given two numbers returns the multiplication of both.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
function mult($a, $b) {
return $a + $b;
}
mult(6, 2);

            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
function mult($a, $b) {
    return $a + $b;
}
echo mult(6, 2);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>10.3 Create a function that given two numbers returns the division of both.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
function divide($a, $b) {
return $a / $b;
}
mult(6, 2);

            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
function divide($a, $b) {
    return $a / $b;
}
echo mult(6, 2);
?>
    </i>
</div>

    <div style="padding-bottom: 2rem">
        <b>10.4 Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
function operation($a, $b, $operation) {
    switch ($operation) {
        case "add":
            return $a + $b;
            break;
        case "multiply":
            return $a * $b;
            break;
        case "divide":
            return $a / $b;
            break;
        default:
            return "You need to specify if you want to add, multiply or divide";
    };
};

echo operation(2, 6, "add");

            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
function operation($a, $b, $operation) {
    switch ($operation) {
        case "add":
            return $a + $b;
            break;
        case "multiply":
            return $a * $b;
            break;
        case "divide":
            return $a / $b;
            break;
        default:
            return "You need to specify if you want to add, multiply or divide";
    };
};

echo operation(2, 6, "add");
?>
    </i>
</div>

</div>
</code>