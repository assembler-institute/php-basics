<div>
    <h3>Working with Functions</h3>
    <div class="wrapper">
         <div class="sumNumbers inWrapper">
        <h4>sum two numbers</h4>
        <h5>
             <?php
             // a function that returns the sum of two numbers
echo 'function sumNumbers($num1, $num2) {<br>
            echo $num1 + $num2;<br>
        };<br>
        echo sumNumbers(2375, 865); <p>output:</p>';
function sumNumbers($num1, $num2)
{
    echo $num1 + $num2;
};
echo sumNumbers(2375, 865);
?>
        </h5>
    </div>    
    <div class="multiplyNumbers inWrapper">
         <h4>multiply two numbers</h4>
        <h5>
             <?php
             // a function that returns the multiplication of nunbers
echo 'function multiplyNumbers($num1, $num2) {<br>
            echo $num1 * $num2;<br>
        };<br>
        echo multiplyNumbers(23, 37); <p>output:</p>';
function multiplyNumbers($num1, $num2)
{
    echo $num1 * $num2;
};
echo multiplyNumbers(23, 37);
?>
        </h5>
    </div>
    </div>

        <div class="wrapper">

       <div class="numberDivision inWrapper">
         <h4>number division</h4>
        <h5>
             <?php
             // a function that returns the division of numbers
echo 'function numberDivision($num1, $num2) {<br>
            echo $num1 / $num2;<br>
        };<br>
        echo multiplyNumbers(1024, 32); <p>output:</p>';
function numberDivision($num1, $num2) {
            echo $num1 / $num2;
        };
echo numberDivision(1024, 32);
?>
        </h5>
    </div>
       <div class="remainder inWrapper">
         <h4>remainder</h4>
        <h5>
             <?php
             // a function that returns the remainder of numbers
echo 'function numberRemainder($num1, $num2) {<br>
            echo $num1 % $num2;<br>
        };<br>
        echo numberRemainder(329, 12); <p>output:</p>';
function numberRemainder($num1, $num2) {
            echo $num1 % $num2;
        };
echo numberRemainder(329, 12);
?>
        </h5>
    </div>
    </div>
</div>