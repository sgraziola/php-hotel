<?php

//Partiamo da questo array di hotel.Stampare tutti i nostri hotel con tutti i dati disponibili.

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


/* foreach ($hotels as $hotel) {
    echo $hotel['name'] . '<br>';
    echo $hotel['description'] . '<br>';
    echo $hotel['parking'] . '<br>';
    echo $hotel['vote'] . '<br>';
    echo $hotel['distance_to_center'] . '<br>';
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOLEAN HOTELS</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: cadetblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="my-5 pb-3 text-center">I MIGLIORI BOOLEAN HOTELS</h1>
        <form action="index.php" method="get">
            <div class="mb-3">
                <label for="hotel_name" class="form-label">Cerca per nome:</label>
                <input type="text" class="form-control" id="hotel_name" name="hotel_name">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Cerca per punteggio:</label>
                <input type="number" class="form-control" id="rating" name="rating">
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="parking">Vuoi il parcheggio?</label>
                <input type="checkbox" class="form-check-input" id="parking" name="parking">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="row row-cols-3 gy-3">
            <?php foreach ($hotels as $hotel) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nome: <?= $hotel['name'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Chi siamo: <?= $hotel['description'] ?></h6>
                            <p class="card-text">Parcheggio: <?php if ($hotel['parking']) {
                                                                    echo 'Disponibile';
                                                                } else {
                                                                    echo 'Non disponibile';
                                                                } ?>
                            </p>
                            <p class="card-text">Punteggio: <?= $hotel['vote'] ?> / 5 </p>
                            <p class="card-text">Distanza dal centro: <?= $hotel['distance_to_center'] ?> km </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Boostrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>