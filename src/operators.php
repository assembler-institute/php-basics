<code>
    <div style="margin-bottom:15px">
        <b>Create an example of use for arithmetic operators: +, -, *, /, and %</b><br />
        <pre>
$a = 5 + 3;
$b = 5 - 3;
$c = 5 * 3;
$d = 5 % 3;
        </pre>
        <u>Result:</u>
        <i>
        <?php 
echo $a = 5 + 3;
echo $b = 5 - 3;
echo $c = 5 * 3;
echo $d = 5 % 3;
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Create a usage example for comparison operators: ==,! =, <,>, <=, >=</b><br />
        <pre>
($a = 5, $b = 3)
$a == $b;
$a != $b;
$a < $b;
$a > $b;
$a <= $b;
$a >= $b;
        </pre>
        <u>Result:</u>
        <i>
        <?php
    $a = 5;
    $b = 3;
      var_dump($a == $b);
      var_dump($a != $b);
      var_dump($a < $b);
      var_dump($a > $b);
      var_dump($a <= $b);
      var_dump($a >= $b);
        ?>        
        </i>
    </div>


    <div style="margin-bottom:15px">
        <b>Create an example of use for logical operators: &&, ||, !, xor</b><br />
        <pre>
($a = null, $b = true)
$a && $b;
$a || $b;
!$b;
$a xor $b;
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$a = null; 
$b = true;

var_dump($a && $b);
var_dump($a || $b);
var_dump(!$b);
var_dump($a xor $b);
        ?>        
        </i>
    </div>

</code>