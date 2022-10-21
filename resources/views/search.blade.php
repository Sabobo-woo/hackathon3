<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>
</head>
<body>
    <h1>Results for your search:{{$search_term}}</h1>
    <h2>Results in the database of dogs:</h2>
        <ul>
        @foreach($results_animals as $animal)
            <li>{{$animal->name}}</li>
        @endforeach
        </ul>
    <h2>Results in the database of owners:</h2>
        <ul>
        @foreach($results_owners as $owner)
            <li>{{$owner->surname ? $owner->first_name.' '.$owner->surname : $owner->first_name.' '.$owner->surname}}</li>
        @endforeach
        </ul>
</body>
</html>