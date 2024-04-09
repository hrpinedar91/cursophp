<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $arreglo = [
            'keyStr1' => 'lado',
            0 => 'ledo',
            'keyStr2' => 'lido',
            1 => 'lodo',
            2 => 'ludo'
        ];

        foreach ($arreglo as $key => $value) {
            echo $value . ", ";
        }
        echo "decirlo al revés lo dudo. <br>";

        foreach (array_reverse($arreglo) as $key => $value) {
            echo $value . ",";
        }
        echo "¡Qué trabajo me ha costado!";
    ?>
    
</body>
</html>