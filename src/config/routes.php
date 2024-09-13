<?php
use Pecee\SimpleRouter\SimpleRouter;

function getTwig(){
    global $twig;
    return $twig;
}
SimpleRouter::group(['namespace' => 'App\controllers'], function () {
    SimpleRouter::get('/', 'CBController@index');
    SimpleRouter::get('/newCompte', 'CBController@newCompteForm');
    SimpleRouter::post('/newCompte', 'CBController@newCompteCreate');
    SimpleRouter::get('/fermer', 'CBController@fermer');
});
