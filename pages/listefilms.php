<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$title = 'Liste des films';

$test = new Film();

if (isset($_POST['search'])){
    $search = '%' . mb_strtolower($_POST['search']) . '%';
    $filmssearched = $test->researchByName(mb_strtolower($search));
}

$films = $test->findAll();
?>

<div class="container">
    <div class="album py-5">
            <div class="active-cyan-4 mb-5">
                <h1 class="mb-4">Rechercher un film</h1>
                <form method="post" class="d-flex">
                    <input class="form-control" type="text" placeholder="Pulp Fiction, Le Parrain ..." id="search" name="search"
                        <?php if(isset($_POST['search'])): ?> <?= 'value="' . $_POST['search'] . '"' ?> <?php endif ?>>
                    <button class="btn btn-dark ml-2">Rechercher</button>
                </form>
            </div>
            <h1 class="mb-5">Liste des films</h1>
            <div class="row">
                <?php if(!isset($_POST['search'])): ?>
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
                                        $max = 110;
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
                <?php else: ?>
                    <?php foreach ($filmssearched as $film): ?>
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="<?= $film->urlaffiche ?>" class="card-img-top" alt="<?=  $film->nomfilm ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h5>
                                    <p class="card-text"><?= $film->nomreal . ' ' . $film->prenomreal ?></p>
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
                <?php endif ?>
            </div>
    </div>
</div>






