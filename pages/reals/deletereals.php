<?php

use App\Autoloader;
use App\Tables\Realisateur;

require_once '../src/Autoloader.php';
Autoloader::register();

$reals = new Realisateur();
$reals->deleteReal($_GET['id']);
header('Location: index.php?p=gestionreals&delete=1');

