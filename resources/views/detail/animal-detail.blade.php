<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?= $animal->name ?>
  </title>
  <link rel="stylesheet" href="/css/animal-detail.css">

</head>

<body>
    <h1>
        <?= $animal->name ?> (<?= $animal->species ?>)
    </h1>
    <h4>Owner: <a href="/owner-detail/{{$owner->id}}"><?= $owner->first_name ?> <?= $owner->surname ?></a></h4>
    
    <p>Breed: <?= $animal->breed ?></p>
    <p>Age: <?= $animal->age ?></p>
    <p>Weight: <?= $animal->weight ?></p>
    <img src={{ asset("/images/pets/".$animal->path) }} alt = "<?= $animal->name ?>">


    <form action='{{route('animals.edit', $animal->id)}}' method="get">
      @csrf
      <button type='sumbit'>Edit</button>
    </form>
</body>

</html>