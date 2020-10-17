<?php

use App\Autoloader;
use App\Tables\Film;
use App\Tables\Realisateur;

require_once '../src/Autoloader.php';
Autoloader::register();

$films = new Film();
//La variable listefilm contient un tableau des films dont l'id du réalisateur correspond a l'id de $_GET['id']
$listefilm = $films->findByRealId($_GET['id']);

$reals = new Realisateur();
//La variable real contient le réalisateur correspondant a l'id de $_GET['id']
$real = $reals->findRealById($_GET['id']);

$title = 'Ehoh Ciné | ' . $real->nomreal;

?>
<div class="container d-flex bg-light rounded p-4 shadow-sm">
    <img class="rounded shadow-sm" src="<?= $real->urlphoto ?>" alt="<?= $real->nomreal . ' ' . $real->prenomreal ?>" style="height: 350px">
    <div class="ml-4">
        <h1><?= $real->nomreal . ' ' . $real->prenomreal ?></h1>
        <p class="font-italic">Année de naissance : <?= $real->naissancereal ?></p>
        <p><strong>Biographie : </strong><br> <?= $real->biographie ?></p>
    </div>
</div>
<div class="container p-4 mt-5">
    <h1>Productions</h1>
    <div class="row">
        <?php foreach ($listefilm as $film): ?>
            <div class="col-md-3 mt-4">
                <div class="card mb-4 shadow-sm">
                    <a href="/public/index.php?p=film&id=<?= $film->id ?>">
                        <img src="<?= $film->urlaffiche ?>" class="card-img-top" alt="<?=  $film->nomfilm ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h5>
                        <p class="card-text"><?= $film->nomreal . ' ' . $film->prenomreal ?></p>
                        <p class="card-text font-italic"><?= $film->nomgenre ?></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-end">
                            <a href="/public/index.php?p=film&id=<?= $film->id ?>" class="btn btn-dark">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
