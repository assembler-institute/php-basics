<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h4>Arithmetic operators</h4>
        <div>
            <div>
                <?php
                echo "2+2: ";
                $sum = 2 + 2;
                echo $sum;
                ?>
            </div>
            <div>
                <?php
                echo "2-2: ";
                $subtraction = 2 - 2;
                echo $subtraction;

                ?>
            </div>
            <div>
                <?php
                echo "2*2: ";
                $product = 2 * 2;
                echo $product;
                ?>
            </div>
            <div>
                <?php
                echo "2/2: ";
                $division = 2 / 2;
                echo $division;
                ?>
            </div>
            <div>
                <?php
                echo "2%2: ";
                $remainder = 2 % 2;
                echo $remainder;
                ?>
            </div>
        </div>

        <h4> Comparison operators</h4>
        <div>
            <div>
                <?php
                echo "2==2: ";
                echo var_dump(2 == 2);
                ?>
            </div>
            <div>
                <?php
                echo "2!=2: ";
                echo var_dump(2 != 2);

                ?>
            </div>
            <div>
                <?php
                echo "2<2: ";
                echo var_dump(2 < 2);
                ?>
            </div>
            <div>
                <?php
                echo "2>2: ";
                echo var_dump(2 > 2);
                ?>
            </div>
            <div>
                <?php
                echo "2<=2: ";
                echo var_dump(2 <= 2);
                ?>
            </div>
            <div>
                <?php
                echo "2>=2: ";
                echo var_dump(2 >= 2);
                ?>
            </div>
        </div>

        <h4> Logical operators</h4>
        <!-- Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor -->
        <div>
            <div>
                <?php
                echo "true && false: ";
                echo var_dump(true && false);
                ?>
            </div>
            <div>
                <?php
                echo "true and false: ";
                echo var_dump(true and false);
                ?>
            </div>
            <div>
                <?php
                echo "true||false: ";
                echo var_dump(true || false);
                ?>
            </div>
            <div>
                <?php
                echo "true or false: ";
                echo var_dump(true or false);
                ?>
            </div>
            <div>
                <?php
                echo "!true: ";
                echo var_dump(!true);
                ?>
            </div>
            <div>
                <?php
                echo "true xor false: ";
                echo var_dump(true xor false);
                ?>
            </div>
        </div>
    </div>
</body>

</html>