<?php

use App\Autoloader;

require_once '../src/Autoloader.php';
Autoloader::register();

//Affecte la valeure 'home' si p n'a pas de valeur
if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

//En fonction de la valeur de p, on charge la page nécessaire, cela permet de faire un mini router pour avoir une URL un peu plus compréhensible
//Cela permet aussi de ne pas avoir a modifié tous les liens dans les fichiers HTML. Si on veut changer un lien on le fait ici, c'est mieux centralisé
ob_start();
if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'film') {
    require '../pages/films/film.php';
} elseif ($p === 'listefilms') {
    require '../pages/films/listefilms.php';
} elseif ($p === 'gestionfilms') {
    require '../pages/films/gestionfilms.php';
} elseif ($p === 'realisateur'){
    require '../pages/reals/realisateurs.php';
} elseif ($p === 'createfilm') {
    require '../pages/films/createfilm.php';
} elseif ($p === 'createreal'){
    require '../pages/reals/createreal.php';
} elseif ($p === 'creategenre'){
    require '../pages/genres/creategenre.php';
} elseif ($p === 'deletefilms'){
    require '../pages/films/deletefilms.php';
} elseif ($p === 'gestionreals'){
    require '../pages/reals/gestionreals.php';
} elseif ($p === 'deletereals'){
    require '../pages/reals/deletereals.php';
} elseif ($p === 'gestiongenres'){
    require '../pages/genres/gestiongenres.php';
}elseif ($p === 'deletegenres') {
    require '../pages/genres/deletegenres.php';
} elseif ($p === 'updatefilms') {
    require '../pages/films/updatefilms.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php';