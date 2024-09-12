<?php

require "./../vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('./../src/templates/');
$twig = new \Twig\Environment($loader, []);

require "./../src/config/routes.php";

\Pecee\SimpleRouter\SimpleRouter::start();
