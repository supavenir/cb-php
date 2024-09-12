<?php
use Pecee\SimpleRouter\SimpleRouter;

function getTwig(){
    global $twig;
    return $twig;
}

SimpleRouter::get('/', function() {
    return 'Hello world';
});

SimpleRouter::get('/message/{content}/{nb?}', function($content,$nb=1) {
    $res="";
    while($nb>0) {
        $res .= "message : $content<br>";
        $nb--;
    }
    return getTwig()->render('message.html.twig', ['message' => $res]);
});