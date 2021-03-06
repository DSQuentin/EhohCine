<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$title = 'Liste des films';

//En instanciant Film, on se connecte a PDO, on peut ainsi manipuler les données
$test = new Film();

//Si la valeur 'search' existe dans $_POST, alors on créer une variable filmssearched qui contient tous les films correspondant a la recherche
if (isset($_POST['search'])){
    $search = '%' . mb_strtolower($_POST['search']) . '%';
    $filmssearched = $test->researchByName(mb_strtolower($search));
}

//La variable films est un tableau contenant tous les films de la base de données
$films = $test->findAll();

//en fonction de la valeur de sort, on change la valeur de films pour qu'elle contienne les films dans l'ordre voulu
if (isset($_GET['sort']) && $_GET['sort'] === 'nomfilm') {
    $films = $test->sortByName();
} elseif (isset($_GET['sort']) && $_GET['sort'] === 'nomgenre') {
    $films = $test->sortByGenre();
} elseif (isset($_GET['sort']) && $_GET['sort'] === 'nomreal') {
    $films = $test->sortByReal();
}
?>

<div class="container">
    <div class="album py-5">
            <div class="row">
                <div class="active-cyan-4 mb-5 col">
                    <h1 class="mb-4">Rechercher un film</h1>
                    <form method="post" class="d-flex">
                        <input class="form-control" type="text" placeholder="Pulp Fiction, Le Parrain ..." id="search" name="search"
                            <?php if(isset($_POST['search'])): ?> <?= 'value="' . $_POST['search'] . '"' ?> <?php endif ?>>
                        <button class="btn btn-dark ml-2">Rechercher</button>
                    </form>
                </div>
                <div class="col border-left">
                    <h1 class="mb-4">Trier</h1>
                    <a href="index.php?p=listefilms&sort=nomfilm" class="btn btn-dark">Par ordre alphabétique</a>
                    <a href="index.php?p=listefilms&sort=nomgenre" class="btn btn-dark">Par Genre</a>
                    <a href="index.php?p=listefilms&sort=nomreal" class="btn btn-dark">Par Realisateur</a>
                </div>
            </div>
            <h1 class="mb-5">Liste des films</h1>
            <div class="row">
                <?php if(!isset($_POST['search'])): ?>
                    <?php foreach ($films as $film): ?>
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                                <a href="index.php?p=film&id=<?= $film->id ?>">
                                    <img src="<?= $film->urlaffiche ?>" class="card-img-top" alt="<?=  $film->nomfilm ?>">
                                </a>                                <div class="card-body">
                                    <h5 class="card-title"><?= $film->nomfilm ?> (<?= $film->anneereal ?>)</h5>
                                    <p class="card-text"><?= $film->nomreal . ' ' . $film->prenomreal ?></p>
                                    <p class="card-text font-italic"><?= $film->nomgenre ?></p>
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
                                        <a href="index.php?p=film&id=<?= $film->id ?>" class="btn btn-dark">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                <?php else: ?>
                    <?php foreach ($filmssearched as $film): ?>
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                                <a href="index.php?p=film&id=<?= $film->id ?>">
                                    <img src="<?= $film->urlaffiche ?>" class="card-img-top" alt="<?=  $film->nomfilm ?>">
                                </a>
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
                                        <a href="index.php?p=film&id=<?= $film->id ?>" class="btn btn-dark">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
    </div>
</div>






