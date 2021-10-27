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
        $b = true;
        $i = 58;
        $f = 9.8;
        $s = "Hello world!";
        $a = array("Juan", "Manolo", "Eusebio");
        $n = null;
        $o = new o();
        class o{
            public $name = "Jacob";
            public $last_name = "Fernandez";
        }

        print var_dump($b) . "<br/>";
        print var_dump($i) . "<br/>";
        print var_dump($f) . "<br/>";
        print var_dump($s) . "<br/>";
        print var_dump($a) . "<br/>";
        print var_dump($n) . "<br/>";
        print $o -> name ;
        print $o -> last_name ;
    ?>
</body>
</html>