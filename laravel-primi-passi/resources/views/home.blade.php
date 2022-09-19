<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First approach w/laravel</title>
</head>

<body>
    <header>
        <ul>
            @foreach($items as $item)
            <li>{{$item}}</li>
            @endforeach
        </ul>
    </header>

    <h1> {{ $hello }}</h1>
</body>

</html>