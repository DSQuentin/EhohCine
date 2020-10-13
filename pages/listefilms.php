<?php

use App\Autoloader;
use App\Tables\Film;

require './templates/header.php';
require '../src/Autoloader.php';
Autoloader::register();

$test = new Film();
$films = $test->findAll();
?>

<div class="album py-5 bg-light">
    <div class="container">
        <h1 class="mb-5">Liste des films</h1>
        <div class="row">
            <?php foreach ($films as $film): ?>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?= $film->urlaffiche ?>" class="card-img-top" alt="<?=  $film->nomfilm ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h5>
                            <p class="card-text"><?= $film->nomreal . ' ' . $film->prenomreal ?></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-end">
                                <a href="/pages/film.php&id=<?= $film->id ?>" class="btn btn-dark">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>





<?php require './templates/footer.php'; ?>
