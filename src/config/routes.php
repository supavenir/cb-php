<?php
use Pecee\SimpleRouter\SimpleRouter;

function getTwig(){
    global $twig;
    return $twig;
}

SimpleRouter::get('/', function() {
    return getTwig()->render('index.html.twig');
});

SimpleRouter::get('/newCompte', function() {
    return getTwig()->render('compteForm.html.twig');
});

SimpleRouter::get('/message/{content}/{nb?}', function($content,$nb=1) {
    $res="";
    while($nb>0) {
        $res .= "message : $content<br>";
        $nb--;
    }
    return getTwig()->render('message.html.twig', ['message' => $res]);
});