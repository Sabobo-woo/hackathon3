<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to our cute animal database</h1>
      <ul>
    <?php foreach($animals as $animal) : ?>
  
    <li><a href="/animal-detail/{{$animal->id}}"> <?= $animal->name ?></a>
       <ul>
        <li>Breed: <?= $animal->breed ?></li>
        <li>Owner Name: <?= $animal->owner->first_name?> <?= $animal->owner->surname?></li>
        <li><img src="/images/pets/<?= $animal->image->path?>" alt = "<?= $animal->name ?>"></li></li>
       </ul>
    </li>
    <?php endforeach; ?>
    </ul>

        <form action="{{route('search')}}" method="get">
        <h3>Search forName:</h3>
        <input type="text" name="search" value="">
        <button type="submit">Search</button>
    </form>

    <div style="width:10px; heigth:auto; display:flex; flex-direction:row">{{$animals->links()}}</div>

</body>
</html>