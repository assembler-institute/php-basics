<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/css/main.css" rel="stylesheet" />
    <title>Iterators</title>
</head>

<body>
    <h2 class="header"> For Loop - List </h2>
    <ul>
        <?php
        $products = array('Milk', 'Bread', 'Eggs', 'Cheese');
        for ($i = 0; $i < count($products); $i++) {
            echo "<li>$products[$i]</li>";
        }
        ?>
    </ul>
    <h2 class="header">ForEach Loop - Lis </h2>
    <ul>
        <?php
        $products = array('Soda', 'Puddin', 'Water', 'Sugar');
        foreach ($products as $product) {
            print "<li>$product</li>";
        }
        ?>
    </ul>

    <h2 class="header">While Loop - Lis </h2>
    <ul>
        <?php
        $products = array('Soda', 'Puddin', 'Water', 'Sugar');
        $i = 0;
        while ($i < count($products)) {
            print "<li>$products[$i]</li>";
            $i++;
        }
        ?>
    </ul>

    <h2 class="header">Do While Loop - List</h2>
    <ul>
        <?php
        $products = array('Soda', 'Puddin', 'Water', 'Sugar');
        $i = 0;
        do {
            if ($products[$i] === "Soda") {
                print "<li><strong> $products[$i] </strong></li>";
            } else {
                print "<li> $products[$i] </li>";
            }
            $i++;
        } while ($i < count($products));

        print "<hr>";

        for ($i = 0; $i < count($products); $i++) {
            print "<li> $products[$i] </li>";
        };

        print "<hr>";

        foreach ($products as $product) {
            print "<li> 🎁 $product</li>";
        };

        ?>
    </ul>



</body>

</html>