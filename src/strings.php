<div>
    <h3>Working with Text Strings</h3>
    <div class="printStr">
        <h4>print a text string</h4>
        <h5>
            <?php
            // text string
            $myStr = "Hello, I am a Text String!";
            echo $myStr;
            ?>
        </h5>
    </div>
    <div class="interpretVar">
        <h4>sprintf() : print a text string that interprets variables</h4>
        <h5>
            <?php
            // printing a text string that interprets variables
            $number = 1;
            $useStr = "working with text strings";
            $format = "This is the %dst time of %s.";
            echo '$number = 1;<br>
    $useStr = "working with text strings";<br>
    $format = "This is the %dst time of %s.";<br>
    echo sprintf($format, $number, $useStr);
    <p>output : </p>';
            echo sprintf($format, $number, $useStr);
            ?>
        </h5>
    </div>
    <div class="concatStr">
        <h4>Concatenate a previously declared variable in a text string</h4>
        <h5>
            <?php
            // concatenating a variable in a text string
            echo '$myCountry = "South Korea";<br>
    $myCity = "Barcelona";<br>
    echo "I am from {$myCountry}. But I live in {$myCity}."; <p>output:</p>';
            $myCountry = "South Korea";
            $myCity = "Barcelona";
            echo "I am from {$myCountry}. But I live in {$myCity}.";
            ?>
        </h5>
    </div>
    <div class="replaceStr">
        <h4>str_replace() : replace a text in a string (case sensitive)</h4>
        <h5>
            <?php
            // replacing text in a string
            echo 'echo str_replace("X-mas","New year","Happy X-mas!"); <p>output:</p>';
            echo str_replace("X-mas", "New year", "Happy X-mas!");
            ?>
        </h5>
    </div>
    <div class="ireplaceStr">
        <h4>str_ireplace() : replace text in a string (case sensitive)</h4>
        <h5>
            <?php
            // replacing a text in a string
            echo 'str_ireplace("x-Mas","New year","Happy X-mas!"); <p>output:</p>';
            echo str_ireplace("x-Mas", "New year", "Happy X-mas!");
            ?>
        </h5>
    </div>
    <div class="repeatStr">
        <h4>str_repeat() : write a text N times</h4>
        <h5>
            <?php
            // repeating a text
            $myStr = "I am here!!";
            $repeatNumber = 5;
            echo '$myStr = "I am here!!";<br>
          $repeatNumber = 5;<br>
          str_repeat($myStr, $repeatNumber); <p>output:</p>';
            echo str_repeat($myStr . "<br>", $repeatNumber);
            ?>
        </h5>
    </div>
    <div class="strLength">
        <h4>strlen() : length of a text string</h4>
        <h5>
            <?php
            // getting the length of a text
            $myStr = "Show me the length of this string";
            echo '$myStr = "Show me the length of this string";<br>
          echo strlen($myStr); <p>output:</p>';
            echo strlen($myStr);
            ?>
        </h5>
    </div>
    <div class="characterPosition">
        <h4>strpos() : position of a character</h4>
        <h5>
            <?php
            // getting a position of a character in a string
            $myStr = "I live in Barcelona.";
            $myCharacter = "B";
            echo '$myStr = "I live in Barcelona.";<br>
          echo strpos($myStr, $myCharacter); <p>output:</p>';
            echo strpos($myStr, $myCharacter);
            ?>
        </h5>
    </div>
    <div class="strToUpperCase">
        <h4>strtoupper() : convert all characters to uppercase</h4>
        <h5>
            <?php
            // converting all characters to uppercase
            $myStr = "I live in Barcelona.";
            echo '$myStr = "I live in Barcelona.";<br>
          echo strtoupper($myStr); <p>output:</p>';
            echo strtoupper($myStr);
            ?>
        </h5>
    </div>
    <div class="strToLowerCase">
        <h4>strtolower() : convert all characters to uppercase</h4>
        <h5>
            <?php
            // converting all characters to uppercase
            $myStr = "I live in Barcelona.";
            echo '$myStr = "I live in Barcelona.";<br>
          echo strtolower($myStr); <p>output:</p>';
            echo strtolower($myStr);
            ?>
        </h5>
    </div>
    <div class="subString">
        <h4>substr() : convert all characters to uppercase</h4>
        <h5>
            <?php
            // getting a text substring from the position
            $myStr = "I live in Barcelona.";
            echo '$myStr = "I live in Barcelona.";<br>
          echo substr($myStr, 10); <p>output:</p>';
            echo substr($myStr, 10);
            ?>
        </h5>
    </div>
</div>