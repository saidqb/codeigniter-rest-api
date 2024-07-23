<?php

$routes->get('/', 'Home::index');

$routes->post('/login', 'Auth::login', ['as' => 'login']);
$routes->get('/login', 'Auth::login', ['as' => 'login']);