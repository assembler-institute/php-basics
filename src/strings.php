<code>
    <div style="margin-bottom:15px">
        <b>Print a text string
</b><br />
        <pre>
echo "This is a string"
        </pre>
        <u>Result:</u>
        <i>
        <?php 
echo "This is a string"
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Print a text string that interpret variables
</b><br />
        <pre>
$myName = "Nacho";
        </pre>
        <u>Result:</u>
        <i>
        <?php
echo $myName = "Nacho";
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Concatenate a previously declared variable in a text string</b><br />
        <pre>
$name = "Nacho";
$textVar = "My name is ${name}"
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$name = "Nacho";
echo $textVar = "My name is ${name}"
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows you to replace text in a string (case sensitive)</b><br />
        <pre>
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("Fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("Fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
echo $newphrase = str_replace($healthy, $yummy, $phrase);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</b><br />
        <pre>
        $phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("Fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("Fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
echo $newphrase = str_ireplace($healthy, $yummy, $phrase);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows you to write a text N times
</b><br />
        <pre>
str_repeat("-=", 10);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
echo str_repeat("-=", 10);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows to obtain the length of a text string</b><br />
        <pre>
strlen("This is a string");
        </pre>
        <u>Result:</u>
        <i>
        <?php 
echo strlen("This is a string");
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</b><br />
        <pre>
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$mystring = 'abc';
$findme   = 'a';
echo $pos = strpos($mystring, $findme);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows a text string to be capitalized</b><br />
        <pre>
strtoupper("Hello WORLD!")
        </pre>
        <u>Result:</u>
        <i>
        <?php 
echo strtoupper("Hello WORLD!")
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows you to transform a text string to lowercase</b><br />
        <pre>
$str = "Mary Had A Little Lamb and She LOVED It So";
strtolower($str);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
$str = "Mary Had A Little Lamb and She LOVED It So";
echo strtolower($str);
        ?>        
        </i>
    </div>

    <div style="margin-bottom:15px">
        <b>Execute the function that allows to obtain a text substring from the position</b><br />
        <pre>
substr("abcdef", 2, -1);
        </pre>
        <u>Result:</u>
        <i>
        <?php 
echo substr("abcdef", 2, -1);
        ?>        
        </i>
    </div>

</code>