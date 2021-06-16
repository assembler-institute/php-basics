<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
    <h3>Print a text string</h3>
    <pre>
        print("printed message")
    </pre>
    <u>Result:</u>
    <i>
        <?php
        print("printed message")
        ?>
    </i>
    </p>
    <p>
    <h3>Print a text string that interpret variables</h3>
    <pre>
        $oneVariable = "variable content";
        print($oneVariable);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $oneVariable = "variable content";
        print($oneVariable);
        ?>
    </i>
    </p>
    <p>
    <h3>Concatenate a previously declared variable in a text string</h3>
    <pre>
        print("${oneVariable}-more content");
    </pre>
    <u>Result:</u>
    <i>
        <?php
        print("${oneVariable}-more content");
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows you to replace text in a string (case sensitive)
    </h3>
    <pre>
        $bodyTag = str_replace("World", "User", "Hello World");
        print($bodyTag);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $bodyTag = str_replace("World", "User", "Hello World");
        print($bodyTag);
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
    </h3>
    <pre>
        $bodyTag = str_ireplace("world", "User", "Hello World");
        print($bodyTag);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $bodyTag = str_ireplace("world", "User", "Hello World");
        print($bodyTag);
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows you to write a text N times</h3>
    <pre>
        echo str_repeat("-=", 10);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        echo str_repeat("-=", 10);
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows to obtain the length of a text string</h3>
    <pre>
        echo strlen("Hello");
    </pre>
    <u>Result:</u>
    <i>
        <?php
        echo strlen("Hello");
        ?>
    </i>
    </p>
    <p>
    <h3>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</h3>
    <pre>
        echo stripos("Hello", "l");
    </pre>
    <u>Result:</u>
    <i>
        <?php
        echo stripos("Hello", "l");
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows a text string to be capitalized
    </h3>
    <pre>
        echo strtoupper("Hello");
    </pre>
    <u>Result:</u>
    <i>
        <?php
        echo strtoupper("Hello");
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows you to transform a text string to lowercase
    </h3>
    <pre>
        echo strtolower("HeLLo");
    </pre>
    <u>Result:</u>
    <i>
        <?php
        echo strtolower("HeLLo");
        ?>
    </i>
    </p>
    <p>
    <h3>Execute the function that allows to obtain a text substring from the position
    </h3>
    <pre>
        echo substr("abcdef", 0, -2);
    </pre>
    <u>Result:</u>
    <i>
        <?php
        echo substr("abcdef", 0, -2);
        ?>
    </i>
    </p>




</body>

</html>