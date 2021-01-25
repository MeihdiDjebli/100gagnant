<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Le 💯 gagnant</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">

</head>

<body>

<div class="d-flex justify-content-center mt-5 mb-3">
    <h1>Le 💯 gagnant</h1>
</div>

<div class="d-flex justify-content-center mb-3">
    <div class="d-flex justify-content-around col-5 col-md-3">
        <div class="try col-5">
            <i class="bi bi-hand-index"></i>
            0 <!-- nombre de tour de la partie en cours -->
        </div>
        <div class="try col-5">
            <i class="bi bi-hand-thumbs-up"></i>
            0 <!-- meilleur nombre de tour (le plus bas) du joueur -->
        </div>
    </div>
</div>

<?php
$piocher = isset($_GET['action']) && $_GET['action'] === 'piocher';

if ($piocher) { // le joueur pioche
    $valeursPossibles = [5, 10, 20, 50];
    $jeton = $valeursPossibles[array_rand($valeursPossibles)];
}

if ($piocher) { // on affiche la valeur du jeton pioché ?>
    <div class="d-flex justify-content-center mb-1">
        <div class="alert alert-success">
            Vous avez pioché un jeton avec la valeur <?= $jeton ?>.
        </div>
    </div>
<?php } ?>

<div class="d-flex justify-content-center mb-2">
    <div class="score-container">
        <h1 class="display-4">0</h1> <!-- total des jetons possédés par le joueur -->
    </div>
</div>

<div class="d-flex justify-content-center mb-2">
    <div class="d-flex justify-content-around">
        <a class="btn btn-primary mr-1" href="/?action=piocher">
            <i class="bi bi-plus-square"></i> Piocher
        </a>
        <a class="btn btn-danger" href="/">
            <i class="bi bi-dash-square"></i> Défausser
        </a>
    </div>
</div>

<div class="d-flex justify-content-around">
    <a class="btn btn-secondary" href="/">Réinitialiser</a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>

</body>

</html>