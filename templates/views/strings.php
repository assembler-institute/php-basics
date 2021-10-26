
    <!-- print a text string -->
    <article class="article">
        <h3>1. Boolean</h3>
        <h5>example :</h5>
<pre>
print "Hello world!";
</pre>
        <h5>result :</h5>
        <?php
            print "Hello world!";
        ?>
    </article>

    <!-- print a text string that interpret variables -->
    <article class="article">
        <h3>2. Print a text string that interpret variables</h3>
        <h5>example :</h5>
<pre>
$txt1 = "Learn PHP";
print $txt1;
</pre>
        <h5>result :</h5>
        <?php
            $txt1 = "Learn PHP";
            print $txt1;
        ?>
    </article>

    <!-- concatenate a previously declared variable in a text string -->
    <article class="article">
        <h3>3. Concatenate a previously declared variable in a text string</h3>
        <h5>example :</h5>
<pre>
$string1 = "Learn PHP "
$string2 = "at school";
echo $string1.$string2;
</pre>
        <h5>result :</h5>
        <?php
            $string1 = "Learn PHP ";
            $string2 = "at school";
            echo $string1.$string2;
        ?>
    </article>

    <!-- execute the function that allows you to replace text in a string (case sensitive)  -->
    <article class="article">
        <h3>4. Execute the function that allows you to replace text in a string (case sensitive)</h3>
        <h5>example :</h5>
<pre>
echo str_replace("world", "Dolly", "Hello world!"); 
</pre>
        <h5>result :</h5>
        <?php
            echo str_replace("world", "Dolly", "Hello world!"); 
        ?>
    </article>

    <!-- execute the function that allows you to replace text in a string (without taking into account upper / lower case)  -->
    <article class="article">
        <h3>5. Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</h3>
        <h5>example :</h5>
<pre>
echo str_ireplace("WORLD", "Dolly", "Hello world!"); 
</pre>
        <h5>result :</h5>
        <?php
            echo str_ireplace("WORLD", "Dolly", "Hello world!");
        ?>
    </article>

    <!-- execute the function that allows you to write a text N times  -->
    <article class="article">
        <h3>6. Execute the function that allows you to write a text N time</h3>
<pre>
str_repeat(string $string, int $times): string
</pre>
        <h5>example :</h5>
<pre>
echo str_repeat("beef ", 10);
</pre>
        <h5>result :</h5>
        <?php
            echo str_repeat("beef ", 10);
        ?>
    </article>

    <!-- execute the function that allows to obtain the length of a text string  -->
    <article class="article">
        <h3>7. Execute the function that allows to obtain the length of a text string</h3>
<pre>
strlen(string $string): int
</pre>       
        <h5>example :</h5>
<pre>
$str = ' ab cd ';
echo strlen($str);
</pre>
        <h5>result :</h5>
        <?php
            $str = ' ab cd ';
            echo strlen($str);
        ?>
    </article>

    <!-- obtain the position of the first occurrence of a text within a text string  -->
    <article class="article">
        <h3>8. Obtain the position of the first occurrence of a text within a text string</h3>
        <p>The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</p>
<pre>
strpos(string $haystack, string $needle, int $offset = 0): int|false
</pre>       
        <h5>example :</h5>
<pre>
echo strpos("Hello world!", "world")
</pre>
        <h5>result :</h5>
        <?php
            echo strpos("Hello world!", "world")
        ?>
    </article>

    <!-- function that allows a text string to be capitalized  -->
    <article class="article">
        <h3>9. Function that allows a text string to be capitalized</h3>
        <p>Make a string uppercase</p>
<pre>
strtoupper(string $string): string
</pre>       
        <h5>example :</h5>
<pre>
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str;
</pre>
        <h5>result :</h5>
        <?php
            $str = "Mary Had A Little Lamb and She LOVED It So";
            $str = strtoupper($str);
            echo $str;
        ?>
    </article>

    <!-- function that allows a text string to be lowercase  -->
    <article class="article">
        <h3>9. Function that allows a text string to lowercase</h3>
<pre>
strtolower(string $string): string
</pre>       
        <h5>example :</h5>
<pre>
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str;
</pre>
        <h5>result :</h5>
        <?php
            $str = "Mary Had A Little Lamb and She LOVED It So";
            $str = strtolower($str);
            echo $str;
        ?>
    </article>

    <!-- obtain a text substring from the position -->
    <article class="article">
        <h3>10. Obtain a text substring from the position</h3>
<pre>
substr(string $string, int $offset, ?int $length = null): string
</pre>       
        <h5>example :</h5>
<pre>
echo substr('abcdef', 1, 3);
echo substr('abcdef', -1, 1)
</pre>
        <h5>result :</h5>
        <?php
            echo substr('abcdef', 1, 3);
            echo "<br>";
            echo substr('abcdef', -1, 1)
        ?>
    </article>
