<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$films = new Film();
//La variable film contient le film dont l'id est celui passé dans $_GET['id']
$film = $films->findById($_GET['id']);
$filmsByGenre = $films->findByGenreId($film->genre_id);


$title = 'Ehoh Ciné | ' . $film->nomfilm;
?>
<div class="container d-flex bg-light rounded p-4 shadow-sm mb-5">
    <img class="rounded shadow-sm" src="<?= $film->urlaffiche ?>" alt="<?= $film->nomfilm ?> (<?= $film->anneereal ?>)" style="height: 350px">
    <div class="ml-4">
        <h1><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h1>
        <p><a href="index.php?p=realisateur&id=<?= $film->real_id ?>"><strong><?= $film->nomreal . ' ' . $film->prenomreal?></strong></a></p>
        <p class="font-italic"><?= $film->nomgenre ?></p>
        <p><strong>Synopsis : </strong><br> <?= $film->synopsis ?></p>
    </div>
</div>
<div class="container p-4 mt-4">
    <h1>Films avec le genre <?=$film->nomgenre?></h1>
    <div class="row">
        <?php foreach ($filmsByGenre as $film): ?>
            <div class="col-md-3 mt-4">
                <div class="card mb-4 shadow-sm">
                    <a href="index.php?p=film&id=<?= $film->id ?>">
                        <img src="<?= $film->urlaffiche ?>" class="card-img-top" alt="<?=  $film->nomfilm ?>">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h5>
                        <p class="card-text"><?= $film->nomreal . ' ' . $film->prenomreal ?></p>
                        <p class="card-text font-italic"><?= $film->nomgenre ?></p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-end">
                            <a href="index.php?p=film&id=<?= $film->id ?>" class="btn btn-dark">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>



