<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>

    <div class="header">
        <h1>St. Hector's Veterinary Clinic</h1>
        
        <div class="search">
            <form action="{{route('search')}}" method="get">
                <input type="text" name="search" value="">
                <button type="submit">Search</button>
            </form>           
        </div>
    </div>

    <div class="create">
        <form action="{{route('animals.create')}}" method="get">
            <button type="submit">Create a New Record</button>
        </form>
    </div>

    <div class="animals">
        <?php foreach($animals as $animal) : ?>
            <div class="animal">
                <h4><a href="/animal-detail/{{$animal->id}}"> <?= $animal->name ?> </a></h4>
                    <p>Breed: <?= $animal->breed ?></p>
                    <p>Owner: 
                        <a href="/owner-detail/{{$animal->owner->id}}">
                            <?= $animal->owner->first_name?> <?= $animal->owner->surname?>
                        </a>

                    </p>
                    @if ($animal->image)
                    <img src="/images/pets/<?= $animal->image->path?>" alt = "<?= $animal->name ?>">
                    @endif



            </div>
        <?php endforeach; ?>
    </div>

    <div class="footer">
        <div>{{$animals->links()}}</div>
    </div>
    


</body>
</html>