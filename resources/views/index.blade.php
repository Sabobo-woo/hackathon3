<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('search')}}" method="get">
        <h3>Search forName:</h3>
        <input type="text" name="search" value="">
        <button type="submit">Search</button>
    </form>

    
    <form action="{{route('animals.create')}}" method="get">
        <button type="submit">Create a New Record</button>
    </form>
</body>
</html>