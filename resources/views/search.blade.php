<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>
    <link rel="stylesheet" href="/css/search.css">

</head>
<body>
    <div class="container">
        <h1>Results for your search: "{{$search_term}}"</h1>
        <h2>Results in the database of dogs:</h2>
            <ul>
            @foreach($results_animals as $animal)
                <li><a href="/animal-detail/{{$animal->id}}">{{$animal->name}}</a></li>
            @endforeach
            </ul>
        <h2>Results in the database of owners:</h2>
            <ul>
            @foreach($results_owners as $owner)
                <li><a href="/owner-detail/{{$owner->id}}">{{$owner->surname ? $owner->first_name.' '.$owner->surname : $owner->first_name.' '.$owner->surname}}</a></li>
            @endforeach
            </ul>
        <a class="home" href="/home">Home</a>
    </div>
</body>
</html>