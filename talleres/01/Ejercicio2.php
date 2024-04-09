<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<?php

$empleados = array(
    "Harold" => array("salario" => 50000, "fechaContratacion" => "2024-06-01", "departamento" => "Frontend"),
    "Juanes" => array("salario" => 60000, "fechaContratacion" => "2024-05-15", "departamento" => "Backend"),
    "Carlos" => array("salario" => 70000, "fechaContratacion" => "2024-03-23", "departamento" => "IT")
);


foreach ($empleados as $nombre => $info) {   
    echo "El salario de $nombre es {$info['salario']}.\n";
}
?>
    
</body>
</html>

