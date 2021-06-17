<code>
    <div style="margin-bottom:15px">
        <b>It generates a function that given two numbers returns the sum of both
</b><br />
        <pre>
function sum($a, $b) {
    return $a + $b;
}
sum(2, 3);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
function sum($a, $b) {
    return $a + $b;
}
echo sum(2, 3);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>It generates a function that given two numbers returns the multiplication of both
</b><br />
        <pre>
function mult($a, $b) {
    return $a * $b;
}
mult(2, 3);
        </pre>
        <u>Result:</u>
        <i>
        <?php
function mult($a, $b) {
    return $a * $b;
}
echo mult(2, 3);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>It generates a function that given two numbers returns the division of both</b><br />
        <pre>
function divide($a, $b) {
    return $a / $b;
}
divide(2, 3);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
function divide($a, $b) {
    return $a / $b;
}
echo divide(6, 2);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
</b><br />
        <pre>
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

operation(2, 3, "multiply");

        </pre>
        <u>Result:</u>
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

echo operation(2, 3, "multiply");
        ?>        
        </i>
    </div>

</code>