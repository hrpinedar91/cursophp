<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<?php
    $productos = [
        [
            'nombre' => 'Producto 1',
            'precio' => 10000,
            'detalles' => [
                'disponibilidad' => true,
                'reseñas' => ['Buena calidad', 'Buen precio']
            ]
        ],
        [
            'nombre' => 'Producto 2',
            'precio' => 20000,
            'detalles' => [
                'disponibilidad' => false,
                'reseñas' => ['No disponible actualmente']
            ]
        ],
        [
            'nombre' => 'Producto 3',
            'precio' => 30000,
            'detalles' => [
                'disponibilidad' => true,
                'reseñas' => ['Excelente opción']
            ]
        ]
    ];

    foreach ($productos as $producto) {
        if ($producto['detalles']['disponibilidad']) {
            echo "Nombre: " . $producto['nombre'] . ", Precio: $" . $producto['precio'] . "\n";
        }
    }
?>
    
</body>
</html>

