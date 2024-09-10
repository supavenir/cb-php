<?php
use App\models\CompteBancaire;

require "./../vendor/autoload.php";

$cb=new CompteBancaire("Toto");
echo $cb;
echo "<br>";

$cb=new CompteBancaire("Toto",500);
echo $cb;
