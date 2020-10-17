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

var_dump($_POST);


if (isset($_POST['nomfilm']) && isset($_POST['annereal']) &&
    isset($_POST['synopsis']) && isset($_POST['nomgenre']) &&
    isset($_POST['nomreal']) && isset($_POST['urlaffiche'])){
        $films->insertFilm($_POST['nomfilm'], (int)$_POST['annereal'], $_POST['synopsis'], (int)$_POST['nomgenre'],(int)$_POST['nomreal'], $_POST['urlaffiche']);
}

$title = 'Ajouter un film';
?>

<div class="container">
    <?php if(isset($_GET['create']) && $_GET['create'] === '1'): ?>
    <p class="alert alert-success">Votre film a bien été crée !</p>
    <?php endif ?>
    <h1>Ajouter un film</h1>
    <form class="mt-4 mb-5" method="post" action="/public/index.php?p=createfilm&create=1">
        <div class="form-group">
            <label for="nomfilm">Nom du film</label>
            <input type="text" class="form-control" id="nomfilm" name="nomfilm" placeholder="Jurassic Park, Star Wars ..." required>
        </div>
        <div class="form-group">
            <label for="anneereal">Année de sa réalisation</label>
            <input type="number" class="form-control" id="anneereal" name="anneereal" placeholder="1995, 2000 ..." required>
        </div>
        <div class="form-group">
            <label for="synopsis">Synopsis</label>
            <textarea class="form-control" id="synopsis"name="synopsis" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan, est ut facilisis suscipit, sapien lorem ..." required></textarea>
        </div>
        <div class="form-group">
            <label for="nomgenre">Genre</label>
            <select class="form-control" id="nomgenre" name="nomgenre" required>
                <?php foreach($listegenres as $genre): ?>
                    <option value="<?= $genre->id ?>"><?= $genre->nomgenre ?></option>
                <?php endforeach ?>
            </select>
            <p class="font-weight-light">Le genre ne figure pas dans cette liste ?
                <a href="/public/index.php?p=creategenre">Cliquez ici</a>
            </p>
        </div>
        <div class="form-group">
            <label for="nomreal">Réalisateur</label>
            <select class="form-control" id="nomreal" name="nomreal" required>
                <?php foreach($listereals as $real): ?>
                    <option value="<?= $real->id ?>"><?= $real->nomreal . ' ' . $real->prenomreal ?></option>
                <?php endforeach ?>
            </select>
            <p class="font-weight-light">Le réalisateur ne figure pas dans cette liste ?
                <a href="/public/index.php?p=createreal">Cliquez ici</a>
            </p>
        </div>
        <div class="form-group">
            <label for="urlaffiche">Affiche (URL)</label>
            <input type="text" class="form-control" id="urlaffiche" name="urlaffiche" placeholder="https://placehold.it/250x250" required>
        </div>
        <button class="btn btn-dark" type="submit">Ajouter</button>
    </form>
</div>
