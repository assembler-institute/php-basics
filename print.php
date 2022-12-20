<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Print and Echo</title>
</head>
<body>
    <h1>Print.php</h1>
    <?php 
        $name = 'Jose';
        $surname = 'Torres';
        echo '<p>Display variables with <b>echo</b> statement: ' . $name . " " .$surname .'</p>';

        print '<p> Display variable with <b>print</b> statement: '. $name .'</p>';
        echo '<hr>';
        echo '<p>Show nested array with <b>print_r</b> statement</p>';
        echo '<pre>';
        $compra = array ('verdura' => array ('pimiento', 'calabaza', 'berengena'), 'fruta' => array ('pera', 'manzana', 'uvas'));
        print_r($compra);
        echo '</pre>';
    ?>
</body>
</html>
