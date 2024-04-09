<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taller 03 Laravel </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="py-8 mx-auto text-center flex flex-col items-center max-w-4xl">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Listado de  paises</h1>



@if(isset($sortedCountries) && isset($counter) &&
    isset($options['registros_a_mostrar']) && is_numeric($options['registros_a_mostrar']) &&
    isset($options['poblacion_minima']) && is_numeric($options['poblacion_minima']) &&
    isset($options['ordenar_por']) && is_string($options['ordenar_por']) &&
    isset($options['orden']) && is_string($options['orden']))

    <table class="table-auto">
        <thead class="bg-red-600">
        <tr class="text-white" >
            <th class="p-4">País</th>
            <th class="p-4">Capital</th>
            <th class="p-4">Moneda</th>
            <th class="p-4">Población</th>
            <th class="p-4">Descripción</th>
        </tr>
        </thead>
        <tbody class="">
        @foreach($sortedCountries as $key => $country)
            @if($counter < $options['registros_a_mostrar'])
                @if(($country['poblacion'] >= $options['poblacion_minima']))
                    <tr>
                        <td class="p-4">{{ ucfirst($key) }}</td>
                        <td class="p-4">{{ $country['capital'] }}</td>
                        <td class="p-4">{{ $country['moneda'] }}</td>
                        <td class="p-4">{{ preg_replace('/\./', "'", number_format($country['poblacion'], 0, ',', '.'), 1) }}</td>
                        <td class="p-4">{{ $country['descripcion'] }}</td>
                    </tr>
                    @php
                        $counter++;
                    @endphp
                @endif
            @else
                @break
            @endif
        @endforeach
        </tbody>
    </table>

@endif

</body>
</html>
