<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::group(['namespace' => 'App\controllers'], function () {
    SimpleRouter::get('/', 'CBController@index');
    SimpleRouter::get('/newCompte', 'CBController@newCompteForm');
    SimpleRouter::post('/newCompte','CBController@newCompte');
    SimpleRouter::get('/fermer','CBController@fermer');
    SimpleRouter::get('/admin','AdminController@index');
    SimpleRouter::get('/admin/add','AdminController@addUserForm');
    SimpleRouter::post('/admin/add','AdminController@addUser');
    SimpleRouter::get('/admin/update/{id}','AdminController@updateUserForm');
    SimpleRouter::post('/admin/update','AdminController@updateUser');
    SimpleRouter::post('/admin/delete','AdminController@deleteUser');

});