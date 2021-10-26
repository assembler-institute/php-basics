
    <!-- function that given two numbers returns the sum of both -->
    <article class="article">
        <h3>1. Function that given two numbers returns the sum of both</h3>
        <h5>example :</h5>
<pre>
function sumNumbers(int $a, int $b) {
    return $a + $b;
}
echo sumNumbers(4, 5);
</pre>
        <h5>result :</h5>
        <?php
            function sumNumbers(int $a, int $b) {
                return $a + $b;
            }
            echo sumNumbers(4, 5);
        ?>
    </article>

    <!-- function that given two numbers returns the multiplication of both -->
    <article class="article">
        <h3>2. Function that given two numbers returns the multiplication of both</h3>
        <h5>example :</h5>
<pre>
function multiplicationNumbers(int $a, int $b) {
    return $a * $b;
}
echo multiplicationNumbers(4, 5);
</pre>
        <h5>result :</h5>
        <?php
            function multiplicationNumbers(int $a, int $b) {
                return $a * $b;
            }
            echo multiplicationNumbers(4, 5);
        ?>
    </article>

    <!-- function that given two numbers returns the division of both -->
    <article class="article">
        <h3>3. Function that given two numbers returns the division of both</h3>
        <h5>example :</h5>
<pre>
function divideNumbers(int $a, int $b) {
    return $a / $b;
}
echo sumNumbers(8, 2);
</pre>
        <h5>result :</h5>
        <?php
            function divideNumbers(int $a, int $b) {
                return $a / $b;
            }
            echo divideNumbers(8, 2);
        ?>
    </article>

    <!-- function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.  -->
    <article class="article">
        <h3>4. Function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation. </h3>
        <h5>example :</h5>
<pre>
function operateNumbers(int $a, $operation ,int $b) {
    if ($operation === "add") {
        return $a + $b;
    } else if ($operation === "multiple") {
        return $a * $b;
    } else if ($operation === "divide") {
        return $a / $b;
    } else {
        return "The operation is not valid";
    }
}
echo operateNumbers(8, "multiple" ,2);
</pre>
        <h5>result :</h5>
        <?php
            function operateNumbers(int $a, $operation ,int $b) {
                if ($operation === "add") {
                    return $a + $b;
                } else if ($operation === "multiple") {
                    return $a * $b;
                } else if ($operation === "divide") {
                    return $a / $b;
                } else {
                    return "The operation is not valid";
                }
            }
            echo operateNumbers(8, "multiple" ,2);
        ?>
    </article>
