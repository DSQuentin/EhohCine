<?php

use App\Autoloader;
use App\Tables\Genre;

require_once '../src/Autoloader.php';
Autoloader::register();

$genres = new Genre();
$genres->deleteGenre($_GET['id']);
header('Location: /public/index.php?p=gestionfilms&delete=3');