<?php
use Pecee\SimpleRouter\SimpleRouter;

require "./../vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('./../src/templates');
$twig = new \Twig\Environment($loader, ["file_name_pattern"=>"*.html.twig"]);

require "./../src/config/router.php";


SimpleRouter::start();
