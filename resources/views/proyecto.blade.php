<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer proyecto</title>
</head>
<body>
    <h1>Mi primer proyecto de Laravel</h1>
    <h2>Datos personales</h2>
    <h3>
        <ul>
            <li>Nombre: {{ $nombre }}</li>
            <li>ID: {{ $id }}</li>
        </ul>
    </h3>
    
    <h2>Hobbies</h2>
    @foreach ($hobbies as $hobby)
        <p>{{ $hobby }}</p>        
    @endforeach


    <h2>TABLA DEL 7</h2>
    @for ($i = 0; $i <= 10; $i++)
        <p>7 x {{ $i }} = {{ 7 * $i }}</p>
    @endfor

</body>
</html>