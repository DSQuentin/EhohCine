<?php

use App\Autoloader;
use App\Tables\Genre;

require_once '../src/Autoloader.php';
Autoloader::register();

$genres = new Genre();
$listegenres = $genres->findAll();

$title = 'Gestion des genres';
?>

<div class="container">
    <h1 class="mb-5">Gestion des genres</h1>
    <?php if (isset($_GET['delete']) && $_GET['delete'] === '1'): ?>
        <p class="alert alert-success">Votre genre a bien été supprimé !</p>
    <?php endif ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($listegenres as $genre): ?>
        <tr>
            <th scope="row"><?= $genre->id ?></th>
            <td><?= $genre->nomgenre ?></td>
            <td>
                <form action="index.php?p=deletegenres&id=<?= $genre->id ?>" method="post" onsubmit="return confirm('Voulez vraiment effectuer cette action?')">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
