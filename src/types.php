<code>
<div style="padding-left: 1rem">
    
    <div style="padding-bottom: 3rem">
        <b>6.1 Define a new variable and assign a value for every type:
</b>
        <pre>
            <em><u>code:</u></em>
            
            <span style="color: blue;">
                $sum = 6 + 2;
                $rest = 6 - 2;
                $multiplier = 6 * 2;
                $division = 6 % 2;
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
echo $sum = 6 + 2;
echo $rest = 6 - 2;
echo $multiplier = 6 * 2;
echo $division = 6 / 2;
echo $modulus = 6 % 2;
?>
    </i>
</div>
<div style="padding-bottom: 3rem">
        <b>6.1 Define a new variable and assign a value for every type:
</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$varBoolean = true;
$varInteger = 33;
$varFloat = 80;
$varString = "I like telling stories with my dad";
$varArray = array("wine", "cyder", "beer", "water");
$varObject = (object) array('key' => 'value');
$varNull = null
            </span>
        </pre>
        <em><u>Result:</u></em>
        <i>
            <?php
$varBoolean = true;
$varInteger = 33;
$varFloat = 80;
$varString = 'I like telling stories with my dad';
$varArray = array("wine", "cyder", "beer", "water");
$varObject = (object) array('key' => 'value');
$varNull = null;
var_dump($varBoolean);
var_dump($varInteger);
var_dump($varFloat);
var_dump($varString);
var_dump($varArray);
var_dump($varObject);
var_dump($varNull);
?>
    </i>
</div>

</div>
</code>