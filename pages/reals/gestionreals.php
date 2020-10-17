<?php

use App\Autoloader;
use App\Tables\Realisateur;

require_once '../src/Autoloader.php';
Autoloader::register();

$reals = new Realisateur();
$listereals = $reals->findAll();

$title = 'Gestion des réalisateurs';
?>

<div class="container">
    <h1 class="mb-5">Gestion des réalisateurs</h1>

    <?php if (isset($_GET['delete']) && $_GET['delete'] === '1'): ?>
    <p class="alert alert-success">Votre réalisateur a bien été supprimé !</p>
    <?php endif ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Année de naissance</th>
                <th scope="col">Biographie</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listereals as $real): ?>
            <tr>
                <th scope="row"><?= $real->id ?></th>
                <td><?= $real->nomreal ?></td>
                <td><?= $real->prenomreal ?></td>
                <td><?= $real->naissancereal ?></td>
                <td>
                    <?php
                    $string = $real->biographie;
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
                <form action="index.php?p=deletereals&id=<?= $real->id ?>" method="post" onsubmit="return confirm('Voulez vraiment effectuer cette action?')">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
