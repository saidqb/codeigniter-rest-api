<?php

$routes->get('/', 'Home::index');

$routes->post('/login', 'Auth::login', ['as' => 'login']);

$routes->get('user', 'User::index');
$routes->post('user', 'User::store');
$routes->get('user/(:num)', 'User::show/$1');
$routes->post('user/(:num)', 'User::update/$1');
$routes->post('user/delete/(:num)', 'User::destroy/$1');