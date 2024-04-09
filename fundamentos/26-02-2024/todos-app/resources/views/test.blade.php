<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @isset($name)
        <h1>soy la pagina de test de blade {{$name}}</h1>

    @endisset

    <ul>
        @foreach($students as $student)
            <li>{{$student}}</li>
        @endforeach
    </ul>

   
</body>
</html>