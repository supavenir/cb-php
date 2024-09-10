<?php
use Pecee\SimpleRouter\SimpleRouter;
use App\models\CompteBancaire;

SimpleRouter::get('/', function() {
    return 'Hello world';
});

SimpleRouter::get('/cb/{solde?}', function($solde=0) {
    $cb=new CompteBancaire("Toto",$solde);
    include "./../src/templates/cbView.php";
});