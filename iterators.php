<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i = 0; $i < 3; $i++){
            print "<p>Hello world!</p>";
        }

        $matriz = ["Hello", "world", "!!!"];
        print "<pre>\n";
        print_r($matriz);
        print "</pre>\n";
        foreach ($matriz as $valor) {
            print "<p>$valor</p>\n";
        }

        $a = 0;
        while ($a < 5) {
            print "<p>$a</p>\n";
            $a++;
        }

        $a = 0;
        do {
            print "<p>$a</p>\n";
            $a++;
        } while ($a < 3)

    ?>
</body>
</html>