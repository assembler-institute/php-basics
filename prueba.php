<?php
//VARIABLES
$text = "This is a text";

//constantes
define('PI', 3.14);

//Arrays
$semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
$letras = ['q', 'w', 'e', 'r', 't', 'y'];
$pato = ['nombre' => 'Jaimito', 'apellidos' => 'Donald McPato'];
$pato2 = [['nombre', 'Jorgito'], ['apellidos', 'Donald McPato']];
$pato3 = [['nombre' => 'Juanito'], ['apellidos' => 'Donald McPato']];
$edad = 68;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso</title>
</head>

<body>
    <h1>Repaso<h1>
            <section>
                <h2>VARIABLES<h2>
                        <h3><?php
                            echo $text . '<br />';

                            echo PI . '<br />';
                            ?></h3>
            </section>

            <section>
                <h2>ARRAYS<h2>
                        <h3> <?php
                                echo 'Dias de la semana ' . count($semana) . '<br />';

                                echo 'Ultimo dia ' . $semana[count($semana) - 1] . '<br />';

                                foreach ($semana as $dia) {
                                    echo '<li>' . $dia . '</li>';
                                };

                                sort($letras);
                                foreach ($letras as $ordenado) {
                                    echo ' ' . $ordenado . ' ';
                                }
                                echo '<br />';

                                rsort($letras);
                                foreach ($letras as $ordenado) {
                                    echo ' ' . $ordenado . ' ';
                                }
                                echo '<br />';

                                echo 'Pato1' . $pato['nombre'] . ' ' . $pato['apellidos'] . '<br />';

                                echo 'Pato2' . $pato2[0][1] . ' ' . $pato2[1][1] . '<br />';

                                echo 'Pato3' . $pato3[0]['nombre'] . ' ' . $pato3[1]['apellidos'] . '<br />';

                                ?></h3>
            </section>

            <section>
                <h2>CONDICIONALES<h2>
                        <h3><?php
                            if (gettype($text) == "string" xor $text == "tucutu") {
                                echo $text . ' es de tipo ' . gettype($text) . '<br />';
                            };

                            if ($edad < 18) {
                                echo 'Eres muy joven';
                            } else if ($edad > 65) {
                                echo 'Eres muy mayor';
                            } else {
                                echo 'Estas en la pomada de la vida';
                            }


                            ?></h3>
            </section>
</body>

</html>