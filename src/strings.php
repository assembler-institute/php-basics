<code>
<div style="padding-left: 1rem">
    
    <div style="padding-bottom: 3rem">
        <b>8.1 Print a text string</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
echo "I have a dog whose name is Lola."
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
echo "I have a dog whose name is Lola."
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.2 Print a text string that interpret variables.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
echo $myPetsName = "My dog´s name is Lola."
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
echo $myPetsName = "My dog´s name is Lola."
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.3 Concatenate a previously declared variable in a text string</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$myPetsName = "Lola";
echo $text = "My dog´s name is ${myPetsName}."
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$myPetsName = "Lola";
echo $text = "My dog´s name is ${myPetsName}."
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.4 Execute the function that allows you to replace text in a string - case sensitive.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("Run", "swim", "talk with friends");
$unhealthy = array("sleep until midday", "eat loads", "play videogames all day");
echo $newphrase = str_replace($healthy, $unhealthy, $phrase);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("Run", "swim", "talk with friends");
$unhealthy = array("sleep until midday", "eat loads", "play videogames all day");
echo $newphrase = str_replace($healthy, $unhealthy, $phrase);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.5 Execute the function that allows you to replace text in a string - without taking into account upper / lower case.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$myPetsName = "Lola";
echo $text = "My dog´s name is ${myPetsName}."
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("run", "swim", "talk with friends");
$unhealthy = array("sleep until midday", "eat loads", "play videogames all day");
echo $newphrase = str_ireplace($healthy, $unhealthy, $phrase);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.6 Execute the function that allows you to write a text N times.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
echo str_repeat("-=", 6);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
echo str_repeat("-=", 6);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.7 Execute the function that allows to obtain the length of a text string.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$myPetsName = "Lola";
echo strlen("This little piggy went to market, this little piggy stayed home, this little piggy had roast beef, this little piggy had none and this little piggy went wee wee wee all the way home.");
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
echo strlen("This little piggy went to market, this little piggy stayed home, this little piggy had roast beef, this little piggy had none and this little piggy went wee wee wee all the way home.");
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.8 Executes the function that allows to obtain the position of the first occurrence of a text within a text string.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
$textString = 'it is time to eat';
$findThis   = 'a';
echo $position = strpos($textString, $findThis);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
$textString = 'it is time to eat';
$findThis   = 'a';
echo $position = strpos($textString, $findThis);
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.9 Execute the function that allows a text string to be capitalized.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
echo strtoupper("I should already have gone to eat...");
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
echo strtoupper("I should already have gone to eat...")
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.10 Execute the function that allows you to transform a text string to lowercase</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
echo strtolower("I think my food is now cold...");
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
echo strtolower("I think my food is now cold...")
?>
    </i>
</div>

    <div style="padding-bottom: 3rem">
        <b>8.11 Execute the function that allows to obtain a text substring from the position.</b>
        <pre>
<em><u>code:</u></em>
            
            <span style="color: blue;">
echo substr("Lola barks. She wants foooood.", 2, -1);
            </span>
        </pre>
<em><u>Result:</u></em>
        <i>
            <?php
echo substr("Lola barks. She wants foooood.", 2, -1);
?>
    </i>
</div>

</div>
</code>