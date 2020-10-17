<?php

use App\Autoloader;
use App\Tables\Film;
use App\Tables\Genre;
use App\Tables\Realisateur;

require_once '../src/Autoloader.php';
Autoloader::register();

$films = new Film();
$film = $films->findById($_GET['id']);
var_dump($film);

$genres = new Genre();
$listegenres = $genres->findAll();

$reals = new Realisateur();
$listereals = $reals->findAll();

//Si le formulaire a été submit, alors on insère les valeurs dans la base de données
if (!empty($_GET['id']) && isset($_POST['nomfilm']) && isset($_POST['anneereal']) &&
    isset($_POST['synopsis']) && isset($_POST['nomgenre']) &&
    isset($_POST['nomreal']) && isset($_POST['urlaffiche'])) {
    $films->updateFilm($_GET['id'],$_POST['nomfilm'], $_POST['anneereal'], $_POST['synopsis'], $_POST['nomgenre'], $_POST['nomreal'], $_POST['urlaffiche']);
}

$title = 'Ajouter un film';
?>

<div class="container">
    <?php if(isset($_GET['update']) && $_GET['update'] === '1'): ?>
    <p class="alert alert-success">Votre film a bien été modifié !</p>
    <?php endif ?>
    <h1>Ajouter un film</h1>
    <form class="mt-4 mb-5" method="post" action="index.php?p=updatefilms&id=<?= $film->id ?>&update=1">
        <div class="form-group">
            <label for="nomfilm">Nom du film</label>
            <input value="<?= $film->nomfilm ?>" type="text" class="form-control" id="nomfilm" name="nomfilm" placeholder="Jurassic Park, Star Wars ..." required>
        </div>
        <div class="form-group">
            <label for="anneereal">Année de sa réalisation</label>
            <input value="<?= $film->anneereal ?>" type="number" class="form-control" id="anneereal" name="anneereal" placeholder="1995, 2000 ..." required>
        </div>
        <div class="form-group">
            <label for="synopsis">Synopsis</label>
            <textarea class="form-control" id="synopsis"name="synopsis" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan, est ut facilisis suscipit, sapien lorem ..." required><?= $film->synopsis?></textarea>
        </div>
        <div class="form-group">
            <label for="nomgenre">Genre</label>
            <select class="form-control" id="nomgenre" name="nomgenre" required>
                <?php foreach($listegenres as $genre): ?>
                    <option value="<?= $genre->id ?>" <?php if ($genre->id === $film->genre_id): ?> <?= 'selected="selected"' ?> <?php endif ?>> <?= $genre->nomgenre ?></option>
                <?php endforeach ?>
            </select>
            <p class="font-weight-light">Le genre ne figure pas dans cette liste ?
                <a href="index.php?p=creategenre">Cliquez ici</a>
            </p>
        </div>
        <div class="form-group">
            <label for="nomreal">Réalisateur</label>
            <select class="form-control" id="nomreal" name="nomreal" required>
                <?php foreach($listereals as $real): ?>
                    <option value="<?= $real->id ?>" <?php if ($real->id === $film->real_id): ?> <?= 'selected="selected"' ?> <?php endif ?>><?= $real->nomreal . ' ' . $real->prenomreal ?></option>
                <?php endforeach ?>
            </select>
            <p class="font-weight-light">Le réalisateur ne figure pas dans cette liste ?
                <a href="index.php?p=createreal">Cliquez ici</a>
            </p>
        </div>
        <div class="form-group">
            <label for="urlaffiche">Affiche (URL)</label>
            <input value="<?= $film->urlaffiche?>" type="text" class="form-control" id="urlaffiche" name="urlaffiche" placeholder="https://placehold.it/250x250" required>
        </div>
        <button class="btn btn-dark" type="submit">Modifier</button>
    </form>
</div>
