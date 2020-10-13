<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$test = new Film();
$films = $test->findAll();

?>

<div class="album py-5">
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
                            <p class="card-text">
                                <?php
                                $string = $film->synopsis;
                                $max = 100; // or 200, or whatever
                                if(strlen($string) > $max) {
                                    // find the last space < $max:
                                    $shorter = substr($string, 0, $max+1);
                                    $string = substr($string, 0, strrpos($shorter, ' ')).' ...';
                                }
                                echo $string;
                                ?>
                            </p>
                            <div class="d-flex justify-content-end">
                                <a href="/public/index.php?p=film&id=<?= $film->id ?>" class="btn btn-dark">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>





