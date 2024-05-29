<?php

session_start();

require '../tools/db.php';

$requestUri = trim($_SERVER['REQUEST_URI'], '/');

$urlNoSlash = explode('/',  $requestUri);

if (isset($_GET['debug'])) {
    echo "URL appelée : " . $_SERVER['REQUEST_URI'] . "<br>";

    echo "URL découpé : ";
    print_r($urlNoSlash);
    echo '<br>';

    echo 'Controller appelé : ' . $urlNoSlash[0] . '.php<br>';
}

$controller = $urlNoSlash[0];

if ('' === $urlNoSlash[0]) {
    include_once '../view/home.php';
    die;
}

$fichierController = '../controllers/' . $controller . '.php';
if (file_exists($fichierController)) {
    include_once $fichierController;
    die;
} else {
    echo 'controller non trouvé du coup 404 <br>';
}

include_once '../view/404.php';
die;