<?php

use App\Autoloader;

require_once '../src/Autoloader.php';
Autoloader::register();

if (isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'film') {
    require '../pages/film.php';
} elseif ($p === 'listefilms') {
    require '../pages/listefilms.php';
} elseif ($p === 'gestionfilms') {
    require '../pages/gestionfilms.php';
} elseif ($p === 'realisateur'){
    require '../pages/realisateurs.php';
} elseif ($p === 'createfilm') {
    require '../pages/createfilm.php';
} elseif ($p === 'createreal'){
    require '../pages/createreal.php';
} elseif ($p === 'creategenre'){
    require '../pages/creategenre.php';
} elseif ($p === 'deletefilms'){
    require '../pages/deletefilms.php';
} elseif ($p === 'gestionreals'){
    require '../pages/gestionreals.php';
} elseif ($p === 'deletereals'){
    require '../pages/deletereals.php';
} elseif ($p === 'gestiongenres'){
    require '../pages/gestiongenres.php';
}elseif ($p === 'deletegenres') {
    require '../pages/deletegenres.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';