<?php

include 'models/Toy.php';
include 'models/Food.php';
include 'models/Acquarium.php';
include 'models/Cages.php';
include 'models/Leash.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Pet Store</title>
</head>
<body>
  <h1>PET STORE</h1>
  <div class="container">
    <div class="card-wrapper">
      <?php

      $toy = new Toy("Osso di gomma", 9.99, "Cani");
      $toy->stampCard();

      $Food = new Toy("Croccantini XXL", 19.99, "Cani");
      $Food->stampCard();

      $Acquarium = new Toy("Acquario 200x90x50", 319.99, "Pesci");
      $Acquarium->stampCard();

      $Cages = new Toy("Gabbia per Canarini", 29.99, "Uccelli");
      $Cages->stampCard();

      $Leash = new Toy("Gunzaglio", 9.99, "Cani");
      $Leash->stampCard();


      ?>
    </div>
  </div>
  
</body>
</html>