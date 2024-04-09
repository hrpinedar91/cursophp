<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Students</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                      

                        <?php                            
                            require_once 'models/Student.php';

                            use src\models\Student;

                            $student1 = new Student('Juan', 'Perez', 20, 123456);
                            $student2 = new Student('Ana', 'Gomez', 21, 123456);
                            $student3 = new Student('Carlos', 'Lopez', 22, 123456);


                            $students = [$student1, $student2, $student3];


                            foreach ($students as $student) {
                                echo "<tr>";
                                echo "<td>" . $student->getNombre() . "</td>";
                                echo "<td>" . $student->getApellido() . "</td>";
                                echo "<td>" . $student->getEdad() . "</td>";
                                echo "<td>" . $student->getTelefono() . "</td>";
                                echo "</tr>";
                            }
                            ?>
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>