<!-- Crear un arreglo asociativo llamado $estudiantes donde cada clave es el nombre de un
estudiante y el valor es un arreglo con las calificaciones de ese estudiante en diferentes
asignaturas. Calcular el promedio de calificaciones para cada estudiante y luego mostrar
al estudiante con el promedio más alto. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
<?php
    $estudiantes = array(
        "Juan" => array(85, 90, 78),
        "Ana" => array(90, 92, 88),
        "Carlos" => array(80, 82, 84)
    );
    $estudianteConPromedioMasAlto = "";
    $promedioMasAlto = 0;


foreach ($estudiantes as $nombre => $calificaciones) {
   
    $promedio = array_sum($calificaciones) / count($calificaciones);

    if ($promedio > $promedioMasAlto) {
        $estudianteConPromedioMasAlto = $nombre;
        $promedioMasAlto = $promedio;
    }
}


echo "El estudiante con el promedio más alto es $estudianteConPromedioMasAlto con un promedio de $promedioMasAlto.";
?>



    

</body>
</html>