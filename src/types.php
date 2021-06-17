<code>
    <div style="margin-bottom:15px">
        <b>Define a new variable and assign a value of every type</b><br />
        <pre>
$varBoolean = true;
$varInteger = 5;
$varFloat = 4.2;
$varString = "This is a string";
$varArray = array(1, 2);
$varObject = (object) array('1' => 'foo');
$varNull = null
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$varBoolean = true;
$varInteger = 5;
$varFloat = 4.2;
$varString = 'This is a string';
$varArray = array(1, 2);
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

</code>