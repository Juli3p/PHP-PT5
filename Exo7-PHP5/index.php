<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 5</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid bg-info">
      <div class="container">
        <h1 class="display-3">Exercices-07</h1>
        <p class="lead">PHP-Pt4</p>

      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mb-3">
    <!-- Début du php -->
     <?php
     // Définition d'un tableau associatif avec des clefs et des valeur associées
     $depar = array(
       // clef => valeur
       02 => 'Aisne',
       59 => 'Nord',
       60 => 'Oise',
       62 => 'Pas-de-Calais',
       80 => 'Somme',
     );
     $depar[51] = 'Marne';
     echo 'Nouvel élément du tableau : '.$depar[51];
      ?>
</div>
</body>
</html>
