<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css')?>">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" <?= url('css/style.css')?>">
    <title>Pokedex</title>
</head>

<body>
    <header>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light navigation">
            <div class="container-fluid">
            <div class="droite">
                <a class="navbar-brand" href="<?= route('home') ?>">Pokédex</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= route('home') ?>">Liste </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= route('types')?>">Types</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <div>
</hearder>