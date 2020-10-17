<?php

use App\Autoloader;
use App\Tables\Film;

require_once '../src/Autoloader.php';
Autoloader::register();

$films = new Film();
$films->deleteFilm($_GET['id']);
header('Location: /public/index.php?p=gestionfilms&delete=1');

