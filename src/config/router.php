<?php
use Pecee\SimpleRouter\SimpleRouter;
use App\models\CompteBancaire;


SimpleRouter::get('/', function() {
    global $twig;
    $cb=$_SESSION['cb']??null;
    return $twig->render('cbView.html.twig',['cb'=>$cb]);
});

SimpleRouter::get('/newCompte', function() {
    global $twig;
    return $twig->render('newCompte.html.twig');
});

SimpleRouter::post('/create', function(){
    global $twig;
    $titulaire=$_POST['titulaire'];
    $cb=new CompteBancaire($titulaire);
    $_SESSION['cb']=$cb;
    return $twig->render('cbView.html.twig',['cb'=>$cb]);
});