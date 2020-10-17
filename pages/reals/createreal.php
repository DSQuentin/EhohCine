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


if (isset($_POST['nomreal']) && isset($_POST['prenomreal']) && isset($_POST['naissancereal']) && isset($_POST['biographie']) && isset($_POST['urlphoto'])){
    $reals->insertReal($_POST['nomreal'],$_POST['prenomreal'], $_POST['naissancereal'], $_POST['biographie'], $_POST['urlphoto'] );
}

$title = 'Ajouter un réalisateur';
?>

<div class="container">
    <?php if(isset($_GET['create']) && $_GET['create'] === '1'): ?>
        <p class="alert alert-success">Votre réalisateur a bien été crée !</p>
    <?php endif ?>
    <h1>Ajouter un réalisateur</h1>
    <form class="mt-4 mb-5" method="post" action="index.php?p=createreal&create=1">
        <div class="form-group">
            <label for="nomreal">Nom du réalisateur</label>
            <input type="text" class="form-control" id="nomreal" name="nomreal" placeholder="John, Stanley">
        </div>
        <div class="form-group">
            <label for="prenomreal">Prénom du réalisateur</label>
            <input type="text" class="form-control" id="prenomreal"name="prenomreal" placeholder="Doe, Kubrick">
        </div>
        <div class="form-group">
            <label for="naissancereal">Année de naissance</label>
            <input type="number" class="form-control" id="naissancereal" name="naissancereal" placeholder="1995, 2000 ...">
        </div>
        <div class="form-group">
            <label for="biographie">Biographie</label>
            <textarea class="form-control" id="biographie" name="biographie" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan, est ut facilisis suscipit, sapien lorem ..."></textarea>
        </div>
        <div class="form-group">
            <label for="urlphoto">Photo (URL)</label>
            <input type="text" class="form-control" id="urlphoto" name="urlphoto" placeholder="https://placehold.it/250x250">
        </div>
        <div class="d-flex justify-content-between">
            <button class="btn btn-dark">Ajouter</button>
            <a href="index.php?p=gestionreals" class="btn btn-dark">Retour</a>
        </div>
    </form>
</div>
