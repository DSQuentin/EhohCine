<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$films = new Film();
$listefilms = $films->findAll();

$title = 'Gestion des films';
?>
<div class="container mb-5">
    <h1 class="mb-5">GESTION FILMS</h1>

    <?php if(isset($_GET['delete']) && $_GET['delete'] === '1'): ?>
        <p class="alert alert-success">Votre film a bien été supprimé !</p>
    <?php elseif (isset($_GET['delete']) && $_GET['delete'] === '2'): ?>
        <p class="alert alert-success">Votre réalisateur a bien été supprimé !</p>
    <?php elseif (isset($_GET['delete']) && $_GET['delete'] === '3'): ?>
        <p class="alert alert-success">Votre genre a bien été supprimé !</p>
    <?php endif ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom (année)</th>
            <th scope="col">Réalisateur</th>
            <th scope="col">Genre</th>
            <th scope="col">Synopsis</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listefilms as $film): ?>
            <tr>
                <th scope="row"><?= $film->id ?></th>
                <td><?= $film->nomfilm . ' (' . $film->anneereal . ')' ?></td>
                <td><?= $film->nomreal . ' ' . $film->prenomreal ?></td>
                <td><?= $film->nomgenre ?></td>
                <td>
                    <?php
                    $string = $film->synopsis;
                    $max = 20; // or 200, or whatever
                    if(strlen($string) > $max) {
                        // find the last space < $max:
                        $shorter = substr($string, 0, $max+1);
                        $string = substr($string, 0, strrpos($shorter, ' ')).' ...';
                    }
                    echo $string;
                    ?>
                </td>
                <td>
                    <form action="/public/index.php?p=deletefilms&id=<?= $film->id ?>" method="post" onsubmit="return confirm('Voulez vraiment effectuer cette action?')">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</div>

