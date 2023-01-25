<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            @foreach ($trains as $train)

            <li>
                <a href="/train">Treni</a>
                <h4>{{ $train['Azienda'] }} - {{ $train['Stazione di Partenza'] }} - {{ $train['Stazione di Arrivo'] }} - {{ $train['Orario di Partenza'] }} </h4>
            </li>

            @endforeach
        </ul>
    </div>
</body>
</html>
