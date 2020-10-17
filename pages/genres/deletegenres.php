<?php

use App\Autoloader;
use App\Tables\Genre;

require_once '../src/Autoloader.php';
Autoloader::register();

$genres = new Genre();
$genres->deleteGenre($_GET['id']);
header('Location: index.php?p=gestiongenres&delete=1');