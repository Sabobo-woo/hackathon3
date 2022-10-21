<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $animal->id ? 'Edit record' : 'Create record'}}</title>
</head>
<body>
    <h1>{{ $animal->id ? 'Edit record' : 'Create record'}}</h1>

    @include('common/messages')

    @if ($animal->id) 
        <form action='{{route('animals.update', $animal->id)}}' method="post">
        @method('PUT')

    @else
        <form action='{{route('animals.store')}}' method="post">
    @endif
            @csrf
        
            <label>Image Id:</label><br>
            <input type="text" name="image_id" value="{{ old('image_id', $animal->image_id) }}"><br>

            <label>Owner Id:</label><br>
            <input type="text" name="owner_id" value="{{ old('owner_id', $animal->owner_id) }}"><br>

            <label>Name:</label><br>
            <input type="text" name="name" value="{{ old('name', $animal->name) }}"><br>

            <label>Species:</label><br>
            <input type="text" name="species" value="{{ old('species', $animal->species) }}"><br>

            <label>Breed:</label><br>
            <input type="text" name="breed" value="{{ old('breed', $animal->breed) }}"><br>

            <label>Age:</label><br>
            <input type="text" name="age" value="{{ old('age', $animal->age) }}"> years<br>

            <label>Weight:</label><br>
            <input type="text" name="weight" value="{{ old('weight', $animal->weight) }}"> kg<br>
            <br>
            <button type='sumbit'>Save</button>

        </form>
    
    @if ($animal->id) 
        <form action="{{route('animals.delete', $animal->id)}}" method='post'>
            @csrf
            @method('DELETE')
            <br>
            <button type='sumbit'>Delete</button>
        </form>
    @endif

</body>
</html>