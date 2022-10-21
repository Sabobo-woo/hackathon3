<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?= $owner->first_name ?> <?= $owner->surname ?>
  </title>
  <link rel="stylesheet" href="/css/owner-detail.css">

</head>

<body>
    <h1>
        <?= $owner->first_name ?> <?= $owner->surname ?>
    </h1>

    <p>Email: </p>
    <p>Phone: </p>
    <p>Address: </p>

    <h2>Animals:</h4>
    <ol>
        <?php foreach ($pets as $pet) : ?>
            <li>
                <a href="/animal-detail/{{$pet->id}}"><?= $pet->name ?></a> (<?= $pet->species ?>) | <?= $pet->breed ?>, Age: <?= $pet->age ?>, Weight: <?= $pet->weight ?>
            </li>
            <br> <img src="http://www.hackathon3.test/images/pets/<?= $pet->path ?>" alt = "<?= $pet->name ?>">
        <?php endforeach ; ?>
    </ol>



</body>

</html>