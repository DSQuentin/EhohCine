<?php

use App\Autoloader;
use App\Tables\Film;
use App\Tables\Genre;
use App\Tables\Realisateur;

require_once '../src/Autoloader.php';
Autoloader::register();

$films = new Film();

$genres = new Genre();
$listegenres = $genres->findAll();

$reals = new Realisateur();
$listereals = $reals->findAll();
if (isset($_POST['nomgenre'])){
    $genres->insertGenre($_POST['nomgenre']);
}
?>

<div class="container">
    <h1>Ajouter un genre</h1>
    <form class="mt-4 mb-5" method="post">
        <div class="form-group">
            <label for="nomgenre">Nom du genre</label>
            <input type="text" class="form-control" id="nomgenre" name="nomgenre" placeholder="Action, Comédie ...">
        </div>
        <div class="d-flex justify-content-between">
            <button class="btn btn-dark">Ajouter</button>
            <a href="/public/index.php?p=createfilm" class="btn btn-dark">Retour</a>
        </div>
    </form>
</div>
