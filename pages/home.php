<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$test = new Film();
$films = $test->find3Last();
?>

<section class="jumbotron text-center">
    <div class="container">
        <h1>EhOh Cine !</h1>
        <p class="lead text-muted">Le site de référencement de films</p>
    </div>
</section>

<section class="container">
    <h1 class="mb-3">Qu'est ce que EhohCine ?</h1>
    <p style="font-size: 1.5rem;">
        EhohCine est un site internet créé pour un projet de cours en 2ème année de DUT Informatique. <br/>
        Ce projet a pour objectif d'évaluer nos connaissances acquises en développement web.<br/>
        Il a été effectué en groupe de 3 et est formé de : DA SILVA Quentin, GOMES Bruno et GRONEAU Benoit.
    </p>
</section>

<section class="album py-5">
    <div class="container">
        <h1 class="mb-5">Les derniers films ajoutés</h1>
        <div class="row">
            <?php foreach ($films as $film): ?>
            <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="/public/index.php?p=film&id=<?= $film->id ?>"><img src="<?= $film->urlaffiche ?>" class="card-img-top" alt="<?=  $film->nomfilm ?>"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h5>
                            <p class="card-text"><?= $film->nomreal . ' ' . $film->prenomreal ?></p>
                            <p class="card-text font-italic"><?= $film->nomgenre ?></p>
                            <p class="card-text">
                            <?php
                                $string = $film->synopsis;
                                $max = 130; // or 200, or whatever
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
</section>




