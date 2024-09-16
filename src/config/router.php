<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::group(['namespace' => 'App\controllers'], function () {
    SimpleRouter::get('/', 'CBController@index');
    SimpleRouter::get('/newCompte', 'CBController@newCompteForm');
    SimpleRouter::post('/newCompte','CBController@newCompte');
    SimpleRouter::get('/fermer','CBController@fermer');
});