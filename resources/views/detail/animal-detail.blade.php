<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?= $animal->name ?>
  </title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>
    <h1>
        <?= $animal->name ?> (<?= $animal->species ?>)
    </h1>
    <h4>Owner: <a href=""><?= $owner->first_name ?> <?= $owner->surname ?></a></h4>
    
    <p>Breed: <?= $animal->breed ?></p>
    <p>Age: <?= $animal->age ?></p>
    <p>Weight: <?= $animal->weight ?></p>
    <img src="http://www.hackathon3.test/images/pets/<?= $animal->path ?>" alt = "<?= $animal->name ?>">


</body>

</html>