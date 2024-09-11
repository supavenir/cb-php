<?php
use Pecee\SimpleRouter\SimpleRouter;
use App\models\CompteBancaire;

function getMenu() {
    if(isset($_SESSION['cb'])){
        return [
            ['caption'=>'Dépôt','route'=>'/'],
            ['caption'=>'Retrait','route'=>'/'],
            ['caption'=>'Fermer le compte','route'=>'/fermer']
            ];
    }
    return [['caption' => 'Créer un compte', 'route' => '/newCompte']];
}

SimpleRouter::get('/', function() {
    global $twig;
    $cb=$_SESSION['cb']??null;
    return $twig->render('cbView.html.twig',['cb'=>$cb,'menu'=>getMenu()]);
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

SimpleRouter::get('/fermer', function() {
    global $twig;
    $_SESSION['cb']=null;
    unset($_SESSION['cb']);
    return SimpleRouter::response()->redirect('/');
});